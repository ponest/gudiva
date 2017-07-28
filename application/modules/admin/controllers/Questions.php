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
        $this->load->model(array('admin/question'));
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session'));
    }

    public function questions_list()
    {
        $data['questions'] = '';
        $data['page'] = $this->config->item('gudiva_template_dir_admin')."questions";

        $this->load->view($this->_container, $data);
    }
}