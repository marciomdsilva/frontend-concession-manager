<?php

class SignIn_model extends classMainModel {
    function __construct() {
        parent::__construct();
    }

    public function register($email, $username, $password) {
        $obj = array("username"=>$username, "email"=>$email, "password"=>$password);
        return $this->registerAPI('POST', API_URL . 'register', json_encode($obj));
    }

}