<?php
class PostsController extends AppController {

    public function index() {
        $options = array(
            'conditions' => array(
                'Post.church_id' => AuthComponent::user('church_id')
            ),
            'order' => array(
                'Post.created DESC'
            )
        );
        $posts = $this->Post->find("all", $options);

        $this->set(compact("posts"));
    }

    public function view($id = null) {
        $options = array(
            'conditions' => array(
                'Post.id' => $id
            )
        );

        $post = $this->Post->find("first", $options);
        
        $this->set(compact("post"));
    }
}