<?php
/**
 * Created by PhpStorm.
 * User: moses
 * Date: 7/21/17
 * Time: 3:20 AM
 */

class Topics extends Admin_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('admin/topic', 'admin/question'));
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session','form_validation'));
    }

    public function topics_list()
    {
        $topics = $this->topic->get_all();

        $data['topics'] = $topics;
        $data['page'] = $this->config->item('gudiva_template_dir_admin')."topics";
        $data['module'] = 'admin';

        $this->load->view($this->_container, $data);
        //var_dump($data);
    }

    public function create()
    {
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_rules('name', 'Topic Title', 'required');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        $this->form_validation->set_rules('level', 'Level', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');

        if($this->form_validation->run() == TRUE)
        {

            $config['upload_path'] = './assets/uploads/images/topics';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_width'] = 0;
            $config['max_size'] = 0;
            $config['max_height'] = 0;

            $this->load->library('upload', $config);
            if($this->upload->do_upload('userfile'))
            {
                $data['name'] =  $this->input->post('name');
                $data['subject'] = $this->input->post('subject');
                $data['level'] = $this->input->post('level');
                $data['description'] = $this->input->post('description');
                $data['image'] = $this->upload->data('file_name');

                if($this->topic->insert($data)){
                    $this->session->set_flashdata('success_msg', 'Topic added successfully');
                    redirect('admin/topics', reflesh);
                }

            }

        }
    }

    public function view($id)
    {
        $topic = $this->topic->get($id);
        $questions = $this->question->get_all($fields='', $where = array('topic' => $id));
        $data['topic'] = $topic;
        $data['questions'] = $questions;
        $data['page'] = $this->config->item('gudiva_template_dir_admin')."topic_view";
        $data['module'] = 'admin';
        $this->load->view($this->_container, $data);
    }
    public function edit($id)
    {
        $topic = $this->topic->get($id);

        $data['topic'] = $topic;
        $data['page'] = $this->config->item('gudiva_template_dir_admin')."topic_edit";
        $data['module'] = 'admin';
        $this->load->view($this->_container, $data);
    }

    public function update($id)
    {
        if ($this->input->post('name') OR $this->input->post('description') OR $this->input->post('subject'))
        {
            $data['name'] =  $this->input->post('name');
            $data['description'] = $this->input->post('description');
            $data['subject'] = $this->input->post('subject');
            if ($this->topic->update($data, $id))
            {
                $this->session->set_flashdata('success_msg', 'Topic updated successfully');
                redirect('admin/topics/', 'refresh');
            }
        }
    }

    public function delete($id)
    {
        if ($this->topic->delete($id))
        {
            $this->session->set_flashdata('success_msg', 'Topic deleted successfully');
            redirect('admin/topics/', 'refresh');
        }
    }
}