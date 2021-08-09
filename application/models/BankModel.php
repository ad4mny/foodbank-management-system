<?php

class BankModel extends CI_Model
{
    public function getFoodbank()
    {
        $this->db->select('*');
        $this->db->from('foodbank');
        return $this->db->get()->result_array();
    }
}
