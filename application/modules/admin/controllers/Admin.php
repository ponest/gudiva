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

        if(!$this->ion_auth->logged_in()){
            redirect('/auth/', 'refresh');
        }
    }

    public function index(){
        $data['page'] = $this->config->item('gudiva_template_dir_admin')."dashboard";
        $data['module'] = 'admin';
        $this->load->view($this->_container, $data);
    }
}