<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	
	public function index()
	{
		echo "Welcome to CodeIgniter. The default Controller is Main.php";
	}
	public function hello($id, $id2)
	{
		// echo "I am the hello route";
		echo $id . $id2;
	}
}

//end of main controller