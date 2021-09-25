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

    public function setItemTaken($item_id, $user_id)
    {
        $data = array(
            'foodbank_user_id' => $user_id,
            'foodbank_item_id' => $item_id,
            'item_status' => 'Taken successfully',
            'datetime' => date('H:ia Y/m/d')
        );

        return $this->db->insert('history', $data);
    }
}
