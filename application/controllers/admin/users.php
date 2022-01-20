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
                'password' => md5($this->input->post('password')),
                'group_id' => $this->input->post('group'),
            );

            // Tablel Insert
            $this->User_model->insert($data);

            // Create Message
            $this->session->set_flashdata('user_saved', 'User has been saved');

            header('location: http://kewlcms.test/index.php/admin/users');

        }

    }

    public function edit($id)
    {
        // Validation Rules
        $this->form_validation->set_rules('first_name', 'First_name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last_name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');

        $data['groups'] = $this->User_model->get_groups();

        $data['user'] = $this->User_model->get_user($id);

        if ($this->form_validation->run() == false) {
            // Views
            $data['main_content'] = 'admin/users/edit';
            $this->load->view('admin/layout/main', $data);
        } else {
            // Create Data Array
            $data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'group_id' => $this->input->post('group'),
            );

            // Table Update
            $this->User_model->update($data, $id);

            // Create Message
            $this->session->set_flashdata('user_saved', 'User has been saved');

            header('location: http://kewlcms.test/index.php/admin/users');

        }

    }

    public function delete($id)
    {
        $this->User_model->delete($id);

        // Create Message
        $this->session->set_flashdata('user_deleted', 'User has been deleted');

        header('location: http://kewlcms.test/index.php/admin/users');

    }

}
