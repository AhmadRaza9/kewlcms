<?php

class Users extends MY_Controller
{

    public function index()
    {
        // Get Users
        $data['users'] = $this->User_model->get_users();

        // Views
        $data['main_content'] = 'admin/users/index';
        $this->load->view('admin/layout/main', $data);
    }

}
