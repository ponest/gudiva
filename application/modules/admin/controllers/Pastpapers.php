<?php
/**
 * Created by PhpStorm.
 * User: moses
 * Date: 7/28/17
 * Time: 12:16 PM
 */

class Pastpapers extends Admin_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('admin/pastpaper'));
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
    }

    public function pastpapers_list()
    {
        $pastpapers = $this->pastpaper->get_all();
        $data['pastpapers'] = $pastpapers;
        $data['page'] = $this->config->item('gudiva_template_dir_admin')."past_papers";

        $this->load->view($this->_container, $data);
    }

    public function create()
    {
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_rules('year', 'Year', 'required');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        $this->form_validation->set_rules('level', 'Level', 'required');

        if($this->form_validation->run() == TRUE)
        {

            $config1['upload_path'] = './assets/uploads/pastpapers/questions';
            $config1['allowed_types'] = 'pdf';
            $config1['max_width'] = 0;
            $config1['max_size'] = 0;
            $config1['max_height'] = 0;

            $this->load->library('upload', $config1);
            if($this->upload->do_upload('questions'))
            {
                $data['questions'] = $this->upload->data('file_name');
            }

            $config2['upload_path'] = './assets/uploads/pastpapers/answers';
            $config2['allowed_types'] = 'pdf';
            $config2['max_width'] = 0;
            $config2['max_size'] = 0;
            $config2['max_height'] = 0;

            $this->upload->initialize($config2);
            if($this->upload->do_upload('answers'))
            {
                $data['answers'] = $this->upload->data('file_name');
            }
            $data['year'] =  $this->input->post('year');
            $data['subject'] = $this->input->post('subject');
            $data['level'] = $this->input->post('level');

            if($this->pastpaper->insert($data)){
                $this->session->set_flashdata('success_msg', 'Pastpaper added successfully');
                redirect('admin/pastpapers', reflesh);
            }

        }
    }

    public function view($id)
    {
        $pastpaper = $this->pastpaper->get($id);
        $data['pastpaper'] = $pastpaper;
        $data['page'] = $this->config->item('gudiva_template_dir_admin')."pastpaper_view";
        $this->load->view($this->_container, $data);
    }

    public function edit($id)
    {
        $pastpaper = $this->pastpaper->get($id);

        $data['pastpaper'] = $pastpaper;
        $data['page'] = $this->config->item('gudiva_template_dir_admin')."pastpaper_edit";
        $this->load->view($this->_container, $data);
    }

    public function update($id)
    {
        if ($this->input->post('pastpaper') OR $this->input->post('answer') OR $this->input->post('topic'))
        {
            $data['name'] =  $this->input->post('name');
            $data['year'] = $this->input->post('year');
            $data['subject'] = $this->input->post('subject');
            $data['type'] = $this->input->post('type');
            if ($this->pastpaper->update($data, $id))
            {
                $this->session->set_flashdata('success_msg', 'Past paper updated successfully');
                redirect('admin/pastpapers/', 'refresh');
            }
        }
    }

    public function delete($id)
    {
        if ($this->pastpaper->delete($id))
        {
            $this->session->set_flashdata('success_msg', 'pastpaper deleted successfully');
            redirect('admin/pastpapers/', 'refresh');
        }
    }
}