<?php
date_default_timezone_set("America/Los_Angeles");

//		For already existing users, signin.
//	Index posts the view, logon validates the input, 
//	successful_logon sets the user and redirects to dashboard,
//	and logout signs the user out.

class Signin extends CI_Controller
{
    public function index()
    {
        $this->session->set_userdata('active_page', "signin");

        $this->load->view('signin_view');
    }

    public function logon()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $this->load->model('user_model');
        $user = $this->user_model->retrieve_user_by_email($email);

        if (empty($user) || (crypt($password, $user['password']) != $user['password'])) {
            $this->session->set_flashdata('validation_error', "Email/password combination not found");

            redirect(base_url('signin'));
            exit;
        }
        $this->successful_logon($user);
    }

    public function successful_logon($user)
    {
        $user = array(
            'user_id' => $user['id'],
            'user_email' => $user['email'],
            'user_first_name' => $user['first_name'],
            'user_last_name' => $user['last_name'],
            'user_level' => $user['user_level'],
            'is_logged_in' => true
        );
        $this->session->set_userdata($user);

        redirect(base_url('dashboard'));
        exit;
    }

    public function logout()
    {
        $this->session->sess_destroy();

        redirect(base_url('signin'));
        exit;
    }
}
