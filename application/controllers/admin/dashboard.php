<?php

class Dashboard extends MY_Controller
{

    public function index()
    {
        // Get Articles
        $data['articles'] = $this->Article_model->get_articles('id', 'DESC', 10);

        // Get Categories
        $data['categories'] = $this->Article_model->get_categories('id', 'DESC', 5);

        // Get Users
        $data['users'] = $this->User_model->get_users('id', 'DESC', 5);

        // View
        $data['main_content'] = 'admin/articles/index';
        $this->load->view('admin/layout/main', $data);
    }

}
