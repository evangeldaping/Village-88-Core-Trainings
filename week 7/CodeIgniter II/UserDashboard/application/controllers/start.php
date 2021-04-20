<?php

//	Simple controller merely loads the splash screen view.

class Start extends CI_Controller
{
    public function index()
    {
        $this->session->set_userdata('active_page', "home");
        $this->load->view('start_page');
    }
}
