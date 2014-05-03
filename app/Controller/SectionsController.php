<?php
App::uses('AppController', 'Controller');
/**
 * Sections Controller
 *
 * @property Section $Section
 */
class SectionsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Section->recursive = 0;
		$this->set('sections', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Section->id = $id;
                $this->Section->recursive = 2;
		if (!$this->Section->exists()) {
			throw new NotFoundException(__('Invalid section'));
		}
		$this->set('section', $this->Section->read(null, $id));
                $this->set('overview', $this->Section->Overview->find('list', $id));
                $session = $this->Section->find('first', array('conditions'=>array('Section.id'=>$id)));
                $sessionResource = $session['Resource'];
                $sessionActivity = $session['Activity'];
                $this->set(compact('session', 'sessionResource', 'sessionActivity'));
                $this->set('activity', $this->Section->Activity->find('threaded', array('section_id'=>$id)));
                $this->layout = 'sectionview';
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id=null) {
            $this->Section->Course->id = $id;
            $this->Section->recursive = 1;
		if ($this->request->is('post')) {
			$this->Section->create();
			if ($this->Section->save($this->request->data)) {
				$this->Session->setFlash(__('The section has been saved'));
				$this->redirect(array('controller'=>'courses', 'action' => 'view', $id));
			} else {
				$this->Session->setFlash(__('The section could not be saved. Please, try again.'));
			}
		}
		$courses = $this->Section->Course->find('list');
                $sections = $this->Section->Course->Section->find('all', array('conditions'=>array('Section.course_id'=>$id)));
		$scopes = $this->Section->Scope->find('list');
                $courseid = $id;
		$this->set(compact('courses', 'scopes', 'courseid', 'sections'));
                $this->layout = 'sectionview';
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
            $this->Section->recursive = 2;
		$this->Section->id = $id;
		if (!$this->Section->exists()) {
			throw new NotFoundException(__('Invalid section'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Section->save($this->request->data)) {
				$this->Session->setFlash(__('The session has been saved'));
				$this->redirect(array('action' => 'view', $this->request->data['Section']['section_id']));
			} else {
				$this->Session->setFlash(__('The session could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Section->read(null, $id);
		}
		$courses = $this->Section->Course->find('list');
		$scopes = $this->Section->Scope->find('list');
                $this->set('section', $this->Section->read(null, $id));
		$this->set(compact('courses', 'scopes'));
                $this->layout = 'sectionview';
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
		$this->Section->id = $id;
		if (!$this->Section->exists()) {
			throw new NotFoundException(__('Invalid section'));
		}
		if ($this->Section->delete()) {
			$this->Session->setFlash(__('Section deleted'));
			$this->redirect(array('controller'=>'courses', 'action' => 'view', $sectionid));
		}
		$this->Session->setFlash(__('Section was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
        
        public function outline($id = null) {
            $this->layout = 'outlineview';
            $this->Section->recursive = 2;
            $this->Section->id = $id;
            $this->set('type', $this->Section->Activity->Resource->Type->find('list'));
            $this->set('section', $this->Section->read(null, $id));
        }
        
        public function preview($id = null) {
            $this->layout = 'sessionpreview';
            $this->Section->recursive = 2;
            $this->Section->id = $id;
            $this->set('type', $this->Section->Activity->Resource->Type->find('list'));
            $this->set('section', $this->Section->read(null, $id));
        }
}
