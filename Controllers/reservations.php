<?php


class Reservations extends classMainController {
    function __construct() {
        parent::__construct();
        classMainSession::init();

        $logged = classMainSession::get('accessToken');
        if ($logged == false) {
            classMainSession::destroy('accessToken');
            header("Location: login");
            exit;
        }
    }

    function index() {
        $this->view->pageTitle = 'Reservas';
        $this->view->render('dashboard/reservations/index');
    }

    function logout() {
        classMainSession::destroy('accessToken');
        header("Location: ../login");
        exit;
    }

}