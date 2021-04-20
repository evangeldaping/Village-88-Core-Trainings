<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Player_filter_model extends CI_Model
{
    public function set($key)
    {
        $this->db->distinct();
        $this->db->select('*');
        $this->db->like('name', $key);
        $this->db->or_like('sports', $key);
        $this->db->or_like('gender', $key);
        return $this->db->get('players')->result();
    }
}
