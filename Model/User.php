<?php

App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
App::uses('AppModel', 'Model');

/**
 * User Model
 */
class User extends AppModel {

    /**
     * Display field
     * @var string
     */
    public $displayField = 'username';
    
    
    public function beforeSave($options = array()) {
        if (!$this->id) {
            $passwordHasher = new SimplePasswordHasher();
            $this->data['User']['password'] = $passwordHasher->hash($this->data['User']['password']);
        }
        return true;
    }


}
