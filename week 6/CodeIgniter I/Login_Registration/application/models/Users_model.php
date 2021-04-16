<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users_model extends CI_Model
{
	public function fetch_data($id = array())
	{
		$this->db->where('id', $id['id']);
		return $this->db->get('users')->row();
	}

	public function login($email, $password)
	{
		$sql = "SELECT * FROM users
                WHERE email='$email' AND password='$password' LIMIT 1 ";
		$result = $this->db->query($sql)->row();
		return $result;
	}

	public function registration($user_data = array())
	{
		if (!array_key_exists("created_at", $user_data)) {
			$user_data['created_at'] = date("Y-m-d H:i:s");
		}
		if (!array_key_exists("updated_at", $user_data)) {
			$user_data['updated_at'] = date("Y-m-d H:i:s");
		}
		$ins = $this->db->insert('users', $user_data);
		if ($ins) {
			$insert_id = $this->db->insert_id();
			return $insert_id;
			# code...
		} else {
			return false;
		}
	}

	public function existed_email($str)
	{
		//echo $str;exit;
		$this->db->where('email', $str);
		if ($this->db->count_all_results('users') == 1) {
			return true;
		} else {
			return false;
		}
	}
}
