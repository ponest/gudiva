<?php
/**
 * Created by PhpStorm.
 * User: KILENGA
 * Date: 3/29/2017
 * Time: 3:29 PM
 */
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        //Load libraries
        $this->load->helper('form');
        $this->load->helper('string');
        $this->load->library('Form_validation');
        $this->load->library('session');
    }
    public function load_pages($type){
        if ($type == "dashboard"){
            $this->load->view("student/home_view");
        } elseif ($type == "o_level"){
            $this->load->view("student/O_level_topics");
        }elseif ($type == "a_level"){
            $this->load->view("student/A_level_topics");
        }elseif ($type == "my_topics"){
            $this->load->view("student/mytopics");
        }elseif ($type == "tips"){
            $this->load->view("student/educational_tips");
        }elseif ($type == "olevel_pp"){
            $this->load->view("student/O_level_past_papers");
        }elseif ($type == "alevel_pp"){
            $this->load->view("student/A_level_past_papers");
        }elseif ($type == "olevel_qn"){
            $this->load->view("student/O_level_questions");
        }elseif ($type == "alevel_qn"){
            $this->load->view("student/A_level_questions");
        }elseif ($type == "chat"){
            $this->load->view("student/chat_room");
        }elseif ($type == "topic_view"){
            $this->load->view("student/topics_view");
        }

    }
    public function topic_content(){
        $this->load->view("student/topic_header");
        $this->load->view("student/topics_view");
    }
}