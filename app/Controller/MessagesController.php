<?php
class MessagesController extends AppController {

    public function history() {
        $options = array(
            'conditions' => array(
                'Message.church_id' => AuthComponent::user('church_id')
            ),
            'order' => array(
                'Message.created DESC'
            )
        );
        $messages = $this->Message->find("all", $options);

        $this->set(compact("messages"));
    }
}