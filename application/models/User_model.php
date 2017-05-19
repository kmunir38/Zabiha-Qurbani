<?php defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {

    public function validate_credentials($where)
    {
        $this->db->where($where);
        $query = $this->db->get('kns1_users');

        if ($query->num_rows() > 0)
            return $query->row();

        return FALSE;
    }

    public function create($options)
    {
        $this->db->insert('share619_affiliate', $options);
        return $this->db->insert_id();
    }

    public function get_by($affiliateId)
    {
        $this->db->where('id', $affiliateId);
        $query = $this->db->get('share619_affiliate');
        return $query->row();
    }

    public function destroy($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('share619_affiliate');
        return $this->db->affected_rows();
    }

    public function checkEmail($email, $id = null)
    {
        $this->db->where('email', $email);
        if($id) {
            $this->db->where('id !=', $id);
        }

        $query = $this->db->get('share619_affiliate');
        if ($query->num_rows() > 0)
            return TRUE;

        return FALSE;
    }

    public function update($affiliateId, $options)
    {
        $this->db->where('id', $affiliateId);
        $this->db->update('share619_affiliate', $options);
        return $this->db->affected_rows();
    }

    public function get_all($limit = NULL, $offset = NULL)
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('share619_affiliate', $limit, $offset);
        return $query->result();
    }
}