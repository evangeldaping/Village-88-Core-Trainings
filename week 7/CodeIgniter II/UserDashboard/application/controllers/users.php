<?php

include_once('common_controller_checks.php');

//		User controller handles the REST equivalents
//	of Show (index and show), New (add), Edit (edit), 
//	Update (edit_user and validate_form), and Destroy
//	(remove). Admins have the ability to add new user
//	accounts. Note: add() revectors to register_view, 
//	as opposed to reinventing a new view to add users.  

class Users extends CI_Controller
{
    public function index($profile_id = NULL)
    {
        redirect(base_url("users/show"));
        exit;
    }

    public function add()
    {
        check_logged_in($this->session, "to add a new user");

        $viewData['admin'] = ($this->session->userdata('user_level') == 9);
        if (!$viewData['admin']) {
            $this->session->set_flashdata('validation_error', "Must be signed in as Admin to add new users");
            redirect(base_url("signin"));
            exit;
        }
        $this->session->set_userdata('active_page', "users");
        $this->load->view('register_view', $viewData);
    }

    public function show($profile_id = NULL)
    {
        check_logged_in($this->session, "to view profiles");

        $user_id = $this->session->userdata('user_id');
        if (empty($profile_id)) {
            $profile_id = $user_id;
        }

        $this->load->model('user_model');
        $profile = $this->user_model->retrieve_user($profile_id);
        if (empty($profile)) {
            $this->session->set_flashdata('validation_error', "Could not find this user");
            redirect(base_url("users/edit"));
            exit;
        }

        $this->load->model('message_model');
        $messages = $this->message_model->retrieve_messages_by_profile_id($profile_id, true);    //	true ==> DESC

        $this->load->model('comment_model');
        for ($msg_num = 0; isset($messages[$msg_num]); $msg_num++) {
            $messages[$msg_num]['comments'] = $this->comment_model->retrieve_comments_by_message_id($messages[$msg_num]['id']);
        }

        $viewData['profile'] = $profile;
        $viewData['messages'] = $messages;
        $viewData['user_id'] = $user_id;
        $viewData['admin'] = ($this->session->userdata('user_level') == 9);

        $this->session->set_userdata('active_page', "users");
        $this->load->view('show_user_view', $viewData);
    }

    public function edit($user_id = NULL)
    {
        check_logged_in($this->session, "to edit a profile");

        if (empty($user_id)) {
            $user_id = $this->session->userdata('user_id');
        }

        $viewData['admin'] = ($this->session->userdata('user_level') == 9);
        if (($viewData['admin'] == false) && ($this->session->userdata('user_id') != $user_id)) {
            $this->session->set_flashdata('validation_error', "Cannot edit another's profile");
            redirect(base_url("signin"));
            exit;
        }
        $this->load->model('user_model');
        $user = $this->user_model->retrieve_user($user_id);
        if (empty($user)) {
            $this->session->set_flashdata('validation_error', "Could not find this user");
            redirect(base_url("users/edit"));
            exit;
        }
        $viewData['user'] = $user;

        $this->session->set_userdata('active_page', "users");
        $this->load->view('edit_user_view', $viewData);
    }

    public function edit_user($edit_type = NULL)
    {
        $this->load->library("form_validation");
        $user['id'] = $this->input->post('user_id');
        $this->load->model('user_model');
        $return_url = base_url("dashboard");

        if (empty($edit_type) || $edit_type == 'name') {
            $this->form_validation->set_rules("first_name", "First Name",         "required|min_length[2]|alpha_numeric");
            $this->form_validation->set_rules("last_name",     "Last Name",         "required|min_length[2]|alpha");
            $this->form_validation->set_rules("email",         "Email Address",     "required|min_length[5]|valid_email|is_unique[users.email]");
            $this->validate_form($user['id']);

            $user['first_name'] = $this->input->post('first_name');
            $user['last_name'] = $this->input->post('last_name');
            $user['email'] = $this->input->post('email');
            $user['user_level'] = $this->input->post('user_level');

            if (!$this->user_model->update_user_name($user)) {
                $this->session->set_flashdata('validation_error', "Cannot update user information");
                $return_url = base_url("users/edit/{$user['id']}");
            }
        }
        if (empty($edit_type) || $edit_type == 'password') {
            $this->form_validation->set_rules("password",     "Password",              "required|min_length[5]|alpha_dash");
            $this->form_validation->set_rules("password2",     "Password Confirmation", "matches[password]");
            $this->validate_form($user['id']);

            $password = $this->input->post('password');
            $user['password'] = crypt($password, bin2hex(openssl_random_pseudo_bytes(22)));

            if (!$this->user_model->update_user_password($user)) {
                $this->session->set_flashdata('validation_error', "Cannot update user password");
                $return_url = base_url("users/edit/{$user['id']}");
            }
        }
        if (empty($edit_type) || $edit_type == 'description') {
            $this->form_validation->set_rules("description", "Description", "required");
            $this->validate_form($user['id']);

            $user['description'] = $this->input->post('description');

            if (!$this->user_model->update_user_description($user)) {
                $this->session->set_flashdata('validation_error', "Cannot update description");
                $return_url = base_url("users/edit/{$user['id']}");
            }
        }
        redirect($return_url);
        exit;
    }

    private function validate_form($profile_id)
    {
        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('validation_error', validation_errors());
            redirect(base_url("users/edit/{$profile_id}"));
            exit;
        }
    }

    public function remove($user_id)
    {
        check_logged_in($this->session, "to remove a profile");

        if ($this->session->userdata('user_level') != 9) {
            $this->session->set_flashdata('validation_error', "Must be signed in as Admin to delete user profiles");
            redirect(base_url("signin"));
            exit;
        }
        $this->load->model('user_model');

        if (!$this->user_model->retrieve_user($user_id)) {
            $this->session->set_flashdata('validation_error', "User not found -- cannot be deleted");
        } elseif (!$this->user_model->destroy_user($user_id)) {
            $this->session->set_flashdata('validation_error', "Could not delete this user");
        }
        if ($this->session->userdata('user_id') == $user_id) {
            redirect(base_url("signin/logout"));
            exit;
        }
        redirect(base_url("dashboard"));
        exit;
    }
}
