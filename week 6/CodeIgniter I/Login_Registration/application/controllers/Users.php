<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
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

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Users_model');
	}

	public function logout()
	{
		$this->session->set_userdata('isloggedin', false);
		$this->session->set_userdata('loguserid');
		$this->session->sess_destroy();
		redirect('users/login');
	}

	public function home()
	{
		if ($this->session->userdata('isloggedin')) {
			# code...
			$data['udata'] = $this->Users_model->fetch_data(array('id' => $this->session->userdata('loguserid')));
			$this->load->view('users/home', $data);
		} else {
			redirect('users/login');
		}
	}

	public function login()
	{
		$this->form_validation->set_rules('email', 'email id ', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		if ($this->form_validation->run() == FALSE) :
			$this->load->view('users/login');
		else :
			$email     = $this->input->post('email');
			$password  = md5($this->input->post('password'));
			$log_users = $this->Users_model->login($email, $password);
			if (is_object($log_users)) :
				$this->session->set_userdata('isloggedin', true);
				$this->session->set_userdata('loguserid', $log_users->id);
				redirect('users/home');
			else :
				$data['error_msg'] = 'invalid username or password';
			endif;
		endif;
	}

	public function existed_email($str)
	{
		if ($this->Users_model->existed_email($str)) {
			$this->form_validation->set_message('existed_email', 'email already exists');
			return false;
			# code...
		} else {
			return true;
		}
	}

	public function register()
	{
		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
			$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_existed_email');
			$this->form_validation->set_rules('password', 'password', 'required');
			$this->form_validation->set_rules('cpassword', 'confirm password', 'required|matches[password]');
		}
		$user_data = array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password'))
		);
		if ($this->form_validation->run() == true) {
			$insert = $this->Users_model->registration($user_data);
			if ($insert) {
				$this->session->set_userdata('success_msg', 'user created successfuly');
				redirect('users/login');
			}
			$data['error_msg'] = 'Some Problem ooccured. Please try again later';
		}
		$data['user'] = $user_data;
		$data['title'] = 'User Registration';
		$this->load->view('users/register', $data);
	}
}
