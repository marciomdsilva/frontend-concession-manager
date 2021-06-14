<?php


class Customers extends classMainController {
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
        $this->view->pageTitle = 'Clientes';
        $this->view->render('dashboard/customers/index');
    }

    function logout() {
        classMainSession::destroy('accessToken');
        header("Location: ../login");
        exit;
    }

    function searchAll() {
        $response = $this->model->searchAll(classMainSession::get('accessToken'));
        $obj = json_decode($response['response']);
//        $keys = array_keys($obj);
//        echo $keys[0];
//        echo $response['response'];
//        echo $obj;
//        print_r($obj->{'customers'}[0]->{'name'});
//        echo $obj->{'customers'}[0]->{'name'};

//        $teste["data"][] = array($obj->{'customers'}[0]->{'customer_id'}, $obj->{'customers'}[0]->{'name'},
//            $obj->{'customers'}[0]->{'phone'}, $obj->{'customers'}[0]->{'address_line'}, $obj->{'customers'}[0]->{'postal_code'},
//            $obj->{'customers'}[0]->{'state'}, $obj->{'customers'}[0]->{'country'}, 'teste');


        for($i = 0; $i < count($obj->{'customers'}); ++$i) {
            $teste["data"][] = array($obj->{'customers'}[$i]->{'customer_id'}, $obj->{'customers'}[$i]->{'name'},
                $obj->{'customers'}[$i]->{'phone'}, $obj->{'customers'}[$i]->{'address_line'},
                $obj->{'customers'}[$i]->{'city'}, $obj->{'customers'}[$i]->{'postal_code'},
                $obj->{'customers'}[$i]->{'state'}, $obj->{'customers'}[$i]->{'country'});
        }
        echo json_encode($teste);

    }

    function update(){
        $data = json_decode($_POST['data']);
        $customer_id = $data[0]->value;
        $name = $data[1]->value;
        $phone = $data[2]->value;
        $address_line = $data[3]->value;
        $postal_code = $data[4]->value;
        $city = $data[5]->value;
        $state = $data[6]->value;
        $country = $data[7]->value;

        $jsonData = array('customer_id' => $customer_id, 'name' => $name, 'phone' => $phone,
            'address_line' => $address_line, 'city' => $city, 'state' => $state,
            'postal_code' => $postal_code, 'country' => $country);

        $jsonData = json_encode($jsonData);


        $response = $this->model->update(classMainSession::get('accessToken'), $jsonData);

        $statusCode = $response['statusCode'];

        echo $statusCode;

    }

    function add(){
        $data = json_decode($_POST['data']);
        $name = $data[0]->value;
        $phone = $data[1]->value;
        $address_line = $data[2]->value;
        $postal_code = $data[3]->value;
        $city = $data[4]->value;
        $state = $data[5]->value;
        $country = $data[6]->value;

        $jsonData = array('name' => $name, 'phone' => $phone,
            'address_line' => $address_line, 'city' => $city, 'state' => $state,
            'postal_code' => $postal_code, 'country' => $country);

        $jsonData = json_encode($jsonData);

        $response = $this->model->add(classMainSession::get('accessToken'), $jsonData);

        $statusCode = $response['statusCode'];

        echo json_encode($response);
    }

    function delete() {
        $data = json_decode($_POST['data']);
        $customer_id = $data[0]->value;

        $response = $this->model->delete(classMainSession::get('accessToken'), $customer_id);

        echo json_encode($response);
    }

}