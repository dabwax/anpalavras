<?php
class MessagesController extends AppController {

    public function admin_index() {
        $this->set('messages', $this->Message->find("all"));
    }

/**
 * add method
 *
 * @return void
 */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->Message->create();
            if ($this->Message->save($this->request->data)) {
                $this->Session->setFlash(__('The Message has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The Message could not be saved. Please, try again.'));
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
        if (!$this->Message->exists($id)) {
            throw new NotFoundException(__('Invalid Message'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Message->save($this->request->data)) {
                $this->Session->setFlash(__('The Message has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The Message could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Message.' . $this->Message->primaryKey => $id));
            $this->request->data = $this->Message->find('first', $options);
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
        $this->Message->id = $id;
        if (!$this->Message->exists()) {
            throw new NotFoundException(__('Invalid Message'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Message->delete()) {
            $this->Session->setFlash(__('The Message has been deleted.'));
        } else {
            $this->Session->setFlash(__('The Message could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

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