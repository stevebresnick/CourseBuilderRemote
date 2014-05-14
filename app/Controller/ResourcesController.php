<?php

App::uses('AppController', 'Controller');

/**
 * Resources Controller
 *
 * @property Resource $Resource
 */
class ResourcesController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index($sectionid = NULL, $activityid = NULL) {
        $this->Resource->recursive = 2;
        $this->set('resources', $this->paginate());

        //Find Courses List
        $this->loadModel('Course');
        $this->Course->recursive = 2;
        $this->set('course', $this->Course->find('list'));

        //Find All Sections
        $this->loadModel('Section');
        $this->Section->recursive = 0;
        $this->set('section', $this->Section->find('all'));
        $this->set('currentsection', $this->Section->findById($sectionid));
        
        $this->loadModel('Activity');
        $this->Activity->recursive = 2;
        $this->set('currentactivity', $this->Activity->findById($activityid));

        $this->layout = 'dashboard';
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null, $mode = null) {
        $this->set('mode', $mode);
        $this->Resource->id = $id;
        $this->Resource->recursive = 2;
        if (!$this->Resource->exists()) {
            throw new NotFoundException(__('Invalid resource'));
        }
        $this->set('resource', $this->Resource->find('first', array('conditions' => array('Resource.id' => $id))));
        $this->layout = 'resourceview';
    }

    /**
     * add method
     *
     * @return void
     */
    public function add($sectionid = null, $activityid = null) {
        $this->Resource->recursive = 2;
        if ($activityid != null) {
            $this->Resource->Section->Activity->id = $activityid;
            $activities = $this->Resource->Activity->find('first', array('conditions' => array('Activity.id' => $activityid)));
            $sections = $this->Resource->Section->find('first', array('conditions' => array('Section.id' => $sectionid)));
            $this->set(compact('activityid', 'activities'));
            $this->layout = 'activityview';
        } elseif ($sectionid != null) {
            $this->Resource->Section->id = $sectionid;
            $activities = $this->Resource->Section->find('first', array('conditions' => array('Section.id' => $sectionid))); //This is actually more accurately sections;
            $this->set(compact('activities'));
            $this->layout = 'sectionview';
        } else {
        $this->layout = 'resourceview';
        };
        if ($this->request->is('post')) {
            $this->Resource->create();
            if ($this->Resource->save($this->request->data)) {
                $this->Session->setFlash(__('The resource has been saved'));
                if ($activityid != null) {
                    $this->redirect(array('controller' => 'activities', 'action' => 'view', $this->Resource->Section->Activity->id));
                }
                $this->redirect(array('controller' => 'sections', 'action' => 'view', $this->Resource->Section->id));
            } else {
                $this->Session->setFlash(__('The resource could not be saved. Please, try again.'));
            }
        }
        $types = $this->Resource->Type->find('list', array(
            'conditions' => array(
                'Type.id' => array(1, 2, 4, 6, 8, 9, 10, 11, 12, 14)
            )
        ));
        $this->set(compact('types', 'sections'));
    }

    /**
     * edit method
     *
     * @param string $id
     * @return void
     */
    public function edit($id = null, $sectionid = null, $activityid = null) {
        $this->Resource->id = $id;
        $this->set('sectionid', $sectionid);
        $this->set('activityid', $activityid);
        $this->set('user', $this->Auth->user());
        if (!$this->Resource->exists()) {
            throw new NotFoundException(__('Invalid resource'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ('' === $this->request->data['Resource']['html']) {
                $this->request->data['Resource']['html'] = null;
            };
            if ($this->Resource->save($this->request->data)) {
                $this->Session->setFlash(__('The resource has been saved'));
                /*if ($activityid != null) {
                    $this->redirect(array('controller' => 'activities', 'action' => 'view', $activityid));
                } else {
                    $this->redirect(array('controller' => 'sections', 'action' => 'view', $sectionid));
                }*/
                $this->redirect(array('action'=>'index'));
            } else {
                $this->Session->setFlash(__('The resource could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Resource->read(null, $id);
        }
        $types = $this->Resource->Type->find('list', array(
            'conditions' => array(
                'Type.id' => array(1, 2, 4, 6, 8, 9, 10, 11, 12, 14)
            )
        ));
        $sections = $this->Resource->Section->find('list');
        $this->set(compact('types', 'activities', 'sections'));
        if ($activityid != null) {
            $this->layout = 'activityview';
            $this->Resource->Section->Activity->id = $activityid;
            $activities = $this->Resource->Activity->find('first', array('conditions' => array('Activity.id' => $activityid)));
            $sections = $this->Resource->Section->find('first', array('conditions' => array('Section.id' => $sectionid)));
            $this->set(compact('activityid', 'activities'));
        } else if ($sectionid != null) {
            $this->layout = 'sectionview';
            $this->Resource->Section->id = $sectionid;
            $activities = $this->Resource->Section->find('first', array('conditions' => array('Section.id' => $sectionid))); //This is actually more accurately sections;
            $this->set(compact('activities'));
        } else {
            $this->layout = 'resourceview';
        };
        $this->set('resources', $this->Resource->read(null, $id));
    }

    /**
     * delete method
     *
     * @param string $id
     * @return void
     */
    public function delete($id = null, $sectionid = null, $activityid = null) {
        $this->Resource->recursive = 1;
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Resource->id = $id;
        if (!$this->Resource->exists()) {
            throw new NotFoundException(__('Invalid resource'));
        }
        if ($this->Resource->delete()) {
            $this->Session->setFlash(__('Resource deleted'));
            if (isset($activityid)) {
                $this->redirect(array('controller'=>'activities', 'action' => 'view', $activityid));
            } else { $this->redirect(array('controller' => 'sections', 'action' => 'view', $sectionid));
            };
        }
        $this->Session->setFlash(__('Resource was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
    
    public function addto($id = null, $sectionid = null, $activityid = null) {
        $this->set('resourceid', $id);
        $this->set('resource', $this->Resource->findById($id));
        if(isset($sectionid)){
            if(isset($activityid)) {
                $this->loadModel('ActivitiesResource');
                $this->ActivitiesResource->set('resource_id', $id);
                $this->ActivitiesResource->set('activity_id', $activityid);
                $this->ActivitiesResource->save();
                $this->redirect(array('controller'=>'activities', 'action'=>'view', $activityid));
                } else {
                $this->loadModel('ResourcesSection');
                $this->ResourcesSection->set('resource_id', $id);
                $this->ResourcesSection->set('section_id', $sectionid);
                $this->ResourcesSection->save();
                $this->redirect(array('controller'=>'sections', 'action'=>'view', $sectionid));
            }   
            } else {
                $this->layout = 'dashboard';
                $this->loadModel('Course');
                $this->Course->recursive = 2;
                $user = $this->Session->read('Auth.User');
                $this->loadModel('CoursesUser');
                $this->CoursesUser->recursive = 2;
                $this->set('user', $user);
                if ($user['Group']['name'] == 'Admin') {
                    $this->set('courses', $this->Course->find('all'));
                    $this->set('role', 'Admin');
                }
                elseif ($user['Group']['name'] == 'Coursebuilders') {
                    $this->set('courses', $this->Course->find('all', array(
                    'conditions' => array(
                        'Course.master' => null
                    )
                )));
                    $this->set('courseuser', $this->CoursesUser->find('all', array(
                        'conditions' =>array(
                            'user_id' => $user['id']
                        ))));
                    $this->set('role', 'Coursebuilders');
                } else {
                    $this->redirect(array('controller'=>'users', 'action'=>'login'));
                }
            }
    }
    
    public function removefrom($id = null, $sectionid = null, $activityid = null) {
        $this->Resource->recursive = 1;
        
        if (!isset($activityid)) {
            $this->loadModel('ResourcesSection');
            $this->ResourcesSection->find('first', array(
                'conditions' => array(
                    'ResourcesSection.section_id' => $sectionid,
                    'ResourcesSection.resource_id' => $id
                )
            ));
            $this->ResourcesSection->deleteAll(array(
                    'section_id' => $sectionid,
                    'resource_id' => $id
                ), false
            );
            $this->redirect(array('controller'=>'sections', 'action'=>'view', $sectionid));
        } else {
            $this->loadModel('ActivitiesResource');
            $this->ActivitiesResource->find('first', array(
                'conditions' => array(
                    'ActivitiesResource.activity_id' => $activityid,
                    'ActivitiesResource.resource_id' => $id
                )
            ));
            $this->ActivitiesResource->deleteAll(array(
                    'activity_id' => $activityid,
                    'resource_id' => $id
                ), false
            );
            $this->redirect(array('controller'=>'activities', 'action'=>'view', $activityid));
            /*
            $this->ActivitiesResource->delete();
            $this->redirect(array('controller'=>'activities', 'action'=>'view', $activityid));  */  
        }
    }
}
