<?php

class Settings extends MY_Controller
{
    // Users Main Index
    public function index()
    {
        // Get Groups
        $data['settings'] = $this->Settings_model->get_global_settings();

        // View
        $data['main_content'] = 'admin/settings/index';
        $this->load->view('admin/layout/main', $data);
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['settings'] = $this->Settings_model->get_setting_value($id);

            // Views
            $data['main_content'] = 'admin/settings/edit';
            $this->load->view('admin/layout/main', $data);
        } else {
            // Create Data Array
            $data = array(
                'value' => $this->input->post('name'),
            );

            // Table Update
            $this->Settings_model->update_setting($data, $id);

            // Create Message
            $this->session->set_flashdata('setting_saved', 'Your Setting has been saved');

            header('location: http://kewlcms.test/index.php/admin/settings');

        }
    }

}
