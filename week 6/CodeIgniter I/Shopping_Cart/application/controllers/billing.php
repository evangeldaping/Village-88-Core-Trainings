<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Billing extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Billing_model');
	}

	public function index()
	{
		$this->data['title'] = 'Billing';

		$this->load->view('billing', $this->data);
	}

	public function save_order()
	{
		$customer = array(
			'name' 		=> $this->input->post('name'),
			'email' 	=> $this->input->post('email'),
			'card' 	=> $this->input->post('card')
		);

		$cust_id = $this->Billing_model->insert_customer($customer);

		$order = array(
			'date' 			=> date('Y-m-d'),
			'customerid' 	=> $cust_id
		);

		$ord_id = $this->Billing_model->insert_order($order);

		if ($cart = $this->cart->contents()) :
			foreach ($cart as $item) :
				$order_detail = array(
					'orderid' 		=> $ord_id,
					'productid' 	=> $item['id'],
					'quantity' 		=> $item['qty'],
					'price' 		=> $item['price']
				);

				$cust_id = $this->Billing_model->insert_order_detail($order_detail);
			endforeach;
		endif;
		echo "<center><h1>Thank You! your order has been placed!</h1></center><br />";
		echo "<a href=" . base_url() . "products><center><h2>Go back</h2></center></a>";
	}
}
