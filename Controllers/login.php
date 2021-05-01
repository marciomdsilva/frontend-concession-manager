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
//        if(isset($_POST['username']) && isset($_POST['password'])) {
//            $data = array(':username' => $_POST['username'], 'password' => $_POST['password']);
//            echo $data[':username'] . " " . $data['password'];
//        }



        $msg = json_encode("{'msg': 'asd'}");
//        $test = json_encode($_POST['formdata'][0]);

        echo $_POST['msg'];
    }
}