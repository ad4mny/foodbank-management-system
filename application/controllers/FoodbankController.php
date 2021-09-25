<?php
header("Access-Control-Allow-Origin: *");

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

    public function getFoodbank()
    {
        return $this->FoodbankModel->getFoodbank();
    }

    public function addFoodbankItem($item_id)
    {
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

    // API 
    public function getFoodbankAPI()
    {
        echo json_encode($this->FoodbankModel->getFoodbank());
        exit;
    }

    public function addFoodbankItemAPI()
    {
        $item_id = $this->input->post('item_id');
        $_SESSION['id'] = $this->input->post('user_id');

        if (!isset($_SESSION['id'])) {
            echo json_encode('Please login first to use the foodbank system');
            exit;
        } else {
            if ($this->FoodbankModel->addFoodbankItem($item_id) !== false) {
                echo json_encode(true);
            } else {
                echo json_encode(false);
                exit;
            }
        }
    }

    public function removeFoodbankItemAPI()
    {
        $history_id = $this->input->post('history_id');

        if ($this->FoodbankModel->removeFoodbankItem($history_id) !== false) {
            echo json_encode(true);
        } else {
            echo json_encode(false);
            exit;
        }
    }


}
