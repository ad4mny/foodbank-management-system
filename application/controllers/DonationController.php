<?php

class DonationController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('FoodbankModel');
    }

    public function index()
    {
        $data['donation'] = $this->getFoodbank();

        $this->load->view('templates/Header');
        $this->load->view('templates/Nav');
        $this->load->view('Donation', $data);
        $this->load->view('templates/Footer');
    }

    public function getFoodbank()
    {
        $data = $this->FoodbankModel->getFoodbank();

        $item_id = '[';
        $item_quantity = '[';
        $item_name = '[';

        if (isset($data) && is_array($data)) {
            foreach ($data as $row) {
                $item_id .= $row['item_id'] . ',';
                $item_quantity .= $row['item_quantity'] . ',';
                $item_name .= '\'' . $row['item_name'] . '\',';
            }
        }

        $item_id .= ']';
        $item_quantity .= ']';
        $item_name .= ']';

        $return = array(
            $item_id, $item_quantity, $item_name
        );

        return $return;
    }

    // API 
    public function getFoodbankAPI()
    {
        $data = $this->FoodbankModel->getFoodbank();

        $item_quantity = [];
        $item_name = [];

        if (isset($data) && is_array($data)) {
            foreach ($data as $row) {
                array_push($item_quantity, (int)$row['item_quantity']);
                array_push($item_name, $row['item_name']);
            }
        }

        $return = array(
            $item_quantity, $item_name
        );

        echo json_encode($return);
        exit;
    }
}
