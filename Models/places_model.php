<?php

class Places_model extends classMainModel {
    function __construct() {
        parent::__construct();
    }

    public function searchAll($accessToken) {
        return $this->getAllPlaces('GET', API_URL . 'places', $accessToken);
    }

    public function add($accessToken, $data) {
        return $this->createPlace('POST', API_URL . 'place', $accessToken, $data);
    }

    public function delete($accessToken, $place_id) {
        return $this->deletePlace('DELETE', API_URL . 'place?delete=' . $place_id, $accessToken);
    }

    public function update($accessToken, $data, $place_id) {
        return $this->updatePlace('PUT', API_URL . 'place?id=' . $place_id, $accessToken, $data);
    }

}