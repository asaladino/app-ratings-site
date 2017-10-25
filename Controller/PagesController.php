<?php

App::uses('AppController', 'Controller');

class PagesController extends AppController {

    public $uses = array('Application');
    public $components = array('Paginator');
    public $helpers = array('Text', 'Number');
    public $paginate = array(
        'limit' => 10
    );

    public function home() {
        if (empty($this->request->query)) {
            $this->request->query = $this->Session->read('search');
        }
        $this->Session->write('search', $this->request->query);
        $this->Paginator->settings = $this->paginate;
        $this->set('applications', $this->Paginator->paginate('Application', $this->search()));
    }

    public function view($id = null) {
        if (!$this->Application->exists($id)) {
            throw new NotFoundException(__('Invalid application'));
        }
        $this->request->query = $this->Session->read('search');
        $this->request->data['Application'] = $this->request->query;
        $options = array('conditions' => array('Application.' . $this->Application->primaryKey => $id));
        $this->set('application', $this->Application->find('first', $options));
    }
    
    public function clear() {
        $this->Session->delete('search');
        $this->redirect($this->referer());
    }

    private function search() {
        if (!empty($this->request->query)) {
            $this->request->data['Application'] = $this->request->query;
            $search = array('Application.description LIKE' => '%' . $this->request->data['Application']['search'] . '%');
            foreach ($this->request->query as $field => $value) {
                if (!empty($value) && $field != 'search') {
                    $search['Application.' . $field . ' >='] = $value;
                }
            }
            return array('OR' => $search);
        }
        return array();
    }
    

}
