<?php

class Groups extends MY_Controller
{
    // Users Main Index
    public function index()
    {
        // Get Groups
        $data['groups'] = $this->User_model->get_groups();

        // View
        $data['main_content'] = 'admin/groups/index';
        $this->load->view('admin/layout/main', $data);
    }
}
