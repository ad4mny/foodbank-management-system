<?php

class LoginController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('LoginModel');
    }

    public function index()
    {
        $this->load->view('templates/Header');
        $this->load->view('templates/Nav');
        $this->load->view('Login');
        $this->load->view('templates/Footer');
    }

    public function loginUser()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $return = $this->LoginModel->loginUser($username, $password);

        if (isset($return) && $return !== false) {

            $this->session->set_userdata('id', $return['user_id']);
            $this->session->set_userdata('name', $return['full_name']);
            $this->session->set_userdata('role', $return['role']);

            switch ($this->session->userdata('role')) {
                case 1:
                    redirect(base_url() . 'admin/foodbank');
                    break;
                default:
                    redirect(base_url());
                    break;
            }
        } else {
            $this->session->set_tempdata('error', 'Wrong username or password entered.', 1);
            redirect(base_url());
        }
    }

    public function logout()
    {
        $session_data = array(
            'id',
            'name',
            'role'
        );

        $this->session->set_tempdata('notice', 'You have logout successfully.', 1);
        $this->session->unset_userdata($session_data);

        redirect(base_url());
    }
}
