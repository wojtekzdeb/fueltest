<?php

class Controller_Example extends Controller_Template {

    /**
     * WOJTEK: Lack of description
     * 
     * @var type 
     */
    public $template = 'template.tpl';

    /**
     * Your before method
     */
    public function before() {
        parent::before(); // Without this line, templating won't work!
        // do stuff
    }

    /**
     * Make after() compatible with Controller_Template by adding $response as a parameter
     */
    public function after($response) {
        $response = parent::after($response); // not needed if you create your own response object
        // do stuff

        return $response; // make sure after() returns the response object
    }

    public function action_index() {
        $data = array();
        $this->template->title = 'Example Page';
        $this->template->content = View::forge('example/index.tpl', $data);
    }

}
