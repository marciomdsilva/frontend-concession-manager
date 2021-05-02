<?php

class Login_model extends classMainModel {
    function __construct() {
        parent::__construct();
//        echo 'login model';
    }

    public function run($user, $pass) {
        $obj = array("username"=>$user, "password"=>$pass);

        $response = $this->loginAPI('POST', 'http://192.168.1.8:5000/login', json_encode($obj));

        echo $response;
    }

}