<?php

class AdminModel extends CI_Model
{


    public function getFoodbankList()
    {
        $this->db->select('*');
        $this->db->from('foodbank');
        $this->db->order_by('item_id', 'DESC');
        return $this->db->get()->result_array();
    }

    public function getAnalyticData()
    {
        return 0;
    }

    public function getItemData($item_id)
    {
        $this->db->select('*');
        $this->db->from('foodbank');
        $this->db->where('item_id', $item_id);
        return $this->db->get()->result_array();
    }

    public function addItem($item_name, $item_quantity, $item_location, $item_image)
    {
        if ($item_image !== NULL) {
            $data = array(
                'item_name' => $item_name,
                'item_quantity' => $item_quantity,
                'item_location' => $item_location,
                'item_image' => $item_image,
                'datetime' => date('H:ia d/m/Y')
            );
        } else {
            $data = array(
                'item_name' => $item_name,
                'item_quantity' => $item_quantity,
                'item_location' => $item_location,
                'datetime' => date('H:ia d/m/Y')
            );
        }

        return $this->db->insert('foodbank', $data);
    }

    public function updateItem($item_id, $item_name, $item_quantity, $item_location, $item_image)
    {
        if ($item_image !== NULL) {
            $data = array(
                'item_name' => $item_name,
                'item_quantity' => $item_quantity,
                'item_location' => $item_location,
                'item_image' => $item_image,
                'datetime' => date('H:ia d/m/Y')
            );
        } else {
            $data = array(
                'item_name' => $item_name,
                'item_quantity' => $item_quantity,
                'item_location' => $item_location,
                'datetime' => date('H:ia d/m/Y')
            );
        }

        $this->db->where('item_id', $item_id);
        return $this->db->update('foodbank', $data);
    }

    public function deleteItem($item_id)
    {
        $this->db->where('item_id', $item_id);
        return $this->db->delete('foodbank');
    }
}
