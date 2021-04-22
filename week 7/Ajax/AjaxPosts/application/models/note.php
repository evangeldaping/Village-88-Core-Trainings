<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Note extends CI_Model
{
    public function all()
    {
        return $this->db->query("SELECT * FROM posts")->result_array();
    }
    public function create($new_note)
    {
        $now = date("Y-m-d, H:i:s");
        $query = "INSERT INTO posts (description, created_at, updated_at) VALUES (?,?,?)";
        $values = array($new_note['description'], $now, $now);
        return $this->db->query($query, $values);
    }
}
