<?php

class Login extends classMainController {

    function __construct() {
        parent::__construct();
//        echo 'we are in index';
    }

    function index() {
        $this->view->render('login/index', 1);
    }

    function run() {
        $this->model->run();
    }
}