<?php
class Course extends CI_Model
{
    // Get all rows from database table
    public function get_all_courses()
    {
        return $this->db->query("SELECT * FROM courses")->result_array();
    }

    // Add a new item into the database
    public function add_course($post_data)
    {
        $this->db->query("INSERT INTO courses (course_name, description, created_at, updated_at) VALUES (?,?, NOW(),NOW())", array($post_data['course_name'], $post_data['description']));
    }

    public function show_course($course_id)
    {
        return $this->db->query("SELECT * FROM courses WHERE id = {$course_id}")->row_array();
    }

    public function delete_course($course_id)
    {
        $this->db->query("DELETE FROM courses WHERE id = $course_id");
    }
}
