<?php

class Customers_model extends classMainModel {
    function __construct() {
        parent::__construct();
//        echo 'login model';
    }

    public function searchAll($accessToken) {
        return $this->getAllCustomers('GET', 'http://192.168.1.8:5000/customers', $accessToken);
    }

    public function update($accessToken, $data) {
        return $this->updateCustomer('PUT', 'http://192.168.1.8:5000/customer', $accessToken, $data);
    }

    public function add($accessToken, $data) {
        return $this->createCustomer('POST', 'http://192.168.1.8:5000/customer', $accessToken, $data);
    }

    public function delete($accessToken, $customer_id) {
        return $this->deleteCustomer('DELETE', 'http://192.168.1.8:5000/customer?delete=' . $customer_id, $accessToken);
    }

}