<?php
/**
 * Created by PhpStorm.
 * User: KILENGA
 * Date: 4/6/2017
 * Time: 10:04 AM
 */
class Questions extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('string');
        $this->load->library('form_validation');
    }
    public function add_qn_form($type){
        if ($type == "o_level"){
            $this->load->view('admin/add_questions_olevel');
        }elseif ($type == "a_level"){
            $this->load->view('admin/add_questions_alevel');

        }
    }
}