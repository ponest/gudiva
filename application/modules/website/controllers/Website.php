<?php
/**
 * Created by PhpStorm.
 * User: moses
 * Date: 8/28/17
 * Time: 8:22 AM
 */
class Website extends MY_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model(array('topic', 'pastpaper', 'question'));
        $this->load->helper(array('url', 'text'));
    }

    public function index(){
        $data['title'] = "GUDIVA|Home";
        $data['page'] = $this->config->item('gudiva_template_dir_public')."index";
        $data['module'] = 'website';
        $this->load->view($this->_container, $data);
    }

    public function O_level_topics()
    {
        $level = "0";
        $topics = $this->topic->get_all($fields='', $where = array('level' => $level));
        $data['topics'] = $topics;
        $data['title'] = "GUDIVA|O'Level Topics";
        $data['page'] = $this->config->item('gudiva_template_dir_public')."O_level";
        $data['module'] = 'website';
        $this->load->view($this->_container, $data);
    }

    public function A_level_topics()
    {
        $level = "1";
        $topics = $this->topic->get_all($fields='', $where = array('level' => $level));
        $data['topics'] = $topics;
        $data['title'] = "GUDIVA|A'Level Topics";
        $data['page'] = $this->config->item('gudiva_template_dir_public')."A_level";
        $data['module'] = 'website';
        $this->load->view($this->_container, $data);
    }

    public function get_topic_questions($topic_id){
        $questions = $this->question->get_all($fields='', $where = array('topic' => $topic_id));
        $topic = $this->topic->get($topic_id);
        $data['questions'] = $questions;
        $data['topic'] = $topic;
        $data['title'] = "GUDIVA|A'Level Topics";
        $data['page'] = $this->config->item('gudiva_template_dir_public')."topic_view";
        $data['module'] = 'website';
        $this->load->view($this->_container, $data);
    }

    public function O_level_past_papers()
    {
        $level = "0";
        $pastpapers = $this->pastpaper->get_all($fields='', $where = array('level' => $level));
        $data['pastpapers'] = $pastpapers;
        $data['title'] = "GUDIVA|O'Level Papers";
        $data['page'] = $this->config->item('gudiva_template_dir_public')."O_level_past_papers";
        $data['module'] = 'website';
        $this->load->view($this->_container, $data);
    }

    public function A_level_past_papers()
    {
        $level = "1";
        $pastpapers = $this->pastpaper->get_all($fields='', $where = array('level' => $level));
        $data['pastpapers'] = $pastpapers;
        $data['title'] = "GUDIVA|A'Level Papers";
        $data['page'] = $this->config->item('gudiva_template_dir_public')."A_level_past_papers";
        $data['module'] = 'website';
        $this->load->view($this->_container, $data);
    }
}