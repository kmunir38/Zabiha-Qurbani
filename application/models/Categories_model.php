<?php defined('BASEPATH') OR exit('No direct script access allowed');

class categories_model extends CI_Model {

    public function create($options)
    {
        $this->db->insert('kns1_categories', $options);
        return $this->db->insert_id();
    }

    public function get_all($limit = NULL, $offset = NULL)
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('kns1_categories', $limit, $offset);
        return $query->result();
    }

    public function get_by($categoryId)
    {
        $this->db->where('id', $categoryId);
        $query = $this->db->get('kns1_categories');
        return $query->row();
    }

    public function update($id, $options)
    {
        $this->db->where('id', $id);
        $this->db->update('kns1_categories', $options);
        return $id;
    }

    public function destroy($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('kns1_categories');
        return $this->db->affected_rows();
    }
}