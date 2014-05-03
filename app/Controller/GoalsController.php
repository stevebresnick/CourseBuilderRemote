<?php
App::uses('AppController', 'Controller');
/**
 * Goals Controller
 *
 * @property Goal $Goal
 */
class GoalsController extends AppController {

public $layout = 'activityview';
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Goal->recursive = 0;
		$this->set('goals', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Goal->id = $id;
		if (!$this->Goal->exists()) {
			throw new NotFoundException(__('Invalid goal'));
		}
		$this->set('goal', $this->Goal->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($activityid = null) {
		$this->Goal->Activity->id = $activityid;
                if ($this->request->is('post')) {
			$this->Goal->create();
			if ($this->Goal->save($this->request->data)) {
				$this->Session->setFlash(__('The goal has been saved'));
				$this->redirect(array('action' => 'add', $activityid));
			} else {
				$this->Session->setFlash(__('The goal could not be saved. Please, try again.'));
			}
		}
		$activities = $this->Goal->Activity->find('all', array('conditions'=>array('Activity.id'=>$activityid)));
		$this->set(compact('activities', 'activityid'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null, $activityid = null) {
		$this->Goal->recursive = -1;
                $this->Goal->id = $id;
                $this->Goal->Activity->id = $activityid;
		if (!$this->Goal->exists()) {
			throw new NotFoundException(__('Invalid goal'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Goal->save($this->request->data)) {
				$this->Session->setFlash(__('The goal has been saved'));
				$this->redirect(array('action' => 'edit', $id, $activityid));
			} else {
				$this->Session->setFlash(__('The goal could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Goal->read(null, $id);
		}
		$activities = $this->Goal->Activity->find('all', array('conditions'=>array('Activity.id'=>$activityid)));
		$this->set(compact('activities'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null, $activityid = null) {
                if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Goal->id = $id;
		if (!$this->Goal->exists()) {
			throw new NotFoundException(__('Invalid goal'));
		}
		if ($this->Goal->delete()) {
			$this->Session->setFlash(__('Goal deleted'));
			$this->redirect(array('action' => 'add', $activityid));
		}
		$this->Session->setFlash(__('Goal was not deleted'));
		$this->redirect(array('action' => 'add', $activityid));
	}
}
