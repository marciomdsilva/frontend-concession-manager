<?php

class SignIn extends classMainController {

    function __construct() {
        parent::__construct();
//        echo 'we are in index';
//        classMainSession::init();
    }

    function index() {
        $this->view->pageTitle = 'Registar';
        $this->view->render('signIn/index', 1);
    }

    function register() {
        if(isset($_POST['data'])) {
            $data = json_decode($_POST['data']);
            $email = $data[0]->value;
            $username = $data[1]->value;
            $password = $data[2]->value;
            // Envia os dados de registo ao model para fazer o request a API
            $response = $this->model->register(@$email, $username, $password);

            echo json_encode($response);
//            $statusCode = $response['statusCode'];
//            $message = json_decode($response['response']);
//
//            if ($statusCode == 201) {
//                echo $message->{'message'};
//
//            }

//            echo $statusCode . " " . $response;
        }
    }
}