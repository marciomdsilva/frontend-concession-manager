<?php

class Index extends classMainController {

    function __construct() {
        parent::__construct();
//        echo 'we are in index';
    }

    function index() {
        $this->view->render('index/index');
    }
}