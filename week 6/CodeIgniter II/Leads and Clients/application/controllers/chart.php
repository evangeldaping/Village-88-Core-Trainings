<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Chart extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // load model
        $this->load->database();
        $this->load->helper(array('url', 'html', 'form'));
    }

    public function leads_clients_pie_chart()
    {
        $nameQuery = $this->db->query("SELECT CONCAT(clients.first_name, ' ', clients.last_name) AS client_name, COUNT(leads.leads_id) AS number_of_leads FROM clients LEFT JOIN sites ON sites.client_id = clients.client_id LEFT JOIN leads ON sites.site_id = leads.site_id GROUP BY clients.first_name;");

        $data['clients_leads'] = $nameQuery->result();

        $this->load->view('leads_clients_pie_chart', $data);
    }
}
