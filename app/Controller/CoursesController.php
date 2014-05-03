<?php

App::uses('AppController', 'Controller');

/**
 * Courses Controller
 *
 * @property Course $Course
 */
class CoursesController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index($master = null) {
        $this->Course->recursive = 0;
        $this->set('courses', $this->paginate());
        /*if ($master == 'master'){
            $this->set('courses', $this->paginate(array('master'=>TRUE)));
            $this->set(compact('master', $master));
        } else {
            $this->set('courses', $this->paginate(array('master'=>NULL)));
        }*/
        $this->layout = 'courseview';
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Course->recursive = 2;
        $this->Course->id = $id;
        if (!$this->Course->exists()) {
            throw new NotFoundException(__('Invalid course'));
        }
        $this->set('course', $this->Course->read(null, $id));
        $this->layout = 'courseview';
        $this->set(compact('id'));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Course->create();
            if ($this->Course->save($this->request->data)) {
                $this->Session->setFlash(__('The course has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The course could not be saved. Please, try again.'));
            }
        }
        $this->layout = 'courseview';
    }

    /**
     * edit method
     *
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Course->id = $id;
        if (!$this->Course->exists()) {
            throw new NotFoundException(__('Invalid course'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Course->save($this->request->data)) {
                $this->Session->setFlash(__('The course has been saved'));
                $this->redirect(array('action' => 'view', $id));
            } else {
                $this->Session->setFlash(__('The course could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Course->read(null, $id);
        }
        $this->set('course', $this->Course->read(null, $id));
        $this->layout = 'courseview';
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
        $this->Course->id = $id;
        if (!$this->Course->exists()) {
            throw new NotFoundException(__('Invalid course'));
        }
        if ($this->Course->delete()) {
            $this->Session->setFlash(__('Course deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Course was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    public function outline($id = null) {
        $this->Course->recursive = 2;
        $this->Course->Section->recursive = 2;
        $this->Course->id = $id;
        if (!$this->Course->exists()) {
            throw new NotFoundException(__('Invalid course'));
        }
        $this->set('course', $this->Course->read(null, $id));
        $this->set('sections', $this->Course->Section->find('all', array('conditions' => array('Course.id' => $id), 'order' => array('Section.number' => 'asc'))));
        $this->layout = 'courseoutlineview';
        $this->set(compact('id'));
    }

    public function duplicate($id = null) {
        $clonedCourse = $this->Course->find('first', array('conditions' => array('Course.id' => $id)));
        //$this->set(compact('clonedCourse', $clonedCourse));
        unset($clonedCourse['Course']['id'], $clonedCourse['Course']['callnumber'], $clonedCourse['Course']['master']);
        $this->Course->create();
        $this->Course->set(array('fields'=>array('callnumber'=>'CLONE'.$id, 'title'=>$clonedCourse['Course']['title'].'__CLONE')));
        $this->Course->saveAll($clonedCourse);
        $this->redirect(array('action' => 'index'));
    }

}
