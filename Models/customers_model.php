<?php

class Customers_model extends classMainModel {
    function __construct() {
        parent::__construct();
//        echo 'login model';
    }

    public function searchAll($accessToken) {
        return $this->getAllCustomers('GET', API_URL . 'customers', $accessToken);
    }

    public function update($accessToken, $data) {
        return $this->updateCustomer('PUT', API_URL . 'customer', $accessToken, $data);
    }

    public function add($accessToken, $data) {
        return $this->createCustomer('POST', API_URL . 'customer', $accessToken, $data);
    }

    public function delete($accessToken, $customer_id) {
        return $this->deleteCustomer('DELETE', API_URL . 'customer?delete=' . $customer_id, $accessToken);
    }

}