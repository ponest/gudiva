<?php

/**
 * Created by PhpStorm.
 * User: Moses Zengo
 * Date: 4/4/2017
 * Time: 9:18 AM
 */
class Topics_model extends CI_Model{

    public function read_all_topics($level){
        $this->db->from('topic');
        $this->db->where('class', $level);

        return $this->db->get()->result();
    }

    public function delete($topic_id){
      if($this->db->delete('topic', array('id' => $topic_id))){
          return true;
      }else{
          return false;
      }
    }
}