<?php defined('BASEPATH') OR exit('No direct script access allowed');

class animals_model extends CI_Model {

    public function create($options)
    {
        $this->db->insert('kns1_animals', $options);
        return $this->db->insert_id();
    }

    public function get_all($limit = NULL, $offset = NULL)
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('kns1_animals', $limit, $offset);
        return $query->result();
    }

    public function get_by($animalId)
    {
        $this->db->where('id', $animalId);
        $query = $this->db->get('kns1_animals');
        return $query->row();
    }

    public function get_max_code($category_id)
    {
        $this->db->select('Max(code) as code');
        $this->db->where('category_id', $category_id);
        $query = $this->db->get('kns1_animals', null, null);
        return $query->row();
    }

    public function update($id, $options)
    {
        $this->db->where('id', $id);
        $this->db->update('kns1_animals', $options);
        return $id;
    }

    public function destroy($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('kns1_animals');
        return $this->db->affected_rows();
    }
}