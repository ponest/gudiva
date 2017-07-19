<?php
/**
 * Created by PhpStorm.
 * User: KILENGA
 * Date: 3/31/2017
 * Time: 8:36 AM
 */
Class Admin extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('string');
        $this->load->library('Form_validation');
        $this->load->library('session');
        $this->load->model('topics_model');
    }
    public function dashboard_home()
    {
        $this->load->view("admin/header");
        $this->load->view("admin/home_view");
        $this->load->view("admin/footer");
    }
    public function o_level_topics()
    {
        $level = 1;
        $data['topic'] = $this->topics_model->read_all_topics($level);
        $this->load->view("admin/header");
        $this->load->view("admin/O_level_topics", $data);
        $this->load->view("admin/footer");
    }
    public function a_level_topics()
    {
        $level = 1;
        $data['topic'] = $this->topics_model->read_all_topics($level);
        $this->load->view("admin/header");
        $this->load->view("admin/a_level_topics",$data);
        $this->load->view("admin/footer");
    }
    public function o_level_past_papers(){
        $this->load->view("admin/header");
        $this->load->view("admin/O_level_past_papers");
        $this->load->view("admin/footer");
    }
    public function a_level_past_papers(){
        $this->load->view("admin/header");
        $this->load->view("admin/A_level_past_papers");
        $this->load->view("admin/footer");
    }
    public function a_level_questions(){
        $this->load->view("admin/header");
        $this->load->view("admin/A_level_questions");
        $this->load->view("admin/footer");
    }
    public function o_level_questions(){
        $this->load->view("admin/header");
        $this->load->view("admin/O_level_questions");
        $this->load->view("admin/footer");
    }
    public function educational_tips(){
        $this->load->view("admin/header");
        $this->load->view("admin/educational_tips");
        $this->load->view("admin/footer");
    }
}