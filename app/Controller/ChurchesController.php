<?php
App::uses('AppController', 'Controller');
/**
 * Churches Controller
 *
 * @property Church $Church
 * @property PaginatorComponent $Paginator
 */
class ChurchesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function admin_index() {
		$this->set('churches', $this->Church->find("all"));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Church->create();
			if ($this->Church->save($this->request->data)) {
				$this->Session->setFlash(__('The church has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The church could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Church->exists($id)) {
			throw new NotFoundException(__('Invalid church'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Church->save($this->request->data)) {
				$this->Session->setFlash(__('The church has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The church could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Church.' . $this->Church->primaryKey => $id));
			$this->request->data = $this->Church->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Church->id = $id;
		if (!$this->Church->exists()) {
			throw new NotFoundException(__('Invalid church'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Church->delete()) {
			$this->Session->setFlash(__('The church has been deleted.'));
		} else {
			$this->Session->setFlash(__('The church could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
