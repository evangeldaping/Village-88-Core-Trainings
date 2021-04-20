<?php

include_once('common_controller_checks.php');

//	Dashboard is effectively users/index, in traditional REST

class Dashboard extends CI_Controller
{
    public function index()
    {
        check_logged_in($this->session);

        $viewData['admin'] = ($this->session->userdata('user_level') == 9);

        $this->load->model('user_model');
        $all_users = $this->user_model->retrieve_all_users();
        $viewData['all_users'] = $all_users;

        $this->session->set_userdata('active_page', "dashboard");
        $this->load->view('dashboard_view', $viewData);
    }

    public function admin()
    {
        $this->index();
    }
}
