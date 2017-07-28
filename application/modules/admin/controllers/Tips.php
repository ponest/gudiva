<?php
/**
 * Created by PhpStorm.
 * User: moses
 * Date: 7/28/17
 * Time: 12:16 PM
 */

class Tips extends Admin_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('admin/tip'));
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session'));
    }

    public function tips_list()
    {
        $tips = $this->tip->get_all();
        $data['tips'] = '';
        $data['page'] = $this->config->item('gudiva_template_dir_admin')."tips";

        $this->load->view($this->_container, $data);
    }

    public function create()
    {
        if ($this->input->post('tip'))
        {
            $data['tip'] =  $this->input->post('tip');

            if($this->tip->insert($data)){
                $this->session->set_flashdata('success_msg', 'Tip added successfully');
                redirect('admin/tips', reflesh);
            }
        }
    }

    public function view($id)
    {
        $tip = $this->tip->get($id);
        $data['tip'] = $tip;
        $data['page'] = $this->config->item('gudiva_template_dir_admin')."tip_view";
        $this->load->view($this->_container, $data);
    }

    public function edit($id)
    {
        $tip = $this->tip->get($id);

        $data['tip'] = $tip;
        $data['page'] = $this->config->item('gudiva_template_dir_admin')."tip_edit";
        $this->load->view($this->_container, $data);
    }

    public function update($id)
    {
        if ($this->input->post('tip'))
        {
            $data['tip'] =  $this->input->post('tip');
            if ($this->tip->update($data, $id))
            {
                $this->session->set_flashdata('success_msg', 'Tip updated successfully');
                redirect('admin/tips/', 'refresh');
            }
        }
    }

    public function delete($id)
    {
        if ($this->tip->delete($id))
        {
            $this->session->set_flashdata('success_msg', 'Tip deleted successfully');
            redirect('admin/tips/', 'refresh');
        }
    }
}