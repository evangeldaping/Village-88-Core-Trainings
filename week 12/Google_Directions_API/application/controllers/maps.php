<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Maps extends CI_Controller
{
    public function index()
    {
        $this->load->view('index');
    }
    public function direction()
    {
        $json = file_get_contents("https://maps.googleapis.com/maps/api/directions/json?origin=" .
            urlencode($this->input->post('from_address')) . "&destination=" .
            urlencode($this->input->post('to_address')) . "&key=AIzaSyBdiiLOLuGrTnaz1wt_jBPeXfq12RWCtV8");
        $data = json_decode($json);
        $directions['directions'] = $data->routes[0]->legs[0]->steps;
        $this->load->view('partials/index_html', $directions);
    }
}
