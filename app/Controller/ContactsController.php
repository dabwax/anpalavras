<?php
App::uses('CakeEmail', 'Network/Email');

class ContactsController extends AppController {

    public function add() {
        if ($this->request->is('post')) {
            $this->Contact->create();
            if ($this->Contact->save($this->request->data)) {
            	$Email = new CakeEmail('default');
	$Email->template('fale_conosco')
	    ->emailFormat('html')
	    ->to('luizhrqas@gmail.com')
	    ->from('no-reply@amornaspalavras.com.br')
	    ->subject('[Amor nas Palavras] Fale Conosco - ' . $this->request->data['Contact']['name'])
	    ->viewVars(array('c' => $this->request->data))
	    ->send();

                $this->Session->setFlash(__('A sua mensagem foi enviada com sucesso!'), 'alert', array(
                    'plugin' => 'BoostCake',
                    'class' => 'alert-success'
                ));
                return $this->redirect(array('controller' => 'users', 'action' => 'dashboard'));
            } else {
                $this->Session->setFlash(__('Não foi possível enviar sua mensagem. Tente novamente:'), 'alert', array(
                    'plugin' => 'BoostCake',
                    'class' => 'alert-danger'
                ));
            }
        }
    }
}