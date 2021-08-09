<?php

class BankController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('BankModel');
    }

    public function index()
    {
        $data['foodbank'] = $this->getFoodbank();
        $this->load->view('templates/Header');
        $this->load->view('templates/Nav');
        $this->load->view('Bank', $data);
        $this->load->view('templates/Footer');
    }

    public function getFoodbank() {
        return $this->BankModel->getFoodbank();
    }
}
