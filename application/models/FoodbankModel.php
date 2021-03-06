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
            'item_status' => 'Not yet taken',
            'datetime' => date('H:ia d/m/Y')
        );

        if ($this->db->insert('history', $data)) {
            return $this->updateFoodbankQuantity($item_id);
        } else {
            return false;
        }
    }

    public function removeFoodbankItem($history_id)
    {
        $this->db->select('*');
        $this->db->from('history');
        $this->db->join('foodbank', 'foodbank_item_id = item_id');
        $this->db->where('id', $history_id);
        $result = $this->db->get()->row_array();

        $data = array(
            'item_quantity' => ($result['item_quantity'] + 1),
            'datetime' => date('H:ia d/m/Y')
        );

        $this->db->where('item_id', $result['item_id']);
        $this->db->update('foodbank', $data);

        $this->db->where('id', $history_id);
        return $this->db->delete('history');
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
