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

    public function setItemTaken($history_id)
    {
        $data = array(
            'item_status' => 'Taken successfully',
            'datetime' => date('H:ia Y/m/d')
        );
        
        $this->db->where('id', $history_id);
        return $this->db->update('history', $data);
    }
}
