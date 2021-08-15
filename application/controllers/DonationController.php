<?php

class DonationController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('DonationModel');
    }

    public function index()
    {
        $this->load->view('templates/Header');
        $this->load->view('templates/Nav');
        $this->load->view('Donation');
        $this->load->view('templates/Footer');
    }
}
