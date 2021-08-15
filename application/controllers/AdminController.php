<?php

class AdminController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel');
        $this->load->library('upload');
    }

    public function index($page = 'login', $item_id = null)
    {
        $this->load->view('templates/Header');

        switch ($page) {
            case 'foodbank':
                $data['foodbank'] = $this->getFoodbankList();
                $this->load->view('templates/Nav_Admin');
                $this->load->view('admin/FoodbankView', $data);
                break;
            case 'analytic':
                $data['analytic'] = $this->getAnalyticData();
                $this->load->view('templates/Nav_Admin');
                $this->load->view('admin/AnalyticView', $data);
                break;
            case 'add':
                $this->load->view('templates/Nav_Admin');
                $this->load->view('admin/AddFoodbankView');
                break;
            case 'update':
                $data['item'] = $this->getItemData($item_id);
                $this->load->view('templates/Nav_Admin');
                $this->load->view('admin/UpdateFoodbankView', $data);
                break;
            default:
                $this->load->view('admin/LoginView');
                break;
        }

        $this->load->view('templates/Footer');
    }

    public function getFoodbankList()
    {
        return $this->AdminModel->getFoodbankList();
    }

    public function getAnalyticData()
    {
        return $this->AdminModel->getAnalyticData();
    }

    public function getItemData($item_id)
    {
        return $this->AdminModel->getItemData($item_id);
    }

    public function addItem()
    {
        $item_name = $this->input->post('name');
        $item_quantity = $this->input->post('quantity');
        $item_location = $this->input->post('location');

        $config['upload_path'] = './assets/image';
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['max_size']     = '0';

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('image')) {

            if (!empty($_FILES['image']['name'])) {

                $this->session->set_tempdata('error', $this->upload->display_errors('', ''), 1);
                redirect(base_url() . 'admin/foodbank/add');
            } else {

                if ($this->AdminModel->addItem($item_name, $item_quantity, $item_location, NULL) !== false) {

                    $this->session->set_tempdata('notice', 'Your item has been added succesfully.', 1);
                    redirect(base_url() . 'admin/foodbank');
                } else {

                    $this->session->set_tempdata('error', 'Failed to add your item.', 1);
                    redirect(base_url() . 'admin/foodbank/add');
                }
            }
        } else {

            $item_image = $this->upload->data('file_name');

            if ($this->AdminModel->addItem($item_name, $item_quantity, $item_location, $item_image) !== false) {

                $this->session->set_tempdata('notice', 'Your item has been added succesfully.', 1);
                redirect(base_url() . 'admin/foodbank');
            } else {

                $this->session->set_tempdata('error', 'Failed to add your item.', 1);
                redirect(base_url() . 'admin/foodbank/add');
            }
        }
    }

    public function updateItem()
    {
        $item_id = $this->input->post('id');
        $item_name = $this->input->post('name');
        $item_quantity = $this->input->post('quantity');
        $item_location = $this->input->post('location');

        $config['upload_path'] = './assets/image';
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['max_size']     = '0';

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('image')) {

            if (!empty($_FILES['image']['name'])) {

                $this->session->set_tempdata('error', $this->upload->display_errors('', ''), 1);
                redirect(base_url() . 'admin/foodbank/update/' . $item_id);
            } else {

                if ($this->AdminModel->updateItem($item_id, $item_name, $item_quantity, $item_location, NULL) !== false) {

                    $this->session->set_tempdata('notice', 'Your item has been updated succesfully.', 1);
                    redirect(base_url() . 'admin/foodbank');
                } else {

                    $this->session->set_tempdata('error', 'Failed to update your item.', 1);
                    redirect(base_url() . 'admin/foodbank/update/' . $item_id);
                }
            }
        } else {

            $item_image = $this->upload->data('file_name');

            if ($this->AdminModel->updateItem($item_id, $item_name, $item_quantity, $item_location, $item_image) !== false) {

                $this->session->set_tempdata('notice', 'Your item has been updated succesfully.', 1);
                redirect(base_url() . 'admin/foodbank');
            } else {

                $this->session->set_tempdata('error', 'Failed to update your item.', 1);
                redirect(base_url() . 'admin/foodbank/update/' . $item_id);
            }
        }
    }

    public function deleteItem($item_id)
    {
        if ($this->AdminModel->deleteItem($item_id) !== false) {
            $this->session->set_tempdata('notice', 'Your item has been deleted succesfully.', 1);
        } else {
            $this->session->set_tempdata('error', 'Failed to delete your item.', 1);
        }
        redirect(base_url() . 'admin/foodbank');
    }
}
