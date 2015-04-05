<?php
class MessageRatingsController extends AppController {
    public function add() {
        if($this->request->is("post")) {
            $this->MessageRating->create();

            $this->MessageRating->save($this->request->data);

            $this->Session->setFlash(__('A sua nota foi inserida com sucesso!'), 'alert', array(
                'plugin' => 'BoostCake',
                'class' => 'alert-success'
            ));

            return $this->redirect( array('controller' => 'users', 'action' => 'dashboard') );
        }
    }
}