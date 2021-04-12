<?php
class Courses extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Load the Course model on all pages
        $this->load->model('Course');
    }

    // Method to add courses
    public function add()
    {

        // Load the form_validation library
        $this->load->library('form_validation');
		
		$this->output->enable_profiler(TRUE);

        // Set form validation rules
        $this->form_validation->set_rules('course_name', '<strong><em>name</em></strong>', 'required|xss_clean|trim|min_length[5]|max_length[100]');

        $this->form_validation->set_rules('description', '<strong><em>description</em></strong>');

        // If validate errors appear show the
        // "add-course" and echo them out
        if($this->form_validation->run() == FALSE)
        {		
            $this->load->view('courses/add-course');
        }
        else
        {
            // Create success message session variable
            $this->session->set_userdata('message', '<p><strong>You have successfully added a new course into the database!</strong></p>');

            $this->Course->add_course($this->input->post());

            redirect(site_url());
        }
		
		// Assign the Course model, get_all_courses() method to a variable $courses
		$courses = $this->Course->get_all_courses();

		// Show page that lists courses AND
		// pass in $courses variable as an associative array
		$this->load->view('courses/list-courses.php', array('courses' => $courses));
			
    }

    public function show($course_id)
    {
		$this->output->enable_profiler(TRUE);
		
        $single_record = $this->Course->show_course($course_id);

        $this->load->view('courses/delete-course', array('single_record' => $single_record));
    }

    public function remove($course_id)
    {
		$this->output->enable_profiler(TRUE);
		
        // Create a delete record success message
        // session variable
        $this->session->set_userdata("delete_success", "<p><strong>You have successfully deleted record $course_id!</strong></p>");
		
		// Assign the Course model, delete_course() method to a variable $courses
        $courses = $this->Course->delete_course($course_id);

        redirect(site_url());
    }
}
?>