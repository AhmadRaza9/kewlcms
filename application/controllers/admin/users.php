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

    public function add()
    {
        // Validation Rules
        $this->form_validation->set_rules('first_name', 'First_name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last_name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        $data['groups'] = $this->User_model->get_groups();

        if ($this->form_validation->run() == false) {
            // Views
            $data['main_content'] = 'admin/users/add';
            $this->load->view('admin/layout/main', $data);
        } else {
            // Create Data Array
            $data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
            );

            // Tablel Insert
            $this->User_model->insert($data);

            // Create Message
            $this->session->set_flashdata('user_saved', 'User has been saved');

            header('location: http://kewlcms.test/index.php/admin/users');

        }

    }

}
