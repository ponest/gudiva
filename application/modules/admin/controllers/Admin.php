<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: moses
 * Date: 7/21/17
 * Time: 1:11 AM
 */

class Admin extends Admin_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->library(array('ion_auth', 'session', 'form_validation'));
        $this->load->helper(array('url'));
    }

    public function index(){
       $this->load->view('admin/login_admin');
    }

    public function dashboard(){
        $data['page'] = $this->config->item('gudiva_template_dir_admin')."dashboard";
        $data['module'] = '';
        $this->load->view($this->_container, $data);
    }
}