<?php

class ErrorFile extends classMainController {

    function __construct() {
        parent::__construct();
//        echo 'This is an error';
    }

    function index() {
        $this->view->pageTitle = 'Error';
        $this->view->msg = 'Neste dia de imensurável tristeza, as nossas mais sinceras condolências. <br> <br> Encontre força e fé na memória desta pagina ente querida que partiu. Ou nunca Existiu!!';
        $this->view->render('error/index', 1);
    }
}