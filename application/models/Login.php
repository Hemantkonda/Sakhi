<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Model {

    public function checklogin($user, $password)
    {
       $result =  $this->db->query('SELECT * FROM `adminlogin` WHERE username="'.$user.'" AND password="'.$password.'"');
       return $result->row();
    }



}