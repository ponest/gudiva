<?php
/**
 * Created by PhpStorm.
 * User: KILENGA
 * Date: 4/6/2017
 * Time: 12:39 PM
 */
class Education_tips extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('string');
        $this->load->library('form_validation');
    }
    public function add_tips($type){
        if ($type == "add_tips"){
            $this->load->view('admin/add_education_tips');
        }
    }
}