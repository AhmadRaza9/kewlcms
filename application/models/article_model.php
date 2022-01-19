<?php

/**
 * @param - $order_by (string)
 * @param - $sort (string)
 * @param - $limit(int)
 * @param - $offset(int)
 */

class Article_model extends CI_Model
{
// Get articles
    public function get_articles($order_by = null, $sort = 'DESC', $limit = null, $offset = 0)
    {
        $this->db->select('a.*, b.name as category_name, c.first_name, c.last_name');
        $this->db->from('articles as a');
        $this->db->join('categories AS b', 'b.id = a.category_id', 'left');
        $this->db->join('users AS c', 'c.id = a.user_id', 'left');
        if ($limit != null) {
            $this->db->limit($limit, $offset);
        }
        $query = $this->db->get();
        return $query->result();
    }
    // Get Menu Itemsc
    public function get_menu_items()
    {
        $this->db->where('is_menu', 1);
        $this->db->order_by('ar_order');
        $query = $this->db->get('articles');
        return $query->result();
    }
    // Get singel article
    public function get_article($id = 1)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('articles');
        return $query->row();
    }

    public function get_categories($order_by = null, $sort = 'DESC', $limit = null, $offset = 0)
    {
        $this->db->select('*');
        $this->db->from('categories');
        if ($limit != null) {
            $this->db->limit($limit, $offset);
        }
        if ($order_by != null) {
            $this->db->order_by($order_by, $sort);
        }
        $query = $this->db->get();
        return $query->result();
    }

    public function insert($data)
    {
        $this->db->insert('articles', $data);
        return true;
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('articles', $data);
        return true;
    }

    public function publish($id)
    {
        $data = array(
            'is_published' => 1,
        );

        $this->db->where('id', $id);
        $this->db->update('articles', $data);
    }

    public function unpublish($id)
    {
        $data = array(
            'is_published' => 0,
        );

        $this->db->where('id', $id);
        $this->db->update('articles', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('articles');
        return true;
    }

    /**
     * Insert Category
     * @param - (array) $data
     */

    public function insert_category($data)
    {
        $this->db->insert('categories', $data);
        return true;
    }

}
