<?php

class User_model extends CI_Model
{
    public function get_users($order_by = null, $sort = 'DESC', $limit = null, $offset = 0)
    {
        $this->db->select('*');
        $this->db->from('users');
        if ($limit != null) {
            $this->db->limit($limit, $offset);
        }
        if ($order_by != null) {
            $this->db->order_by($order_by, $sort);
        }
        $query = $this->db->get();
        return $query->result();
    }

    public function get_user($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('users');
        return $query->row();
    }

    public function get_groups()
    {
        $this->db->select('*');
        $this->db->from('groups');
        $query = $this->db->get();
        return $query->result();
    }

    public function insert($data)
    {
        $this->db->insert('users', $data);
        return true;
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('users', $data);
        return true;
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('users');
        return;

    }
}
