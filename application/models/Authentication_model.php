<?php
/**
 * Created by PhpStorm.
 * User: KILENGA
 * Date: 3/13/2017
 * Time: 8:25 PM
 */
class Authentication_model extends CI_Model{

    //Insert registration data in database
    public function registration_insert($data){

        //Query to check if user exists
        $condition = "username =" . "'" .$data['username']. "'";
        $query = $this->db->query("SELECT * FROM student WHERE $condition LIMIT 1");

        if($query->num_rows() == 0){

            //Query to insert data in database
            $this->db->insert('student', $data);
            if($this->db->affected_rows() > 0){
                return true;
            }
        }else {
            return false;
        }
    }

    public function student_login($data){

        $condition = "username =" . "'" .$data['username']. "' AND " . "password =" . "'" .$data['password']. "'";
        $query = $this->db->query("SELECT * FROM student WHERE $condition LIMIT 1");

        if($query->num_rows() == 1){
            return true;
        }else {
            return false;
        }
    }


}
