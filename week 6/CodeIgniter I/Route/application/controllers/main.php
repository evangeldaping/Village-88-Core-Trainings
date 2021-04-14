<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

   public function index()
	{
		echo "I am Main Class!";
	}

	// 1
	// http://localhost/Route/index.php/main/hello
	public function hello()
	{
		echo "Hello World!";
	}

	// 2
	// http://localhost/Route/index.php/main/say
	public function say()
	{
		echo "HI";
	}

	// 3
	// http://localhost/Route/index.php/main/say_anything/awesome
	public function say_anything($id)
	{
		echo strtoupper($id);
	}

	// 4
	// http://localhost/Route/index.php/main/
	// will redirect to index()

	// 5
	// http://localhost/Route/index.php/
	// will redirect to index()

	// 6
	// http://localhost/Route/index.php/main/danger
	public function danger()
	{
		redirect('main');
	}
}
