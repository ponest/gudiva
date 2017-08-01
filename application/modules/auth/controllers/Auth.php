<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

    function __construct(){

        parent::__construct();
        $this->load->database();
        $this->load->library(array('ion_auth', 'form_validation', 'session'));
        $this->load->helper(array('url', 'language'));

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
    }

    public function index(){

        if($this->ion_auth->logged_in()){
            redirect('admin/dashboard', 'refresh');
        } else {
            $data['page'] = $this->config->item('gudiva_template_dir_public') . "login";
            $data['module'] = '';

            $this->load->view($this->_container, $data);
        }
	}

	public function login(){
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() == true){

            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $remember = (bool) $this->input->post('remember');

            if($this->ion_auth->login($username, $password, $remember)){
                $this->session->set_flashdata('message', $this->ion_auth->messages());
                redirect('admin/dashboard', 'refresh');
            } else {
                $this->session->set_flashdata('message','Incorrect username or password entered. Please try again.');
                redirect('auth/', 'refresh');
            }
        } else {
            $this->session->set_flashdata('message', $this->ion_auth->errors());
            (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

            $data['page'] = $this->config->item('gudiva_template_dir_public'). "login";
            $data['module'] = '';

            $this->load->view($this->_container, $data);
        }
    }

    public function logout(){
	    $this->ion_auth->logout();
	    redirect('auth/', 'refresh');
    }

//    public function signup(){
//        $data['page'] = $this->config->item('gudiva_template_dir_public'). "registration";
//        $data['module'] = '';
//
//        $this->load->view($this->_container, $data);
//    }
//
//    public function register(){
//        if ($this->ion_auth->logged_in() || $this->ion_auth->is_admin())
//        {
//            redirect('auth', 'refresh');
//        }
//        $this->form_validation->set_rules('first_name', 'First Name', 'required', 'trim');
//        $this->form_validation->set_rules('last_name', 'Last Name', 'required', 'trim');
//        $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email|is_unique[' . $tables['users'] . '.email]');
//        $this->form_validation->set_rules('phone_number', 'Phone Number', 'required', 'trim');
//        $this->form_validation->set_rules('username', 'Username', 'required');
//        $this->form_validation->set_rules('password', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
//        $this->form_validation->set_rules('password_confirm', 'required');
//    }
}
