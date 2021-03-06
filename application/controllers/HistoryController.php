<?php
header("Access-Control-Allow-Origin: *");

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

    public function getHistory()
    {
        return $this->HistoryModel->getHistory();
    }

    // API 
    public function getHistoryAPI()
    {
        $_SESSION['id'] = $this->input->post('user_id');
        echo json_encode($this->HistoryModel->getHistory());
        exit;
    }

    public function setItemTakenAPI()
    {
        $history_id = $this->input->post('history_id');
        echo json_encode($this->HistoryModel->setItemTaken($history_id));
        exit;
    }
}
