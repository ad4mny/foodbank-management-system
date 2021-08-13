<?php

class FoodbankController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('FoodbankModel');
    }

    public function index()
    {
        $data['foodbank'] = $this->getFoodbank();
        $this->load->view('templates/Header');
        $this->load->view('templates/Nav');
        $this->load->view('Foodbank', $data);
        $this->load->view('templates/Footer');
    }

    public function getFoodbank() {
        return $this->FoodbankModel->getFoodbank();
    }

    public function addFoodbankItem($item_id) {
       if (!isset($_SESSION['id'])) {
        $this->session->set_tempdata('error', 'Please login first or continue as a guest.', 1);
        redirect(base_url() . 'login');
       } else {
        if ($this->FoodbankModel->addFoodbankItem($item_id) !== false) {
            $this->session->set_tempdata('notice', 'Item has been added successfully, please fetch at the stated foodbank location.', 1);
            redirect(base_url() . 'history');
        } else {
            $this->session->set_tempdata('error', 'Error while adding the item to your list, please try again.', 1);
            redirect(base_url() . 'foodbank');
        }
       }
    }
}
