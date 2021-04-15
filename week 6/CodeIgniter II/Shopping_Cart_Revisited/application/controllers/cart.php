<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Cart_model');
	}

	public function index()
	{
		$this->data['title'] = 'Shopping Carts';

		if (!$this->cart->contents()) {
			$this->data['message'] = '<center><h1>Your cart is empty!</h1></center>';
		} else {
			$this->data['message'] = $this->session->flashdata('message');
		}

		$this->load->view('cart', $this->data);
	}

	public function add()
	{
		$this->load->model('Cart_model');

		$insert_room = array(
			'id' => $this->security->sanitize_filename(
				$this->input->post('id', TRUE)
			),
			'name' => $this->security->sanitize_filename(
				$this->input->post('name', TRUE)
			),
			'price' => $this->security->sanitize_filename(
				$this->input->post('price', TRUE)
			),
			'qty' => 1
		);

		$this->cart->insert($insert_room);

		redirect('cart');
	}

	function remove($rowid)
	{
		if ($rowid == "all") {
			$this->cart->destroy();
		} else {
			$data = array(
				'rowid'   => $rowid,
				'qty'     => 0
			);

			$this->cart->update($data);
		}

		redirect('cart');
	}

	function update_cart()
	{
		foreach ($_POST['cart'] as $id => $cart) {
			$price = $cart['price'];
			$amount = $price * $cart['qty'];

			$this->Cart_model->update_cart($cart['rowid'], $cart['qty'], $price, $amount);
		}

		redirect('cart');
	}
}
