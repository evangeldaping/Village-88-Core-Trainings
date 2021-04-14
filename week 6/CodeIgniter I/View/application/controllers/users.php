<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function index()
    {
        $this->load->view("users/index");
    }

    public function new()
    {
        $this->load->view("users/new");
    }

    public function create()
    {
        echo "This feature is coming soon!";
    }

    public function count()
    {
        $temp = $this->session->userdata('count');
        $temp += 1;
        $this->session->set_userdata('count', $temp);
        $result['count'] = $this->session->userdata('count');
        $this->load->view('users/count', $result);
    }

    public function reset()
    {
        $this->session->sess_destroy();
        redirect(base_url() . 'users/count');
    }

    public function say($id1, $id2)
    {
        $result['number'] = $id2;
        if (is_numeric($id2)) {
            $result['string'] = $id1;
            $this->load->view('users/say', $result);
        } else {
            $result['number'] = "Sorry.  This url does not meet our requirement.";
            $this->load->view('users/say', $result);
        }
    }

    public function mprep()
    {
        $view_data = array(
            'name' => "Michael Choi",
            'age'  => 40,
            'location' => "Seattle, WA",
            'hobbies' => array("Basketball", "Soccer", "Coding", "Teaching", "Kdramas")
        );
        $this->load->view('users/mprep', $view_data);
    }
}

//end of main controller