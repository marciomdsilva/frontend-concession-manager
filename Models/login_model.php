<?php

class Login_model extends classMainModel {
    function __construct() {
        parent::__construct();
    }

    public function run($user, $pass) {
        $obj = array("username"=>$user, "password"=>$pass);

        return $this->loginAPI('POST', API_URL . 'login', json_encode($obj));
    }

}