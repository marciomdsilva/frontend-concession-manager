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
        if(isset($_POST['data'])) {
            $data = json_decode($_POST['data']);
            $username = $data[0]->value;
            $password = $data[1]->value;
//            echo $username . " " . $password;
            $this->model->run($username, $password);
        }
    }
}