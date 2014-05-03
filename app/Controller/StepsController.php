<?php
App::uses('AppController', 'Controller');
/**
 * Steps Controller
 *
 * @property Step $Step
 */
class StepsController extends AppController {

    public $layout = 'activityview';

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Step->recursive = 0;
		$this->set('steps', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Step->id = $id;
		if (!$this->Step->exists()) {
			throw new NotFoundException(__('Invalid step'));
		}
		$this->set('step', $this->Step->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($activityid = null) {
		if ($this->request->is('post')) {
			$this->Step->create();
			if ($this->Step->save($this->request->data)) {
				$this->Session->setFlash(__('The step has been saved'));
				$this->redirect(array('action' => 'add', $activityid));
			} else {
				$this->Session->setFlash(__('The step could not be saved. Please, try again.'));
			}
		}
		$activities = $this->Step->Activity->find('all', array('conditions'=>array('Activity.id'=>$activityid)));
		$this->set(compact('activities'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null, $activityid = null) {
		$this->Step->id = $id;
                $this->Step->Activity->id = $activityid;
		if (!$this->Step->exists()) {
			throw new NotFoundException(__('Invalid step'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Step->save($this->request->data)) {
				$this->Session->setFlash(__('The step has been saved'));
				$this->redirect(array('action' => 'add', $activityid));
			} else {
				$this->Session->setFlash(__('The step could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Step->read(null, $id);
		}
		$activities = $this->Step->Activity->find('all', array('conditions'=>array('Activity.id'=>$activityid)));
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
		$this->Step->id = $id;
		if (!$this->Step->exists()) {
			throw new NotFoundException(__('Invalid step'));
		}
		if ($this->Step->delete()) {
			$this->Session->setFlash(__('Step deleted'));
			$this->redirect(array('action' => 'add', $activityid));
		}
		$this->Session->setFlash(__('Step was not deleted'));
		$this->redirect(array('action' => 'add', $activityid));
	}
}
