<?php
require_once('signin.php');

//		For new users, create an account.
//	Admins can create accounts on behalf of others.
//	Index posts the view, register validates the input, 
//	calling out to Signin::successful_logon upon success..

class Registration extends Signin
{
    public function index()
    {
        $user_level = $this->session->userdata('user_level');
        if (empty($user_level) || ($user_level != 9)) {
            $viewData['admin'] = false;
        } else {
            $viewData['admin'] = true;
        }
        $this->session->set_userdata('active_page', "register");
        $this->load->view('register_view', $viewData);
    }

    public function register()
    {
        $this->load->library("form_validation");

        $this->form_validation->set_rules("first_name", "First Name",              "required|min_length[2]|alpha_numeric");
        $this->form_validation->set_rules("last_name",     "Last Name",              "required|min_length[2]|alpha");
        $this->form_validation->set_rules("email",         "Email Address",          "required|min_length[5]|valid_email|is_unique[users.email]");
        $this->form_validation->set_rules("password",     "Password",              "required|min_length[5]|alpha_dash");
        $this->form_validation->set_rules("password2",     "Password Confirmation", "matches[password]");

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('validation_error', validation_errors());
            redirect(base_url('registration'));
        } else {
            $first_name = $this->input->post('first_name');
            $last_name = $this->input->post('last_name');
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $hash = crypt($password, bin2hex(openssl_random_pseudo_bytes(22)));

            $this->load->model('user_model');
            $new_user = array(
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'password' => $hash
            );

            if (!$this->user_model->create_user($new_user)) {
                $this->session->set_flashdata('validation_error', "Internal error: could not ADD new user");
                redirect(base_url('registration'));
                exit;
            }
            $user = $this->user_model->retrieve_user_by_email($email);
            if (!$user) {
                $this->session->set_flashdata('validation_error', "Internal error: user not found after successful ADD");
                redirect(base_url('registration'));
                exit;
            }

            $user_level = $this->session->userdata('user_level');
            if (!empty($user_level) && ($user_level == 9)) {
                redirect(base_url('dashboard'));
                exit;
            }
            $this->successful_logon($user);
        }
    }
}
