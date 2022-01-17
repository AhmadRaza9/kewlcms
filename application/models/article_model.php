<?php 

/**
 * @param - $order_by (string)
 * @param - $sort (string)
 * @param - $limit(int)
 * @param - $offset(int)
 */

class Article_model extends CI_Model{
    public function get_articles($order_by = null, $sort='DESC', $limit = null, $offset = 0) {
        $this->db->select('a.*, b.name as category_name, c.first_name, c.last_name');
        $this->db->from('articles as a');
        $this->db->join('categories AS b', 'b.id = a.category_id', 'left');
        $this->db->join('users AS c', 'c.id = a.user_id', 'left');
        if($limit != null){
            $this->db->limit($limit, $offset);
        }
        $query = $this->db->get();
        return $query->result();
    }
}

// $articles_model = new Article_model();
// $articles = $articles_model->get_articles();

// foreach($articles as $article){
//     echo "<p>$article->title</p>";
//     echo "<p>$article->body</p>";
//     echo "<p>$article->category_name</p>";
//     echo "<p>$article->first_name $article->last_name</p>";
   
// }


?>