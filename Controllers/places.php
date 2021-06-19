<?php


class Places extends classMainController {
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
        $this->view->pageTitle = 'Lugares';
        $this->view->render('dashboard/places/index');
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

        for($i = 0; $i < count($obj->{'places'}); ++$i) {
            $teste["data"][] = array($obj->{'places'}[$i]->{'place_id'}, $obj->{'places'}[$i]->{'place_axis_x'},
                $obj->{'places'}[$i]->{'place_axis_y'});
        }
        echo json_encode($teste);

    }

    function update(){
//        Falta fazer o request na API




//        $data = json_decode($_POST['data']);
//        $place_id = $data[0]->value;
//        $place_axis_x = $data[1]->value;
//        $place_axis_y = $data[2]->value;
//
//        $jsonData = array('place_id' => $place_id, 'place_axis_x' => $place_axis_x, 'place_axis_y' => $place_axis_y);
//
//        $jsonData = json_encode($jsonData);
//
//
//        $response = $this->model->update(classMainSession::get('accessToken'), $jsonData);
//
//        $statusCode = $response['statusCode'];
//
//        echo $statusCode;

    }

    function add(){
        $data = json_decode($_POST['data']);
        $place_axis_x = $data[0]->value;
        $place_axis_y = $data[1]->value;

        $jsonData = array('place_axis_x' => $place_axis_x, 'place_axis_y' => $place_axis_y);

        $jsonData = json_encode($jsonData);

        $response = $this->model->add(classMainSession::get('accessToken'), $jsonData);

        $statusCode = $response['statusCode'];

        echo json_encode($response);
    }

    function delete() {
        $data = json_decode($_POST['data']);
        $place_id = $data[0]->value;

        $response = $this->model->delete(classMainSession::get('accessToken'), $place_id);

        echo json_encode($response);
    }

}