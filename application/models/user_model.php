<?php 

class User_model extends CI_Model{
    public function get_users($order_by = null, $sort = 'DESC', $limit = null, $offset = 0) {
        $this->db->select('*');
        $this->db->from('users');
        if($limit != null){
            $this->db->limit($limit, $offset);
        }
        if($order_by != null){
            $this->db->order_by($order_by, $sort);
        }
        $query = $this->db->get();
        return $query->result();
    }
}

?>