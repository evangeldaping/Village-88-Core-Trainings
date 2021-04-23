<?php defined('BASEPATH') or exit('No direct script access allowed');

class Posts extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        // Load pagination library 
        $this->load->library('ajax_pagination');

        // Load post model 
        $this->load->model('post');

        // Per page limit 
        $this->perPage = 4;
    }

    public function index()
    {
        $data = array();

        // Get record count 
        $conditions['returnType'] = 'count';
        $totalRec = $this->post->getRows($conditions);

        // Pagination configuration 
        $config['target']      = '#dataList';
        $config['base_url']    = base_url('/posts/ajaxPaginationData');
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $config['link_func']   = 'searchFilter';

        // Initialize pagination library 
        $this->ajax_pagination->initialize($config);

        // Get records 
        $conditions = array(
            'limit' => $this->perPage
        );
        $data['posts'] = $this->post->getRows($conditions);


        // --------------------------------------
        // $this->form_validation->set_rules('key', 'key', 'trim|required|min_length[2]|max_length[25]');
        // $this->form_validation->set_rules('Date1', 'first date', 'trim|required');
        // $this->form_validation->set_rules('Date2', 'last date', 'trim|required');
        // if ($this->form_validation->run() == FALSE) {
        //     $this->load->view('posts/ajax-data');
        // } else {
        //     $key = $this->input->post('key');
        //     $Date1 = $this->input->post('Date1');
        //     $Date2 = $this->input->post('Date2');
        //     $store = $this->post->set($key, $Date1, $Date2);
        //     echo json_encode($store);
        // }
        // -------------------------------------


        // Load the list page view 
        $this->load->view('posts/index', $data);
    }

    function ajaxPaginationData()
    {
        // Define offset 
        $page = $this->input->post('page');
        if (!$page) {
            $offset = 0;
        } else {
            $offset = $page;
        }

        // Set conditions for search and filter 
        $keywords = $this->input->post('keywords');
        $sortBy = $this->input->post('sortBy');
        if (!empty($keywords)) {
            $conditions['search']['keywords'] = $keywords;
        }
        if (!empty($sortBy)) {
            $conditions['search']['sortBy'] = $sortBy;
        }

        // Get record count 
        $conditions['returnType'] = 'count';
        $totalRec = $this->post->getRows($conditions);

        // Pagination configuration 
        $config['target']      = '#dataList';
        $config['base_url']    = base_url('/posts/ajaxPaginationData');
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $config['link_func']   = 'searchFilter';

        // Initialize pagination library 
        $this->ajax_pagination->initialize($config);

        // Get records 
        $conditions['start'] = $offset;
        $conditions['limit'] = $this->perPage;
        unset($conditions['returnType']);
        $data['posts'] = $this->post->getRows($conditions);

        // Load the data list view 
        $this->load->view('posts/ajax-data', $data, false);
    }
}
