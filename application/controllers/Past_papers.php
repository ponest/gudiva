<?php
/**
 * Created by PhpStorm.
 * User: KILENGA
 * Date: 4/5/2017
 * Time: 11:20 PM
 */
class Past_papers extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('string');
        $this->load->library('form_validation');
    }
    public function add_pp_form($type)
    {
        if ($type == "a_level"){
            $this->load->view("admin/add_pp_alevel");
        }if ($type == "o_level")
        {
            $this->load->view("admin/add_pp_olevel");
        }
    }




}