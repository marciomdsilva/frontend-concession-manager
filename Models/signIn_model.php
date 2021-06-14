<?php

class SignIn_model extends classMainModel {
    function __construct() {
        parent::__construct();
    }

    public function register($email, $username, $password) {
        $obj = array("username"=>$username, "email"=>$email, "password"=>$password);
        return $this->registerAPI('POST', 'http://192.168.1.8:5000/register', json_encode($obj));
    }

}