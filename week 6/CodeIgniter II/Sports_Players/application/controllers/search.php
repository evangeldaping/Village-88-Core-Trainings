<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Search_Model');
    }

    public function index()
    {
        $filter = $this->input->post('key', true);
        $data['sports'] = $this->Search_Model->set($filter);
        $this->load->view('players', $data);
    }

    function show_gender()
    {
        if ($this->input->post('checkbox_value')) {
            $gender = $this->input->post('checkbox_value');
            for ($count = 0; $count < count($gender); $count++) {
                $this->Search_Model->set($gender[$count]);
                $this->load->view('players', $gender);
            }
        }
    }
}

//end of main controller