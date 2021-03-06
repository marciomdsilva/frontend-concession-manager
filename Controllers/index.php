<?php

class Index extends classMainController {

    function __construct() {
        parent::__construct();
        classMainSession::init();

        $logged = classMainSession::get('accessToken');
        if ($logged == false) {
            classMainSession::destroy();
            header("Location: login");
            exit;
        }
    }

    function index() {
        $this->view->pageTitle = 'Dashboard';
        $this->view->render('dashboard/index/index');
    }

    function logout() {
        classMainSession::destroy();
        header("Location: ../login");
        exit;
    }
}