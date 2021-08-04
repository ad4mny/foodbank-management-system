<?php

class BankController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('templates/Header');
        $this->load->view('templates/Nav');
        $this->load->view('Bank');
        $this->load->view('templates/Footer');
    }
}
