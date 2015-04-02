<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class User extends AppModel {
	public $belongsTo = array("Church");

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

}
