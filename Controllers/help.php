<?php

class Help extends classMainController {

    function __construct() {
        parent::__construct();
//        echo 'We are in help<br>';
    }

    function index() {
        $this->view->render('help/index');
    }

    public function other($arg = false) {

        require 'Models/help_model.php';
        $model = new Help_model();
        $this->view->blah == $model->blah();
    }
}