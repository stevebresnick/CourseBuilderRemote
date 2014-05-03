<?php
App::uses('AppController', 'Controller');
/**
 * ResourcesSections Controller
 *
 * @property ResourcesSection $ResourcesSection
 */
class ResourcesSectionsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ResourcesSection->recursive = 0;
		$this->set('resourcesSections', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ResourcesSection->id = $id;
		if (!$this->ResourcesSection->exists()) {
			throw new NotFoundException(__('Invalid resources section'));
		}
		$this->set('resourcesSection', $this->ResourcesSection->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ResourcesSection->create();
			if ($this->ResourcesSection->save($this->request->data)) {
				$this->Session->setFlash(__('The resources section has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The resources section could not be saved. Please, try again.'));
			}
		}
		$sections = $this->ResourcesSection->Section->find('list');
		$resources = $this->ResourcesSection->Resource->find('list');
		$this->set(compact('sections', 'resources'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ResourcesSection->id = $id;
		if (!$this->ResourcesSection->exists()) {
			throw new NotFoundException(__('Invalid resources section'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ResourcesSection->save($this->request->data)) {
				$this->Session->setFlash(__('The resources section has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The resources section could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ResourcesSection->read(null, $id);
		}
		$sections = $this->ResourcesSection->Section->find('list');
		$resources = $this->ResourcesSection->Resource->find('list');
		$this->set(compact('sections', 'resources'));
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
		$this->ResourcesSection->id = $id;
		if (!$this->ResourcesSection->exists()) {
			throw new NotFoundException(__('Invalid resources section'));
		}
		if ($this->ResourcesSection->delete()) {
			$this->Session->setFlash(__('Resources section deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Resources section was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
