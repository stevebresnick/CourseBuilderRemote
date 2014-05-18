<?php

App::uses('AppController', 'Controller');
App::import('Controller', 'sections');

/**
 * Courses Controller
 *
 * @property Course $Course
 */
class CoursesController extends AppController {

    public $user;
    
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index', 'view');
        $this->user = $this->Session->read('Auth.user');
        $this->set('user', $this->user);
    }

    public function index($master = null) {
        $this->Course->recursive = 0;
        $this->set('courses', $this->paginate());
        $newcourse = $this->Course->find('first', array(
            'order' => array('Course.id DESC')
                )
        );
        $this->set('newcourse', $newcourse);
        /* if ($master == 'master'){
          $this->set('courses', $this->paginate(array('master'=>TRUE)));
          $this->set(compact('master', $master));
          } else {
          $this->set('courses', $this->paginate(array('master'=>NULL)));
          } */
        $this->layout = 'courseview';
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Course->recursive = 2;
        $this->Course->id = $id;
        if (!$this->Course->exists()) {
            throw new NotFoundException(__('Invalid course'));
        }
        $this->set('course', $this->Course->read(null, $id));
        $this->layout = 'courseview';
        $this->set(compact('id'));

        //**Remove once testing is over***//
        $section = new SectionsController;
        $oldsections = $section->Section->find('all', array(
            'conditions' => array(
                'Course.id' => $id
            )
        ));
        $this->set('oldsections', $oldsections);
        $this->set('user', $this->Auth->user());
    }

    /**
     * add method
     *
     * @return void
     */
    public function add($master = NULL) {
        $this->Course->recursive = 2;
        if ($this->request->is('post')) {
            $this->Course->create();
            
            if ($master == 1) {
                $this->Course->set('master', 1);
            }

            if ($this->Course->save($this->request->data)) {
                $this->loadModel('CoursesUser');
                $this->CoursesUser->create();
                $this->CoursesUser->set('user_id', $this->Auth->user('id'));
                $this->CoursesUser->set('course_id', $this->Course->id);
                $this->CoursesUser->save();

                $this->Session->setFlash(__('The course has been saved'));
                $this->redirect(array('controller'=>'users','action' => 'dashboard'));
            } else {
                $this->Session->setFlash(__('The course could not be saved. Please, try again.'));
            }
        }
        $this->layout = 'courseview';
    }

    /**
     * edit method
     *
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Course->id = $id;
        if (!$this->Course->exists()) {
            throw new NotFoundException(__('Invalid course'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Course->save($this->request->data)) {
                $this->Session->setFlash(__('The course has been saved'));
                $this->redirect(array('action' => 'view', $id));
            } else {
                $this->Session->setFlash(__('The course could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Course->read(null, $id);
        }
        $this->set('course', $this->Course->read(null, $id));
        $this->layout = 'courseview';
    }

    /**
     * delete method
     *
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Course->id = $id;
        if (!$this->Course->exists()) {
            throw new NotFoundException(__('Invalid course'));
        }
        if ($this->Course->delete()) {
            $this->Session->setFlash(__('Course deleted'));
            $this->redirect(array('controller'=>'users','action' => 'dashboard'));
        }
        $this->Session->setFlash(__('Course was not deleted'));
        $this->redirect(array('controller'=>'users','action' => 'dashboard'));
    }

    public function isAuthorized($user) {
        // All registered users can add posts
        if ($this->action === 'add') {
            return true;
        }

        // The owner of a post can edit and delete it
        if (in_array($this->action, array('edit', 'delete'))) {
            $courseId = (int) $this->request->params['pass'][0];
            if ($this->Course->isOwnedBy($courseId, $user['id'])) {
                return true;
            }
        }

        return parent::isAuthorized($user);
    }

    public function outline($id = null) {
        $this->Course->recursive = 2;
        $this->Course->Section->recursive = 2;
        $this->Course->id = $id;
        if (!$this->Course->exists()) {
            throw new NotFoundException(__('Invalid course'));
        }
        $this->set('course', $this->Course->read(null, $id));
        $this->set('sections', $this->Course->Section->find('all', array('conditions' => array('Course.id' => $id), 'order' => array('Section.number' => 'asc'))));
        $this->layout = 'courseoutlineview';
        $this->set(compact('id'));
    }

    public function duplicate($id = NULL) {
        $this->Course->recursive = 2;
        $oldcourse = $this->Course->findById($id);
        $section = new SectionsController;
        $oldsections = $section->Section->find('all', array(
            'conditions' => array(
                'Course.id' => $id
            )
        ));
        $oldcourse['Course']['id'] = NULL;
        $oldcourse['Course']['title'] = $oldcourse['Course']['title'] . '_CLONE' . $oldcourse['Course']['created'];
        if ($this->Course->save($oldcourse)) {
            $newcourseid = $this->Course->id;
            foreach ($oldsections as $newsection) {
                $section->duplicate($newcourseid);
            };
            $this->redirect(array('controller'=>'users','action' => 'dashboard'));
        } else {
            $this->Session->setFlash('Didn\'t Clone Course');
        };
    }

    public function master() {
        $this->Course->recursive = 2;
        return $this->Course->find('all', array(
                    'conditions' => array(
                        'Course.master' => 1
                    )
        ));
    }

}
