<?php


class Reservations extends classMainController {
    function __construct() {
        parent::__construct();
        classMainSession::init();

        $logged = classMainSession::get('accessToken');
        if ($logged == false) {
            classMainSession::destroy('accessToken');
            header("Location: login");
            exit;
        }
    }

    function index() {
        $this->view->pageTitle = 'Reservas';
        $this->view->render('dashboard/reservations/index');
    }

    function logout() {
        classMainSession::destroy('accessToken');
        header("Location: ../login");
        exit;
    }

    function searchAll() {
        $response = $this->model->searchAll(classMainSession::get('accessToken'));
        $obj = json_decode($response['response']);
        $statusCode = json_decode($response['statusCode']);
//       Faz logout assim que a api enviar um codigo 401
        if ($statusCode == 401) {
            $this->logout();
        }
        for($i = 0; $i < count($obj->{'reservations'}); ++$i) {
            $teste["data"][] = array($obj->{'reservations'}[$i]->{'reservation_id'},
                $obj->{'reservations'}[$i]->{'place_id'}, $obj->{'reservations'}[$i]->{'customer_id'},
                $obj->{'reservations'}[$i]->{'reservation_start'}, $obj->{'reservations'}[$i]->{'reservation_end'});
        }
        echo json_encode($teste);

    }

    function update(){
        $data = json_decode($_POST['data']);
        $reservation_id = $data[0]->value;
        $place_id = $data[1]->value;
        $customer_id = $data[2]->value;
        $reservation_start = $data[3]->value;
        $reservation_end = $data[4]->value;

        $jsonData = array('reservation_start' => $reservation_start, 'reservation_end' => $reservation_end);

        $jsonData = json_encode($jsonData);


        $response = $this->model->update(classMainSession::get('accessToken'), $jsonData, $reservation_id);

        $statusCode = $response['statusCode'];

        echo $statusCode;

    }

    function add(){
        $data = json_decode($_POST['data']);
        $place_id = $data[0]->value;
        $customer_id = $data[1]->value;
        $reservation_start = $data[2]->value;
        $reservation_end = $data[3]->value;

        $jsonData = array('place_id' => $place_id, 'customer_id' => $customer_id, 'reservation_start' => $reservation_start, 'reservation_end' => $reservation_end);

        $jsonData = json_encode($jsonData);

        $response = $this->model->add(classMainSession::get('accessToken'), $jsonData);

        $statusCode = $response['statusCode'];

        echo json_encode($response);
    }

    function delete() {
        $data = json_decode($_POST['data']);
        $reservation_id = $data[0]->value;

        $response = $this->model->delete(classMainSession::get('accessToken'), $reservation_id);

        echo json_encode($response);
    }

}