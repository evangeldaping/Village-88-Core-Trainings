<?php
class Note extends CI_Controller
{

    public function index()
    {
        $this->load->model('notes_model');
        $notes = $this->notes_model->get_all_note();
        $this->load->view('note', array('notes' => $notes));
    }

    public function create()
    {
        $this->load->model('notes_model');

        if (strlen($this->input->post('title')) > 0)
            $this->notes_model->create_note($this->input->post());

        $notes = $this->notes_model->get_all_note();
        $this->load->view('note_partial', array('notes' => $notes));
    }

    public function update($id)
    {
        // $this->output->enable_profiler(TRUE);
        $this->load->model('notes_model');
        $this->notes_model->update_note($id, $this->input->post());

        $notes = $this->notes_model->get_all_note();
        $this->load->view('note_partial', array('notes' => $notes));
    }

    public function remove($id)
    {
        $this->load->model('notes_model');
        $this->notes_model->remove_note($id);

        $notes = $this->notes_model->get_all_note();
        $this->load->view('note_partial', array('notes' => $notes));
    }
}
