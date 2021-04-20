<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Player_filter extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Player_filter_model');
    }

    function index()
    {
        $key = $this->input->post('key', true);
        $data['sports_players'] = $this->Player_filter_model->set($key);
        $this->load->view('players', $data);
    }
}
