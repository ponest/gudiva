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
        if ($this->input->post('name') && $this->input->post('description') && $this->input->post('subject'))
        {
            $data['name'] =  $this->input->post('name');
            $data['subject'] = $this->input->post('subject');
            $data['level'] = $this->input->post('subject');
            $data['description'] = $this->input->post('description');
            $data['image'] = $this->input->post('subject');
            $this->topic->insert($data);

            redirect('/admin/topics', 'refresh');
        }

        $data['page'] = $this->config->item('gudiva_template_dir_admin')."topics_create";
        $this->load->view($this->_container, $data);
    }

    public function edit($id)
    {
        if ($this->input->post('name') && $this->input->post('description') && $this->input->post('subject'))
        {
            $data['name'] =  $this->input->post('name');
            $data['description'] = $this->input->post('description');
            $data['subject'] = $this->input->post('subject');
            $this->topic->update($data, $id);

            redirect('/admin/topics', 'refresh');
        }

        $topic = $this->topic->get($id);

        $data['topic'] = $topic;
        $data['page'] = $this->config->item('gudiva_template_dir_admin')."topics_edit";
        $this->load->view($this->_container, $data);
    }

    public function delete($id){
        $this->topic->delete($id);

        redirect('/admin/topics', 'refresh');
    }
}