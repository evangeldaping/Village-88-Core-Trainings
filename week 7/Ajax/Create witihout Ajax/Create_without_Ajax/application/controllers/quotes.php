<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Quotes extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Quote");
    }
    public function index_json()
    {
        $data["quotes"] = $this->Quote->all();
        echo json_encode($data);
    }
    public function index_html()
    {
        $data["quotes"] = $this->Quote->all();
        $this->load->view("partials/quotes", $data);
    }
    public function create()
    {
        $new_quote = $this->input->post();
        $this->Quote->create($new_quote);
        redirect("/");
    }
    public function index()
    {
        $this->load->view('index');
    }
}
