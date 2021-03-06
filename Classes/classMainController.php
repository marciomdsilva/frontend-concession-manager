<?php

class classMainController {

    function __construct() {
        $this->view = new classMainView();
    }

    public function loadModel($name) {
        $path = 'Models/'. $name . '_model.php';
        if (file_exists($path)) {
            require $path;
            $modelName = $name . '_model';
            $this->model = new $modelName;
        }
    }
}