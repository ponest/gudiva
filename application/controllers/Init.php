<?php
/**
 * Created by PhpStorm.
 * User: kilenga
 * Date: 7/18/17
 * Time: 8:34 PM
 */
Class Init extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $this->load->view('index');
    }
    public function olevel_page(){
        $this->load->view('student/header');
        $this->load->view('student/O_level');
        $this->load->view('student/footer');
    }
    public function alevel_page(){
        $this->load->view('student/header');
        $this->load->view('student/A_level');
        $this->load->view('student/footer');
    }
    public function olevel_topics(){
        $this->load->view('student/header');
        $this->load->view('student/O_level_topics');
        $this->load->view('student/footer');
    }
    public function alevel_topics(){
        $this->load->view('student/header');
        $this->load->view('student/A_level_topics');
    }
    public function start_topic(){
        $this->load->view('student/header');
        $this->load->view('student/topics_view');
    }
    public function olevel_pp(){
        $this->load->view('student/header');
        $this->load->view('student/O_level_past_papers');
        $this->load->view('student/footer');
    }
    public function alevel_pp(){
        $this->load->view('student/header');
        $this->load->view('student/A_level_past_papers');
        $this->load->view('student/footer');
    }
    public function dashboard(){
        $this->load->view('admin/header');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/footer');
    }
    public function topics(){
        $this->load->view('admin/header');
        $this->load->view('admin/topics');
        $this->load->view('admin/footer');
    }
     public function questions(){
        $this->load->view('admin/header');
        $this->load->view('admin/questions');
        $this->load->view('admin/footer');
    }
     public function tips(){
        $this->load->view('admin/header');
        $this->load->view('admin/tips');
        $this->load->view('admin/footer');
    }
     public function past_papers(){
            $this->load->view('admin/header');
            $this->load->view('admin/past_papers');
            $this->load->view('admin/footer');
     }
     public function login_admin(){
         $this->load->view('student/header');
         $this->load->view('admin/login_admin');
         $this->load->view('public/footer');
     }
     public function qn(){
         $this->load->view('test');
     }

}