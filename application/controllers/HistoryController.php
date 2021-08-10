<?php

class HistoryController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('HistoryModel');
    }

    public function index()
    {
        $data['history'] = $this->getHistory();
        $this->load->view('templates/Header');
        $this->load->view('templates/Nav');
        $this->load->view('History', $data);
        $this->load->view('templates/Footer');
    }

    public function getHistory() {
        return $this->HistoryModel->getHistory();
    }

}
