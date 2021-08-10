<?php

class HistoryModel extends CI_Model
{
    public function getHistory()
    {
        $this->db->select('*');
        $this->db->from('history');
        $this->db->join('foodbank', 'foodbank_item_id = item_id');
        $this->db->where('foodbank_user_id', $_SESSION['id']);
        $this->db->order_by('id', 'DESC');
        return $this->db->get()->result_array();
    }

}
