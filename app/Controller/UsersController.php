<?php
App::uses('AppController', 'Controller');
App::import('Controller', 'Courses');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
public function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow('initDB'); // We can remove this line after we're finished
}

public function initDB() {
    $group = $this->User->Group;

    // Allow admins to everything
    $group->id = 3;
    $this->Acl->allow($group, 'controllers');

    // allow managers to posts and widgets
    $group->id = 4;
    $this->Acl->deny($group, 'controllers');
    
    $this->Acl->allow($group, 'controllers/Activities/add');
    $this->Acl->deny($group, 'controllers/Activities/index');
    $this->Acl->allow($group, 'controllers/Activities/edit');
    $this->Acl->allow($group, 'controllers/Activities/preview');
    $this->Acl->allow($group, 'controllers/Activities/view');
    
    $this->Acl->allow($group, 'controllers/Courses/add');
    $this->Acl->deny($group, 'controllers/Courses/duplicate');
    $this->Acl->allow($group, 'controllers/Courses/edit');
    $this->Acl->allow($group, 'controllers/Courses/index');
    $this->Acl->allow($group, 'controllers/Courses/outline');
    $this->Acl->allow($group, 'controllers/Courses/view');
    
    $this->Acl->allow($group, 'controllers/Discussions/add');
    $this->Acl->allow($group, 'controllers/Discussions/edit');
    $this->Acl->deny($group, 'controllers/Discussions/index');
    $this->Acl->allow($group, 'controllers/Discussions/view');
    
    $this->Acl->allow($group, 'controllers/EssentialQuestions/add');
    $this->Acl->allow($group, 'controllers/EssentialQuestions/edit');
    $this->Acl->deny($group, 'controllers/EssentialQuestions/index');
    $this->Acl->allow($group, 'controllers/EssentialQuestions/view');
    
    $this->Acl->allow($group, 'controllers/Goals/add');
    $this->Acl->allow($group, 'controllers/Goals/edit');
    $this->Acl->deny($group, 'controllers/Goals/index');
    $this->Acl->allow($group, 'controllers/Goals/view');
    
    $this->Acl->allow($group, 'controllers/Overviews/add');
    $this->Acl->allow($group, 'controllers/Overviews/edit');
    $this->Acl->deny($group, 'controllers/Overviews/index');
    $this->Acl->allow($group, 'controllers/Overviews/view');
    
    $this->Acl->allow($group, 'controllers/Resources');
    $this->Acl->allow($group, 'controllers/Resources/brightcove');
    $this->Acl->allow($group, 'controllers/Resources/add');
    $this->Acl->allow($group, 'controllers/Resources/addto');
    
    $this->Acl->allow($group, 'controllers/Sections/add');
    $this->Acl->allow($group, 'controllers/Sections/edit');
    $this->Acl->deny($group, 'controllers/Sections/index');
    $this->Acl->allow($group, 'controllers/Sections/outline');
    $this->Acl->allow($group, 'controllers/Sections/preview');
    $this->Acl->allow($group, 'controllers/Sections/view');
    
    $this->Acl->deny($group, 'controllers/Users/add');
    $this->Acl->deny($group, 'controllers/Users/edit');
    $this->Acl->deny($group, 'controllers/Users/index');
    $this->Acl->allow($group, 'controllers/Users/dashboard');
    $this->Acl->allow($group, 'controllers/Users/login');
    $this->Acl->allow($group, 'controllers/Users/logout');
    $this->Acl->deny($group, 'controllers/Users/view');
    

    // allow users to only add and edit on posts and widgets
    $group->id = 6;
    $this->Acl->deny($group, 'controllers');
    
    $this->Acl->deny($group, 'controllers/Activities/add');
    $this->Acl->deny($group, 'controllers/Activities/index');
    $this->Acl->deny($group, 'controllers/Activities/edit');
    $this->Acl->allow($group, 'controllers/Activities/preview');
    $this->Acl->allow($group, 'controllers/Activities/view');
    
    $this->Acl->deny($group, 'controllers/Courses/add');
    $this->Acl->deny($group, 'controllers/Courses/duplicate');
    $this->Acl->deny($group, 'controllers/Courses/edit');
    $this->Acl->allow($group, 'controllers/Courses/index');
    $this->Acl->allow($group, 'controllers/Courses/outline');
    $this->Acl->allow($group, 'controllers/Courses/view');
    
    $this->Acl->deny($group, 'controllers/Discussions/add');
    $this->Acl->deny($group, 'controllers/Discussions/edit');
    $this->Acl->deny($group, 'controllers/Discussions/index');
    $this->Acl->allow($group, 'controllers/Discussions/view');
    
    $this->Acl->deny($group, 'controllers/EssentialQuestions/add');
    $this->Acl->deny($group, 'controllers/EssentialQuestions/edit');
    $this->Acl->deny($group, 'controllers/EssentialQuestions/index');
    $this->Acl->allow($group, 'controllers/EssentialQuestions/view');
    
    $this->Acl->deny($group, 'controllers/Goals/add');
    $this->Acl->deny($group, 'controllers/Goals/edit');
    $this->Acl->deny($group, 'controllers/Goals/index');
    $this->Acl->allow($group, 'controllers/Goals/view');
    
    $this->Acl->deny($group, 'controllers/Overviews/add');
    $this->Acl->deny($group, 'controllers/Overviews/edit');
    $this->Acl->deny($group, 'controllers/Overviews/index');
    $this->Acl->allow($group, 'controllers/Overviews/view');
    
    $this->Acl->deny($group, 'controllers/Resources/add');
    $this->Acl->deny($group, 'controllers/Resources/edit');
    $this->Acl->allow($group, 'controllers/Resources/index');
    $this->Acl->allow($group, 'controllers/Resources/view');
    
    $this->Acl->deny($group, 'controllers/Sections/add');
    $this->Acl->deny($group, 'controllers/Sections/edit');
    $this->Acl->deny($group, 'controllers/Sections/index');
    $this->Acl->allow($group, 'controllers/Sections/outline');
    $this->Acl->allow($group, 'controllers/Sections/preview');
    $this->Acl->allow($group, 'controllers/Sections/view');
    
    $this->Acl->deny($group, 'controllers/Users/add');
    $this->Acl->deny($group, 'controllers/Users/edit');
    $this->Acl->deny($group, 'controllers/Users/index');
    $this->Acl->deny($group, 'controllers/Users/dashboard');
    $this->Acl->allow($group, 'controllers/Users/login');
    $this->Acl->allow($group, 'controllers/Users/logout');
    $this->Acl->deny($group, 'controllers/Users/view');
    

    // allow basic users to log out
    $this->Acl->allow($group, 'controllers/users/logout');

    // we add an exit to avoid an ugly "missing views" error message
    echo "all done";
    exit;

}

        
        public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$groups = $this->User->Group->find('list');
		$courses = $this->User->Course->find('list');
		$this->set(compact('groups', 'courses'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$groups = $this->User->Group->find('list');
		$courses = $this->User->Course->find('list');
		$this->set(compact('groups', 'courses'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
        
        public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirect(array('action'=>'dashboard', $this->Session->read('Auth.User.id'))));
            }
            $this->Session->setFlash(__('Your username or password was incorrect.'));
        }
        if ($this->Session->read('Auth.User')) {
            $this->Session->setFlash('You are logged in!');
            return $this->redirect(array('action' => 'dashboard', $this->Session->read('Auth.User.id')));
        };
        $this->layout = 'login';
        //Show additional data- dashboard style
        $this->loadModel('Course');
        $this->Course->recursive = 0;
        $this->set('courses', $this->Course->find('all'));
    }

    public function logout() {
        $this->Session->setFlash('Good-Bye');
        $this->redirect($this->Auth->logout());
    }
    
    public function dashboard($id = NULL){
        $this->layout = 'dashboard';
        
        $user = $this->Session->read('Auth.User');
        $this->set('user', $user);
        $this->set('userid', $user['id']);
        
        //Find All Courses
        $this->loadModel('Course');
        $this->Course->recursive = 0;
        $this->set('allcourses', $this->Course->find('all'));
        
        //Find All Courses by this user
        $this->Course->User->recursive = 2;
        $this->set('coursesbyuser', $this->Course->User->findById($user['id']));
        
        //Find all master courses
        $coursescontroller = new CoursesController;
        $this->set('mastercourses', $coursescontroller->master());
    }
}
