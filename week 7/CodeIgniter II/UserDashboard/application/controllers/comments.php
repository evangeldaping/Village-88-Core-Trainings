<?php

include_once('common_controller_checks.php');

// 		Comments controller handles the add() and remove() of comments 
//	on previous Messages.  The initial work for edit() is here as
//	well, but not really needed (hence unfinished).
class Comments extends CI_Controller
{
    public function index()
    {
        redirect(base_url("dashboard"));
        exit;
    }

    public function add($message_id)
    {
        $comment['author_id'] = $this->session->userdata('user_id');
        $comment['message_id'] = $message_id;
        $comment['comment_txt'] = $this->input->post('comment');

        $this->load->model('comment_model');
        $resultVal = $this->comment_model->create_comment($comment);

        if (empty($resultVal)) {
            $this->session->set_flashdata('validation_error', "Could not add this comment");
        }
        $profile_id = $this->input->post('profile_id');

        redirect(base_url("users/show/" . $profile_id));
        exit;
    }

    // 	TODO - edit a previous message Comment. 
    //	Skeleton is here, but not referenced by UI.
    public function edit($message_id)
    {
        check_logged_in($this->session, "to edit a comment");

        if (empty($message_id)) {
            $this->session->set_flashdata('validation_error', "Must specify a comment you want to edit");
            redirect(base_url("dashboard"));
            exit;
        }

        //	HERE we would load an edit_comment_view

    }

    //	Handle the edit HERE in an "update"-style edit_comment, similar to edit_user. 


    public function remove($comment_id, $profile_id = NULL)
    {
        check_logged_in($this->session, "to remove a comment");

        if (empty($comment_id)) {
            $this->session->set_flashdata('validation_error', "Comment not found -- cannot be removed");
            redirect(base_url("dashboard"));
            exit;
        }
        $return_url = base_url("users/show/{$profile_id}");

        $this->load->model('comment_model');
        $comment = $this->comment_model->retrieve_comment($comment_id);
        if (!$comment) {
            $this->session->set_flashdata('validation_error', "Comment not found -- cannot be removed");
            redirect(base_url("dashboard"));
            exit;
        }

        $user_id = $this->session->userdata('user_id');
        $author_id = $comment['author_id'];
        if (($this->session->userdata('user_level') != 9) && ($user_id != $author_id)) {
            $this->session->set_flashdata('validation_error', "Must be Admin to remove other's comments");
            redirect($return_url);
            exit;
        }

        if (!$this->comment_model->destroy_comment($comment_id)) {
            $this->session->set_flashdata('validation_error', "Internal DB error: could not remove this comment");
        }
        redirect($return_url);
        exit;
    }
}
