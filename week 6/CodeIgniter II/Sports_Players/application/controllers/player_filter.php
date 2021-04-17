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
        //fetch all value in database
        $filter = $this->input->post('name_search', true);
        $data['search'] = $this->Player_filter_model->search_name($filter);

        $data['name'] = $this->Player_filter_model->fetch_filter_type('name');
        $data['gender'] = $this->Player_filter_model->fetch_filter_type('gender');
        $data['sports'] = $this->Player_filter_model->fetch_filter_type('sports');
        $this->load->view('players', $data);
    }

    function fetch_data()
    {
        //set hear pagination and filter 
        sleep(1);
        $name = $this->input->post('name');
        $gender = $this->input->post('gender');
        $sports = $this->input->post('sports');
        $this->load->library('pagination');
        $config = array();
        $config['base_url'] = '#';
        $config['total_rows'] = $this->Player_filter_model->count_all($name, $gender, $sports);
        $config['per_page'] = 8;
        $config['uri_segment'] = 3;
        $config['use_page_numbers'] = TRUE;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = '&gt;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '&lt;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='active'><a href='#'>";
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['num_links'] = 3;
        $this->pagination->initialize($config);
        $page = $this->uri->segment(3);
        $start = ($page - 1) * $config['per_page'];
        $output = array(
            'pagination_link'  => $this->pagination->create_links(),
            'player_list'   => $this->Player_filter_model->fetch_data($config["per_page"], $start, $name, $gender, $sports)
        );
        //all value send in json 
        echo json_encode($output);
    }
}
