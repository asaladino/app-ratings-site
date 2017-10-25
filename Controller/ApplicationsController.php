<?php

App::uses('AppController', 'Controller');

/**
 * Applications Controller
 *
 * @property Application $Application
 * @property PaginatorComponent $Paginator
 * @property AuthComponent $Auth
 */
class ApplicationsController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Auth');
    private $fileFolder;

    public function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'auth';
        $this->fileFolder = APP . WEBROOT_DIR . DS . 'img' . DS . 'icons' . DS;
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login', 'admin' => false);
        $this->Auth->logoutRedirect = $this->Auth->loginAction;
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->Application->recursive = 0;
        $this->set('applications', $this->Paginator->paginate());
    }

    /**
     * admin_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        if (!$this->Application->exists($id)) {
            throw new NotFoundException(__('Invalid application'));
        }
        $options = array('conditions' => array('Application.' . $this->Application->primaryKey => $id));
        $this->set('application', $this->Application->find('first', $options));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->Application->create();
            if ($this->Application->save($this->request->data)) {
                $this->Session->setFlash(__('The application has been saved.'));
                $this->saveFile();
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The application could not be saved. Please, try again.'));
            }
        }
    }

    /**
     * admin_edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null) {
        if (!$this->Application->exists($id)) {
            throw new NotFoundException(__('Invalid application'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Application->save($this->request->data)) {
                $this->Session->setFlash(__('The application has been saved.'));
                $this->saveFile();
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The application could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Application.' . $this->Application->primaryKey => $id));
            $this->request->data = $this->Application->find('first', $options);
        }
    }

    /**
     * admin_delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_delete($id = null) {
        $this->Application->id = $id;
        if (!$this->Application->exists()) {
            throw new NotFoundException(__('Invalid application'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Application->delete()) {
            $this->Session->setFlash(__('The application has been deleted.'));
        } else {
            $this->Session->setFlash(__('The application could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    private function saveFile() {
        if ($this->request->data['Application']['icon']['error'] == 0) {
            $file = new File($this->request->data['Application']['icon']['tmp_name']);
            $file->copy($this->fileFolder . $this->Application->id, true);
        }
    }

}