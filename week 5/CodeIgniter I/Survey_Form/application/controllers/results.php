<?php
class Results extends CI_Controller
{
    public function submit_form()
    {
        // Set post variables
        $name = $this->input->post('name');
        $dojo_location = $this->input->post('dojo_location');
        $fav_language = $this->input->post('fav_language');
        $comments = $this->input->post('comments');

        // Set session variables
        $this->session->set_userdata('name', $name);
        $this->session->set_userdata('dojo_location', $dojo_location);
        $this->session->set_userdata('fav_language', $fav_language);
        $this->session->set_userdata('comments', $comments);

        // See if a user counter exists
        if($this->session->userdata('counter'))
        {
            $counter = $this->session->userdata('counter');
            $this->session->set_userdata('counter', $counter + 1);
        }
        else
        {
            $this->session->set_userdata('counter', 1);
        }
					// foldername/filename
        $this->load->view('result/surveyresult');
    }
}
?>