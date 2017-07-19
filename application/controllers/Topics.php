<?php

/**
 * Created by PhpStorm.
 * User: Moses Zengo
 * Date: 4/4/2017
 * Time: 9:12 AM
 */
class Topics extends CI_Controller{

    public function __construct(){

        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('string');
        $this->load->library('form_validation');
        $this->load->model('topics_model');
    }

    public function add_topic_form($type){
        if ($type == "a_level"){
            $this->load->view("admin/add_topic_alevel");
        }
        elseif ($type == "o_level"){
            $this->load->view("admin/add_topic_olevel");
        }
    }

    public function view_all_topics($level){

        $data['topic'] = $this->topics_model->read_all_topics($level);
        if($level == 1){
            $this->load->view("admin/header");
            $this->load->view("admin/a_level_topics", $data);
            $this->load->view("admin/footer");
        }elseif ($level == 2)
        $this->load->view("admin/header");
        $this->load->view("admin/o_level_topics", $data);
        $this->load->view("admin/footer");
    }

    public function delete_topic(){
        $topic = $this->uri->segment(2);
        $request = $this->topics_model->delete($topic);
        if($request == true){
            echo "Item deleted successfully ". $topic;
        }else{
            echo "could not delete the topic";
        }
    }
}