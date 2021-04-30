<?php

class classMainView {

    function __construct() {
//        echo 'this is the view';
    }

    public function render($name, $noInclude = false) {
        if ($noInclude == True) {
            require 'Views/' . $name . '.php';
        } else {
            require 'Views/_includes/header.php';
            require 'Views/' . $name . '.php';
            require 'Views/_includes/footer.php';
        }
    }
}