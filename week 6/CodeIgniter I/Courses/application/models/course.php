<?php
class Course extends CI_Model
{
    // Get all rows from database table
    public function get_all_courses()
    {
        return $this->db->query("SELECT * FROM courses ORDER BY id DESC")->result_array();
    }

    // Add a new item into the database
    public function add_course($post_data)
    {
        $now = date("Y-m-d, H:i:s");
        $query = "INSERT INTO courses (course_name, description, created_at, updated_at) 
                         VALUES       (?,           ?,           ?,          ?)";

        $values = array($post_data['course_name'], $post_data['description'], $now, $now);

        return $this->db->query($query, $values);
    }

    public function show_course($course_id)
    {
        $query = "SELECT * FROM courses
                  WHERE
                      id = ?";

        $values = array($course_id);

        return $this->db->query($query, $values)->row_array();
    }

    public function delete_course($course_id)
    {
        $query = "DELETE FROM courses
                  WHERE
                      id = ?";

        $values = array($course_id);

        return $this->db->query($query, $values);
    }
}
