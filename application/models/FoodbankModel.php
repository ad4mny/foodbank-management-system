<?php

class FoodbankModel extends CI_Model
{
    public function getFoodbank()
    {
        $this->db->select('*');
        $this->db->from('foodbank');
        return $this->db->get()->result_array();
    }

    public function addFoodbankItem($item_id)
    {
        $data = array(
            'foodbank_item_id' => $item_id,
            'foodbank_user_id' => $_SESSION['id'],
            'datetime' => date('H:ia d/m/Y')
        );

        if ($this->db->insert('history', $data)) {
            return $this->updateFoodbankQuantity($item_id);
        } else {
            return false;
        }
    }

    public function updateFoodbankQuantity($item_id)
    {

        $this->db->select('*');
        $this->db->from('foodbank');
        $this->db->where('item_id', $item_id);
        $data = $this->db->get()->row_array();

        $data = array(
            'item_quantity' => ($data['item_quantity'] - 1),
            'datetime' => date('H:ia d/m/Y')
        );
        
        $this->db->where('item_id', $item_id);
        return $this->db->update('foodbank', $data);
    }
}
