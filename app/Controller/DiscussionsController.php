<?php
App::uses('AppController', 'Controller');
/**
 * Discussions Controller
 *
 * @property Discussion $Discussion
 */
class DiscussionsController extends AppController {

    public $layout = 'activityview';

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Discussion->recursive = 0;
		$this->set('discussions', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
                $this->Discussion->recursive = 2;
		$this->Discussion->id = $id;
		if (!$this->Discussion->exists()) {
			throw new NotFoundException(__('Invalid discussion'));
		}
		$this->set('discussion', $this->Discussion->read(null, $id));
                $activities = $this->Discussion->Activity->read(null, $id);
                $this->set(compact('activities'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($activityid = null) {
		$this->Discussion->recursive = 2;
                if ($this->request->is('post')) {
			$this->Discussion->create();
			if ($this->Discussion->save($this->request->data)) {
				$this->Session->setFlash(__('The discussion has been saved'));
				$this->redirect(array('controller'=>'activities', 'action' => 'view', $activityid));
			} else {
				$this->Session->setFlash(__('The discussion could not be saved. Please, try again.'));
			}
		}
                $this->Discussion->Activity->id = $activityid;
		$activities = $this->Discussion->find('all');
                
                $activity = $this->Discussion->Activity->find('all', array('conditions'=>array('Activity.id'=>$activityid)));
		$this->set(compact('activityid', 'activities', 'activity'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
		public function edit($id = null, $activityid = null) {
            $this->Discussion->recursive = -1;
		$this->Discussion->id = $id;
                $this->Discussion->Activity->id = $activityid;
		if (!$this->Discussion->exists()) {
			throw new NotFoundException(__('Invalid discussion'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Discussion->save($this->request->data)) {
				$this->Session->setFlash(__('The discussion has been saved'));
				$this->redirect(array('controller'=>'activities', 'action' => 'view', $this->request->data['Discussion']['activity_id']));
			} else {
				$this->Session->setFlash(__('The discussion could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Discussion->read(null, $id);
		}
                $activity = $this->Discussion->Activity->find('all', array('conditions'=>array('Activity.id'=>$activityid)));
		$this->set(compact('activity'));
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
		$this->Discussion->id = $id;
		if (!$this->Discussion->exists()) {
			throw new NotFoundException(__('Invalid discussion'));
		}
		if ($this->Discussion->delete()) {
			$this->Session->setFlash(__('Discussion deleted'));
			$this->redirect(array('controller'=>'activities', 'action' => 'view', $sectionid));
		}
		$this->Session->setFlash(__('Discussion was not deleted'));
		$this->redirect(array('controller'=>'activities', 'action' =>'view', $sectionid));
	}
}
