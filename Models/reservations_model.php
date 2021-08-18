<?php

class Reservations_model extends classMainModel {
    function __construct() {
        parent::__construct();
    }

    public function searchAll($accessToken) {
        return $this->getAllPlaces('GET', API_URL . 'reservations', $accessToken);
    }

    public function add($accessToken, $data) {
        return $this->createReservation('POST', API_URL . 'reservation', $accessToken, $data);
    }

    public function delete($accessToken, $reservation_id) {
        return $this->deleteReservation('DELETE',  API_URL .'reservation?delete=' . $reservation_id, $accessToken);
    }

    public function update($accessToken, $data, $reservation_id) {
        return $this->updateReservation('PUT', API_URL . 'reservation?id=' . $reservation_id, $accessToken, $data);
    }

}