<?php

class Categories extends MY_Controller
{
    /**
     * Article Main Index
     */

    public function index()
    {
        // Get categories
        $data['categories'] = $this->Article_model->get_categories('id', 'DESC', 5);

        // View
        $data['main_content'] = 'admin/categories/index';
        $this->load->view('admin/layout/main', $data);
    }

}
