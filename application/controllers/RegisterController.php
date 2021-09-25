<?php

class RegisterController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('RegisterModel');
    }

    public function index()
    {
        $this->load->view('templates/Header');
        $this->load->view('templates/Nav');
        $this->load->view('Register');
        $this->load->view('templates/Footer');
    }

    public function registerUser()
    {
        $name = $this->input->post('name');
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $c_password = $this->input->post('c_password');

        if ($password !== $c_password) {
            $this->session->set_tempdata('error', 'Password not match, please register again.', 1);
            redirect(base_url() . 'register');
        } else {
            if ($this->RegisterModel->register_new_user($name, $id, $username, $password) === true) {
                $this->session->set_tempdata('notice', 'Account has been created successfully, please proceed login.', 1);
                redirect(base_url() . 'login');
            } else {
                $this->session->set_tempdata('error', 'Registration failed, please register again.', 1);
                redirect(base_url() . 'register');
            }
        }
    }

    // API 
    public function registerUserAPI()
    {
        $name = $this->input->post('name');
        $card = $this->input->post('card');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $return = $this->RegisterModel->register_new_user($name, $card, $username, $password);
        
        if ($return === true) {
            echo json_encode($return);
            exit;
        } else {
            echo json_encode(false);
            exit;
        }
    }
}
