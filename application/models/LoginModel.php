<?php

class LoginModel extends CI_Model
{
    public function loginUser($username, $password)
    {
        $this->db->select('*');
        $this->db->from('userdata');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get()->row_array();
    }
}
