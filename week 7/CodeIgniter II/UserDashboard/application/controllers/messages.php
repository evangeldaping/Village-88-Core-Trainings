<?php

include_once('common_controller_checks.php');

// 		Messages controller handles the add() and remove() of posts 
//	on user profiles.  The initial work for edit() is here as
//	well, but not really needed (hence unfinished).
class Messages extends CI_Controller
{
    public function index()
    {
        redirect(base_url("dashboard"));
        exit;
    }

    public function add($profile_id)
    {
        $message['author_id'] = $this->session->userdata('user_id');
        $message['profile_id'] = $profile_id;
        $message['message_txt'] = $this->input->post('message');

        $this->load->model('message_model');
        $resultVal = $this->message_model->create_message($message);
        if (empty($resultVal)) {
            $this->session->set_flashdata('validation_error', "Could not add this post");
        }
        redirect(base_url("users/show/" . $profile_id));
        exit;
    }

    // 	TODO - edit a previous message Post. 
    //	Skeleton is here, but not referenced by UI.
    public function edit($message_id)
    {
        check_logged_in($this->session, "to edit a post");

        if (empty($message_id)) {
            $this->session->set_flashdata('validation_error', "Must specify a post you want to edit");
            redirect(base_url("dashboard"));
            exit;
        }

        //	HERE we would load an edit_message_view
    }

    //	Handle the edit HERE in an "update"-style edit_message, similar to edit_user. 


    public function remove($message_id, $profile_id = NULL)
    {
        check_logged_in($this->session, "to remove a post");

        if (empty($message_id)) {
            $this->session->set_flashdata('validation_error', "Post not found -- cannot be removed");
            redirect(base_url("dashboard"));
            exit;
        }
        $return_url = base_url("users/show/{$profile_id}");

        $this->load->model('message_model');
        $message = $this->message_model->retrieve_message($message_id);
        if (!$message) {
            $this->session->set_flashdata('validation_error', "Post not found -- cannot be removed");
            redirect(base_url("dashboard"));
            exit;
        }

        $user_id = $this->session->userdata('user_id');
        $author_id = $message['author_id'];
        if (($this->session->userdata('user_level') != 9) && ($user_id != $author_id)) {
            $this->session->set_flashdata('validation_error', "Must be Admin to remove other's posts");
            redirect($return_url);
            exit;
        }

        if (!$this->message_model->destroy_message($message_id)) {
            $this->session->set_flashdata('validation_error', "Internal DB error: could not remove this post");
        }
        redirect($return_url);
        exit;
    }
}
