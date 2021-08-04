<?php

class RegisterModel extends CI_Model
{
    public function register_new_user($name, $id, $username, $password)
    {
        $data = array(
            'full_name' => $name,
            'card_id' => $id,
            'username' => $username,
            'password' => $password,
            'role' => 1
        );

        return $this->db->insert('userdata', $data);
    }
}
