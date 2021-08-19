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
        // echo '<pre/>';
        // var_dump($data);
        // exit;
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
}
