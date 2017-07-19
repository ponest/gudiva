<?php
/**
 * Created by PhpStorm.
 * User: Moses Zengo
 * Date: 3/17/2017
 * Time: 1:44 AM
 */

class Authentication extends CI_Controller {

    public function __construct(){
        parent::__construct();

        //Load libraries
        $this->load->helper('form');
        $this->load->helper('string');
        $this->load->library('form_validation');
        $this->load->model('authentication_model');
        $this->load->library('session');
    }

    public function index(){
        $this->load->view('index');
    }

    public function registration(){
        $this->load->view('registration_view');
    }

    public function home(){
        $this->load->view('home_view');
    }

    //Validate & Store Registration data id database
    public function new_student_registration(){

        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
        $this->form_validation->set_rules('school', 'School', 'trim|required');
        $this->form_validation->set_rules('level', 'Secondary Level', 'trim|required');
        $this->form_validation->set_rules('class', 'Class', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('email', 'E-mail', 'trim|required');
        $this->form_validation->set_rules('phone', 'Phone number', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('registration_view');
        }else{
            $id = "GDV". random_string('numeric',7);
            $data = array(
                'id' => $id,
                'firstname' => $this->input->post('firstname'),
                'lastname' => $this->input->post('lastname'),
                'gender' => $this->input->post('gender'),
                'school' => $this->input->post('school'),
                'level' => $this->input->post('level'),
                'class' => $this->input->post('class'),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'password' => $this->input->post('password')
            );
            $result = $this->authentication_model->registration_insert($data);
            if($result == TRUE){
                $data['message_display'] = 'Congs! You have successfully registered';
                $this->load->view('login_view', $data);
            }else{
                $data['message_display'] = 'Registration Failed';
                $this->load->view('login_view', $data);
            }
        }
    }

    //Check for student login process
    public  function student_login_process(){
        $this->form_validation->set_rules('username', 'Username','trim|required');
        $this->form_validation->set_rules('password', 'Password','trim|required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('login_view');
        }else{
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );
            $result = $this->authentication_model->student_login($data);
            if($result == TRUE){
                $this->load->view('student/header');
                $this->load->view('student/home_view');
                $this->load->view('student/footer');
            }else{
                $this->load->view('login_view');
            }
        }
    }
    public function admin(){
        $this->load->view("admin/Admin");
    }
    public function homepage(){
        $this->load->view('new_homepage');
    }

}