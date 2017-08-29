<?php
/**
 * Created by PhpStorm.
 * User: moses
 * Date: 7/28/17
 * Time: 12:16 PM
 */

class Questions extends Admin_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('admin/question', 'admin/topic'));
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session'));
    }

    public function questions_list()
    {
        $questions = $this->question->get_all();
        $topics = $this->topic->get_all();
        $data['questions'] = $questions;
        $data['topics'] = $topics;
        $data['page'] = $this->config->item('gudiva_template_dir_admin')."questions";
        $data['module'] = 'admin';

        $this->load->view($this->_container, $data);
    }

    public function create()
    {
        if ($this->input->post('question') && $this->input->post('answer') && $this->input->post('question'))
        {

            $data['question'] =  $this->input->post('question');
            $data['answer'] = $this->input->post('answer');
            $data['topic'] = $this->input->post('topic');

            if($this->question->insert($data)){
                $this->session->set_flashdata('success_msg', 'Question added successfully');
                redirect('admin/questions', reflesh);
            }
        }
    }

    public function view($id)
    {
        $questions = $this->question->get($id);
        $topic = $this->topic->get_all();
        $data['questions'] = $questions;
        $data['topic'] = $topic;
        $data['page'] = $this->config->item('gudiva_template_dir_admin')."question_view";
        $data['module'] = 'admin';
        $this->load->view($this->_container, $data);
    }

    public function edit($id)
    {
        $question = $this->question->get($id);
        $topic = $this->topic->get_all();

        $data['question'] = $question;
        $data['topics'] = $topic;
        $data['page'] = $this->config->item('gudiva_template_dir_admin')."question_edit";
        $data['module'] = 'admin';
        $this->load->view($this->_container, $data);
    }

    public function update($id)
    {
        if ($this->input->post('question') OR $this->input->post('answer') OR $this->input->post('topic'))
        {
            $data['question'] =  $this->input->post('question');
            $data['answer'] = $this->input->post('answer');
            $data['topic'] = $this->input->post('topic');
            if ($this->question->update($data, $id))
            {
                $this->session->set_flashdata('success_msg', 'Question updated successfully');
                redirect('admin/questions/', 'refresh');
            }
        }
    }

    public function delete($id)
    {
        if ($this->question->delete($id))
        {
            $this->session->set_flashdata('success_msg', 'Question deleted successfully');
            redirect('admin/questions/', 'refresh');
        }
    }
}