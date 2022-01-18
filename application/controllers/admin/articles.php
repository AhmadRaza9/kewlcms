<?php

class Articles extends MY_Controller
{
    public function index()
    {
        // Get Articles
        $data['articles'] = $this->Article_model->get_articles('id', 'DESC', 10);

        // Get Categories
        $data['users'] = $this->User_model->get_users('id', 'DESC', 5);

        // View
        $data['main_content'] = 'admin/articles/index';
        $this->load->view('admin/layout/main', $data);
    }
}
