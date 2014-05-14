<?php
App::uses('AppController', 'Controller');
/**
 * Activities Controller
 *
 * @property Activity $Activity
 */
class ActivitiesController extends AppController {

    public $layout = 'activityview';

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Activity->recursive = 0;
		$this->set('activities', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Activity->recursive = 2;
                $this->Activity->id = $id;
                $this->set('user', $this->Auth->user());
		if (!$this->Activity->exists()) {
			throw new NotFoundException(__('Invalid activity'));
		}
		$this->set('activity', $this->Activity->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($sectionid = null) {
                if ($this->request->is('post')) {
			$this->Activity->create();
			if ($this->Activity->save($this->request->data)) {
				$this->Session->setFlash(__('The activity has been saved'));
				$this->redirect(array('controller'=>'sections', 'action' => 'view', $sectionid));
			} else {
				$this->Session->setFlash(__('The activity could not be saved. Please, try again.'));
			}
		}
		$sections = $this->Activity->Section->find('all', array('conditions'=>array('Section.id'=>$sectionid)));
                $this->Activity->Section->id = $sectionid;
		$types = $this->Activity->Type->find('list', array(
                    'conditions'=>array(
                        'Type.id'=>array(1,2,3,4,5,6,7,13)
                    )
                ));
		$resources = $this->Activity->Resource->find('list');
		$this->set(compact('sections', 'types', 'resources'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Activity->recursive=2;
                $this->Activity->id = $id;
		if (!$this->Activity->exists()) {
			throw new NotFoundException(__('Invalid activity'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Activity->save($this->request->data)) {
				$this->Session->setFlash(__('The activity has been saved'));
				$this->redirect(array('action' => 'view', $id));
			} else {
				$this->Session->setFlash(__('The activity could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Activity->read(null, $id);
		}
		$activities = $this->Activity->find('all', array('conditions'=>array('Activity.id'=>$id)));
                $sections = $this->Activity->Section->find('list');
		$types = $this->Activity->Type->find('list', array(
                    'conditions'=>array(
                        'Type.id'=>array(1,2,3,4,5,6,7,13)
                    )
                ));
		$resources = $this->Activity->Resource->find('list');
		$this->set(compact('sections', 'types', 'resources', 'activities'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null, $sectionid = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Activity->id = $id;
                $this->Activity->Section->id = $sectionid;
		if (!$this->Activity->exists()) {
			throw new NotFoundException(__('Invalid activity'));
		}
		if ($this->Activity->delete()) {
			$this->Session->setFlash(__('Activity deleted'));
			$this->redirect(array('controller'=>'sections', 'action' => 'view', $sectionid));
		}
		$this->Session->setFlash(__('Activity was not deleted'));
		$this->redirect(array('controller'=>'sections', 'action' => 'view', $sectionid));
	}
        
        public function preview($id = null){
            $this->Activity->id=$id;
            $this->set('activity', $this->Activity->read(null, $id));
            $this->layout = 'sessionpreview';
        }
}
