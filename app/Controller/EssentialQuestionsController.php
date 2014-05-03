<?php
App::uses('AppController', 'Controller');
/**
 * EssentialQuestions Controller
 *
 * @property EssentialQuestion $EssentialQuestion
 */
class EssentialQuestionsController extends AppController {

public $layout = 'sectionview';
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EssentialQuestion->recursive = 0;
		$this->set('essentialQuestions', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->EssentialQuestion->id = $id;
		if (!$this->EssentialQuestion->exists()) {
			throw new NotFoundException(__('Invalid essential question'));
		}
		$this->set('essentialQuestion', $this->EssentialQuestion->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($sectionid= null) {
                $this->EssentialQuestion->recursive = -2;
		if ($this->request->is('post')) {
			$this->EssentialQuestion->create();
			if ($this->EssentialQuestion->save($this->request->data)) {
				$this->Session->setFlash(__('The essential question has been saved'));
				$this->redirect(array('action' => 'add', $sectionid));
			} else {
				$this->Session->setFlash(__('The essential question could not be saved. Please, try again.'));
			}
		}
		$this->EssentialQuestion->Section->id = $sectionid;
                $sections = $this->EssentialQuestion->Section->find('all', array('conditions'=>array('Section.id'=>$sectionid)));
		$this->set(compact('sections', 'sectionid'));
                $setsectionid = $this->EssentialQuestion->find('all');
                $this->set(compact('setsectionid'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null, $sectionid= null) {
		$this->EssentialQuestion->recursive = 2;
                $this->EssentialQuestion->id = $id;
		if (!$this->EssentialQuestion->exists()) {
			throw new NotFoundException(__('Invalid essential question'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EssentialQuestion->save($this->request->data)) {
				$this->Session->setFlash(__('The essential question has been saved'));
				$this->redirect(array('action' => 'add', $sectionid));
			} else {
				$this->Session->setFlash(__('The essential question could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->EssentialQuestion->read(null, $id);
		}
		$this->EssentialQuestion->Section->id = $sectionid;
                $sections = $this->EssentialQuestion->Section->find('all', array('conditions'=>array('Section.id'=>$sectionid)));
		$this->set(compact('sections', 'sectionid'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null, $sectionid = null) {
		$sectionid = $this->request->data('section_id');
                if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->EssentialQuestion->id = $id;
		if (!$this->EssentialQuestion->exists()) {
			throw new NotFoundException(__('Invalid essential question'));
		}
		if ($this->EssentialQuestion->delete()) {
			$this->Session->setFlash(__('Essential question deleted'));
			$this->redirect(array('controller'=>'sections', 'action' => 'view', $sectionid));
		}
		$this->Session->setFlash(__('Essential question was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
