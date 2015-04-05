<?php
class MessagesController extends AppController {

    public function history() {
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
                        'MessageRating.user_id' => AuthComponent::user('id')
                    )
                )
            )
        );
        $messages = $this->Message->find("all", $options);

        $this->set(compact("messages"));
    }
}