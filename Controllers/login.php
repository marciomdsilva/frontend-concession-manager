<?php

class Login extends classMainController {

    function __construct() {
        parent::__construct();
//        echo 'we are in index';
        classMainSession::init();
    }

    function index() {
        $this->view->pageTitle = 'Login';
        $this->view->render('login/index', 1);
    }

    function run() {
        if(isset($_POST['data'])) {
            $data = json_decode($_POST['data']);
            $username = $data[0]->value;
            $password = $data[1]->value;
            // Envia os dados do utilizador ao model para fazer o request a API
            $response = $this->model->run($username, $password);

            /* Verifica se o status code é 200 e depois se existe o
            access token e adiciona o token a uma variavel de sessão */
            $statusCode = $response['statusCode'];
            $obj = json_decode($response['response']);
            if ($statusCode == 200) {
                $accessToken = $obj->{'access_token'};
                $refreshToken = $obj->{'refresh_token'};
                if (isset($accessToken)) {
                    classMainSession::set('accessToken', $accessToken);
                    classMainSession::set('refreshToken', $refreshToken);
                }
            } else {
                if (isset($obj->{'message'})) {
                    echo $obj->{'message'};
                }
            }
        }
    }
}