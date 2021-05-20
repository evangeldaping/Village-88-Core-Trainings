<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Analyzer extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper("security");
	}

	public function index()
	{
		$this->load->view('home');
	}

	/*API Endgoing for parsing url from the form */
	public function parseUrl()
	{
		$url = $this->security->xss_clean($this->input->post("url"));
		$html = file_get_contents($url);
		echo $html;
	}
}
