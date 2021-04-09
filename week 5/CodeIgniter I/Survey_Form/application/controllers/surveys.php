<?php
class Surveys extends CI_Controller
{

    public function process_form()
    {
		               // foldername/filename
        $this->load->view('survey/surveyform');
    }

    public function destroysession()
    {
        $this->session->sess_destroy();
        redirect('');
    }
}
?>