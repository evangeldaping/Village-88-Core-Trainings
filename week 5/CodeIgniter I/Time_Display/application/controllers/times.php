<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Times extends CI_Controller {

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
			date_default_timezone_set('Asia/Manila');
			//define unix timestamp
			$date_time['date_time'] = array(
				'month_day_year' => date('M j Y'),
				'time_up_to_12' => date('h:i:sa')
			);

			$this->load->view('time.php', $date_time);
		
		}
}
