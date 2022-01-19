<?php

class Categories extends MY_Controller
{
    /**
     * Categories Main Index
     */

    public function index()
    {
        // Get categories
        $data['categories'] = $this->Article_model->get_categories('id', 'DESC');

        // View
        $data['main_content'] = 'admin/categories/index';
        $this->load->view('admin/layout/main', $data);
    }

    /**
     * ADD Categories
     */

    public function add()
    {

        $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[4]');

        if ($this->form_validation->run() == false) {
            // Views
            $data['main_content'] = 'admin/categories/add';
            $this->load->view('admin/layout/main', $data);
        } else {
            // Create Data Array
            $data = array(
                'name' => $this->input->post('name'),
            );

            // Categories Table Insert
            $this->Article_model->insert_category($data);

            // Create Message
            $this->session->set_flashdata('category_saved', 'Your category has been saved');

            header('location: http://kewlcms.test/index.php/admin/categories');
        }

    }

    /**
     * Edit Category
     * @param - $id
     */

    public function edit($id)
    {
        // Validation Rules
        $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[4]');

        if ($this->form_validation->run() == false) {
            $data['category'] = $this->Article_model->get_category($id);

            // Views
            $data['main_content'] = 'admin/categories/edit';
            $this->load->view('admin/layout/main', $data);

        } else {
            // Create Data Array
            $data = array(
                'name' => $this->input->post('name'),
            );

            // Articles Table Insert
            $this->Article_model->update_category($data, $id);

            // Create Message
            $this->session->set_flashdata('category_saved', 'Your category has been saved');

            header('location: http://kewlcms.test/index.php/admin/categories');

        }

    }

}
