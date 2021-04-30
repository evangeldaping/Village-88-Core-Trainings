<?php
class Notes_model extends CI_Model
{
    public function get_all_note()
    {
        $query = $this->db->query('SELECT * from notes ORDER BY created_at DESC');
        return $query->result_array();
    }

    public function create_note($data)
    {
        $this->db->query(
            'INSERT INTO notes
            (title, description, created_at) 
            VALUES (?,?, NOW())',
            array($data['title'], $data['note'])
        );
    }

    public function update_note($id, $data)
    {
        $this->db->query(
            'UPDATE notes SET description = ?, updated_at = NOW() WHERE id = ?',
            array($data['note'], $id)
        );
    }

    public function remove_note($id)
    {
        $this->db->query(
            'DELETE FROM notes WHERE id = ?',
            array($id)
        );
    }
}
