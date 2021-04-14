<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller
{

	public function index()
	{
		echo "Welcome to CodeIgniter. The default Controller is Main.php";
	}

	public function access()
	{
		$this->load->view("access");
	}

	public function world()
	{
		$this->load->view("world");
	}

	public function ninjas($id)
	{
		for ($i = 1; $i <= $id; $i++) {
			$data['number'] = $i;
			$this->load->view("ninjas", $data);
		}
	}
}

//end of main controller