<?php

class Articles extends MY_Controller
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

    public function add()
    {
        $this->form_validation->set_rules('title', 'title', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('body', 'body', 'trim|required');
        $this->form_validation->set_rules('is_published', 'Publish', 'required');
        $this->form_validation->set_rules('category', 'Category', 'required');

        $data['categories'] = $this->Article_model->get_categories();

        $data['users'] = $this->User_model->get_users();
        $data['groups'] = $this->User_model->get_groups();

        if ($this->form_validation->run() == false) {
            // View
            $data['main_content'] = 'admin/articles/add';
            $this->load->view('admin/layout/main', $data);
        } else {
            // Create Articles Data Array
            $data = array(
                'title' => $this->input->post('title'),
                'body' => $this->input->post('body'),
                'category_id' => $this->input->post('category'),
                'user_id' => $this->input->post('user'),
                'access' => $this->input->post('access'),
                'is_published' => $this->input->post('is_published'),
                'is_menu' => $this->input->post('is_menu'),
                'ar_order' => $this->input->post('order'),
            );
            // Articles Table Insert
            $this->Article_model->insert($data);

            // Create Message
            $this->session->set_flashdata('article_saved', 'Your article has been saved');

            // Redirect to Pages
            header("location: index");
        }
    }
}