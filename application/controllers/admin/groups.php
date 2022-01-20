<?php

class Groups extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Access Control
        if (!$this->session->userdata('logged_in')) {
            header('location: http://kewlcms.test/index.php/admin/login');
        }

    }

    // Users Main Index
    public function index()
    {
        // Get Groups
        $data['groups'] = $this->User_model->get_groups();

        // View
        $data['main_content'] = 'admin/groups/index';
        $this->load->view('admin/layout/main', $data);
    }

    public function add()
    {
        // Validation Rules
        $this->form_validation->set_rules('name', 'Name', 'trim|required');

        if ($this->form_validation->run() == false) {
            // Views
            $data['main_content'] = 'admin/groups/add';
            $this->load->view('admin/layout/main', $data);
        } else {
            // Create Data Array
            $data = array(
                'name' => $this->input->post('name'),
            );

            // Table Insert
            $this->User_model->insert_group($data);

            // Create Message
            $this->session->set_flashdata('group_saved', 'Your Group has been saved');

            header('location: http://kewlcms.test/index.php/admin/groups');
        }
    }

    public function edit($id)
    {
        // Validation Rules
        $this->form_validation->set_rules('name', 'Name', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['group'] = $this->User_model->get_group($id);

            // Views
            $data['main_content'] = 'admin/groups/edit';
            $this->load->view('admin/layout/main', $data);
        } else {
            // Create Data Array
            $data = array(
                'name' => $this->input->post('name'),
            );

            // Table Update
            $this->User_model->update_group($data, $id);

            // Create Message
            $this->session->set_flashdata('group_saved', 'Your Group has been saved');

            header('location: http://kewlcms.test/index.php/admin/groups');

        }
    }

    public function delete($id)
    {
        $this->User_model->delete_group($id);

        // Create Message
        $this->session->set_flashdata('group_deleted', 'Your Group has been deleted');

        header('location: http://kewlcms.test/index.php/admin/groups');
    }
}
