<?php
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
/**
 * User Model
 *
 */
class User extends AppModel {
	public $belongsTo = array("Church");

	public $validate = array(
    'username' => array(
        'rule' => 'isUnique',
        'message' => 'Já existe um usuário com este e-mail.'
    )
);

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

	public function beforeSave($options = array()) {
	    if (strlen($this->data[$this->alias]['password']) > 1) {
	        $passwordHasher = new BlowfishPasswordHasher();
	        $this->data[$this->alias]['password'] = $passwordHasher->hash(
	            $this->data[$this->alias]['password']
	        );
	    } else {
	    	unset($this->data[$this->alias]['password']);
	    }
	    return true;
	}

}
