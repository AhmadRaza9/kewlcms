<?php 


class Articles extends MY_Controller{
    public function indeX(){
        // Get Articles
        $data['articles'] = $this->Article_model->get_articles('id', 'DESC', '10');

        // Load view
        $this->load->view('home', $data);

    }
}

?>