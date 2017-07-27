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
        $this->load->model(array('admin/topic'));
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session'));
    }

    public function topics_list()
    {
        $topics = $this->topic->get_all();

        $data['topics'] = $topics;
        $data['page'] = $this->config->item('gudiva_template_dir_admin')."topics";

        $this->load->view($this->_container, $data);
        //var_dump($data);
    }

    public function create()
    {

//        $config['upload_path'] = './updloads/images/topics/';
//        $config['allowed_types'] = 'jpg';
//        $config['max_size'] = 0;
//        $config['max_width'] = 0;
//        $config['max_height'] = 0;
//
//        $this->load->library('upload', $config);

        if ($this->input->post('name') && $this->input->post('description') && $this->input->post('subject') && $this->input->post('level'))
        {

            $data['name'] =  $this->input->post('name');
            $data['subject'] = $this->input->post('subject');
            $data['level'] = $this->input->post('level');
            $data['description'] = $this->input->post('description');
            $data['image'] = '';
            if($this->topic->insert($data)){
                $this->session->set_flashdata('success_msg', 'Topic added successfully');
                redirect('admin/topics', reflesh);
            }
        }

//        $data['page'] = $this->config->item('gudiva_template_dir_admin')."topics";
//        $this->load->view($this->_container, $data);
            var_dump($data);
    }


    public function edit($id)
    {
        $topic = $this->topic->get($id);

        $data['topic'] = $topic;
        $data['page'] = $this->config->item('gudiva_template_dir_admin')."topic_edit";
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

    public function delete($id){
        $this->topic->delete($id);
        $this->session->set_flashdata('success_msg', 'Topic deleted successfully');

        echo json_encode(array("status" => TRUE));
    }
}