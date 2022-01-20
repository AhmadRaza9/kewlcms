<?php

class Authenticate extends MY_Controller
{
    public function login()
    {

        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');

        if ($this->form_validation->run() == false) {
            // Load View
            $this->load->view('admin/layout/login');
        } else {
            // Get Form Post
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            // Validate Username & Password
            $user_id = $this->Authenticate_model->login_user($username, $password);

            if ($user_id) {
                $user_data = array(
                    'user_id' => $user_id,
                    'username' => $username,
                    'logged_in' => true,
                );
                // Set session userdata
                $this->session->set_userdata($user_data);

                // Set message
                $this->session->set_flashdata('pass_login', 'You are now logged in');
                header('location: http://kewlcms.test/index.php/admin/dashboard');
            }
        }

    }
}
