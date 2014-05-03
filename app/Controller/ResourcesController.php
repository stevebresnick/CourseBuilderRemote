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
	public function index() {
		$this->Resource->recursive = 2;
		$this->set('resources', $this->paginate());
                $this->loadModel('Course');
                $this->set('course', $this->Course->find('list'));
                $this->layout = 'viewaddresource';
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Resource->id = $id;
                $this->Resource->recursive = 2;
		if (!$this->Resource->exists()) {
			throw new NotFoundException(__('Invalid resource'));
		}
		$this->set('resource', $this->Resource->find('first', array('conditions'=>array('Resource.id'=>$id))));
                $this->layout = 'resourceview';
	}

/**
 * add method
 *
 * @return void
 */
	public function add($sectionid = null, $activityid = null) {
		$this->Resource->recursive = 2;
                if ($activityid != null){
                    $this->Resource->Section->Activity->id = $activityid;
                    $activities = $this->Resource->Activity->find('first', array('conditions'=>array('Activity.id'=>$activityid)));
                    $sections = $this->Resource->Section->find('first', array('conditions'=>array('Section.id'=>$sectionid)));
                    $this->set(compact('activityid', 'activities'));
                    $this->layout = 'activityview';
                } else {
                    $this->Resource->Section->id = $sectionid;
                    $activities = $this->Resource->Section->find('first', array('conditions'=>array('Section.id'=>$sectionid))); //This is actually more accurately sections;
                    $this->set(compact('activities'));
                    $this->layout = 'sectionview';
                }
                if ($this->request->is('post')) {
			$this->Resource->create();
			if ($this->Resource->save($this->request->data)) {
				$this->Session->setFlash(__('The resource has been saved'));
                                if ($activityid != null){
                                    $this->redirect(array('controller'=>'activities', 'action' => 'view', $this->Resource->Section->Activity->id));
                                }
				$this->redirect(array('controller'=>'sections', 'action' => 'view', $this->Resource->Section->id));
			} else {
				$this->Session->setFlash(__('The resource could not be saved. Please, try again.'));
			}
		}
		$types = $this->Resource->Type->find('list', array(
                    'conditions'=>array(
                        'Type.id'=>array(1,2,4,6,8,9,10,11,12,14)
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
		if (!$this->Resource->exists()) {
			throw new NotFoundException(__('Invalid resource'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
                        if ('' === $this->request->data['Resource']['html']) {
                          $this->request->data['Resource']['html'] = null;  
                        };
                        if ($this->Resource->save($this->request->data)) {
				$this->Session->setFlash(__('The resource has been saved'));
                                if ($activityid != null){
                                    $this->redirect(array('controller'=>'activities', 'action' => 'view', $activityid));
                                } else {
                                    $this->redirect(array('controller'=>'sections', 'action' => 'view', $sectionid));
                                }
			} else {
				$this->Session->setFlash(__('The resource could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Resource->read(null, $id);
		}
		$types = $this->Resource->Type->find('list', array(
                    'conditions'=>array(
                        'Type.id'=>array(1,2,4,6,8,9,10,11,12,14)
                    )
                ));
		$sections = $this->Resource->Section->find('list');
		$this->set(compact('types', 'activities', 'sections'));
                if ($activityid != null){
                    $this->layout = 'activityview';
                    $this->Resource->Section->Activity->id = $activityid;
                    $activities = $this->Resource->Activity->find('first', array('conditions'=>array('Activity.id'=>$activityid)));
                    $sections = $this->Resource->Section->find('first', array('conditions'=>array('Section.id'=>$sectionid)));
                    $this->set(compact('activityid', 'activities'));
                }else if ($sectionid != null){
                    $this->layout = 'sectionview';
                    $this->Resource->Section->id = $sectionid;
                    $activities = $this->Resource->Section->find('first', array('conditions'=>array('Section.id'=>$sectionid))); //This is actually more accurately sections;
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
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Resource->id = $id;
		if (!$this->Resource->exists()) {
			throw new NotFoundException(__('Invalid resource'));
		}
		if ($this->Resource->delete()) {
			$this->Session->setFlash(__('Resource deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Resource was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
