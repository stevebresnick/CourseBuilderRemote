<?php
App::uses('AppController', 'Controller');
/**
 * Overviews Controller
 *
 * @property Overview $Overview
 */
class OverviewsController extends AppController {

public $layout = 'sectionview';
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Overview->recursive = 1;
		$this->set('overviews', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
            $this->Overview->recursive = 2;
		$this->Overview->id = $id;
		if (!$this->Overview->exists()) {
			throw new NotFoundException(__('Invalid overview'));
		}
		$this->set('overview', $this->Overview->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($sectionid=null) {
            $this->Overview->recursive = 2;
		if ($this->request->is('post')) {
			$this->Overview->create();
			if ($this->Overview->save($this->request->data)) {
				$this->Session->setFlash(__('The overview has been saved'));
				$this->redirect(array('controller'=>'sections', 'action' => 'view/'.$sectionid));
			} else {
				$this->Session->setFlash(__('The overview could not be saved. Please, try again.'));
			}
		}
		$sections = $this->Overview->Section->find('all', array('conditions'=>array('Section.id'=>$sectionid)));
		$this->set(compact('sections'));
                $this->Overview->Section->id = $sectionid;
                $this->set(compact('sectionid'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null, $sectionid = null) {
		$this->Overview->id = $id;
                $this->Overview->recursive = 2;
		if (!$this->Overview->exists()) {
			throw new NotFoundException(__('Invalid overview'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Overview->save($this->request->data)) {
				$this->Session->setFlash(__('The overview has been saved'));
				$this->redirect(array('action' => 'add', $sectionid));
			} else {
				$this->Session->setFlash(__('The overview could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Overview->read(null, $id);
		}
                $overviews = $this->Overview->read(null, $id);
		$sections = $this->Overview->Section->find('list');
		$this->set(compact('sections', 'overviews', 'sectionid'));
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
		$this->Overview->id = $id;
		if (!$this->Overview->exists()) {
			throw new NotFoundException(__('Invalid overview'));
		}
		if ($this->Overview->delete()) {
			$this->Session->setFlash(__('Overview deleted'));
			$this->redirect(array('controller'=>'sections', 'action' => 'view', $sectionid));
		}
		$this->Session->setFlash(__('Overview was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
