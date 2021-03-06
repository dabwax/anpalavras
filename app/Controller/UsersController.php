<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add', 'login', 'logout');
    }

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
    public function admin_index() {
        $this->set('users', $this->User->find("all"));
    }

/**
 * Página de acesso do site.
 */
    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl());
            }
                $this->Session->setFlash(__('Usuário e/ou senha inválidos. Tente novamente.'), 'alert', array(
                    'plugin' => 'BoostCake',
                    'class' => 'alert-danger'
                ));
        }

        if(AuthComponent::user()) {
            return $this->redirect( array('action' => 'dashboard') );
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

    public function admin_dashboard() {
        
    }

/**
 * Página inicial do usuário.
 */
    public function dashboard() {
        $this->loadModel("Message");
        
        $options = array(
            'conditions' => array(
                'Message.church_id' => AuthComponent::user('church_id')
            ),
            'order' => array(
                'Message.created DESC'
            ),
            'contain' => array(
                'MessageRating' => array(
                    'conditions' => array(
                        'MessageRating.user_id' => AuthComponent::user("id")
                    )
                )
            )
        );
        $mensagem_do_dia = $this->Message->find("first", $options);

        $this->set(compact("mensagem_do_dia"));

        if(AuthComponent::user('role') == 'admin') {
            return $this->redirect( array('action' => 'dashboard', 'admin' => true) );
        }
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

                $Email = new CakeEmail('default');
    $Email->template('seja_bem_vindo')
        ->emailFormat('html')
        ->to($this->request->data['User']['username'])
        ->from('no-reply@amornaspalavras.com.br')
        ->subject('[Amor nas Palavras] Seja Bem Vindo, ' . $this->request->data['User']['name'])
        ->viewVars(array('c' => $this->request->data))
        ->send();

                $this->Session->setFlash(__('Olá, ' . $this->request->data['User']['name'] . '! Seja bem-vindo ao Amor nas Palavras!'), 'alert', array(
                    'plugin' => 'BoostCake',
                    'class' => 'alert-success'
                ));

                $id = $this->User->getInsertID();
                $user = $this->User->findById($id);
                $user = $user['User'];
                $this->Auth->login($user);

                return $this->redirect(array('action' => 'dashboard'));
            } else {
                $this->Session->setFlash(__('Não foi possível cadastrar você. Confira os dados preenchidos abaixo:'), 'alert', array(
                    'plugin' => 'BoostCake',
                    'class' => 'alert-danger'
                ));
            }
        }

        $churches = $this->User->Church->find("list");

        $this->set(compact("churches"));
    }

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function edit() {
        $id = AuthComponent::user('id');
        
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('Seus dados foram alterados com sucesso!'), 'alert', array(
                    'plugin' => 'BoostCake',
                    'class' => 'alert-success'
                ));
                return $this->redirect(array('action' => 'dashboard'));
            } else {
                $this->Session->setFlash(__('Não foi possível alterar seus dados. Tente novamente:'), 'alert', array(
                    'plugin' => 'BoostCake',
                    'class' => 'alert-danger'
                ));
            }
        } else {
            $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
            $this->request->data = $this->User->find('first', $options);
        }
        $churches = $this->User->Church->find("list");

        $this->set(compact("churches"));
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
        $this->request->allowMethod('post', 'delete');
        if ($this->User->delete()) {
            $this->Session->setFlash(__('The user has been deleted.'));
        } else {
            $this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
