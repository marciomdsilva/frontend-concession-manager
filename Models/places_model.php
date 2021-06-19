<?php

class Places_model extends classMainModel {
    function __construct() {
        parent::__construct();
    }

    public function searchAll($accessToken) {
        return $this->getAllPlaces('GET', 'http://192.168.1.8:5000/places', $accessToken);
    }

    public function add($accessToken, $data) {
        return $this->createPlace('POST', 'http://127.0.0.1:5000/place', $accessToken, $data);
    }

    public function delete($accessToken, $place_id) {
        return $this->deletePlace('DELETE', 'http://127.0.0.1:5000/place?delete=' . $place_id, $accessToken);
    }

}