<?php
App::uses('AppController', 'Controller');
/**
 * ActivitiesResources Controller
 *
 * @property ActivitiesResource $ActivitiesResource
 */
class ActivitiesResourcesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ActivitiesResource->recursive = 0;
		$this->set('activitiesResources', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ActivitiesResource->id = $id;
		if (!$this->ActivitiesResource->exists()) {
			throw new NotFoundException(__('Invalid activities resource'));
		}
		$this->set('activitiesResource', $this->ActivitiesResource->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ActivitiesResource->create();
			if ($this->ActivitiesResource->save($this->request->data)) {
				$this->Session->setFlash(__('The activities resource has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The activities resource could not be saved. Please, try again.'));
			}
		}
		$activities = $this->ActivitiesResource->Activity->find('list');
		$resources = $this->ActivitiesResource->Resource->find('list');
		$this->set(compact('activities', 'resources'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ActivitiesResource->id = $id;
		if (!$this->ActivitiesResource->exists()) {
			throw new NotFoundException(__('Invalid activities resource'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ActivitiesResource->save($this->request->data)) {
				$this->Session->setFlash(__('The activities resource has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The activities resource could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ActivitiesResource->read(null, $id);
		}
		$activities = $this->ActivitiesResource->Activity->find('list');
		$resources = $this->ActivitiesResource->Resource->find('list');
		$this->set(compact('activities', 'resources'));
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
		$this->ActivitiesResource->id = $id;
		if (!$this->ActivitiesResource->exists()) {
			throw new NotFoundException(__('Invalid activities resource'));
		}
		if ($this->ActivitiesResource->delete()) {
			$this->Session->setFlash(__('Activities resource deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Activities resource was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
