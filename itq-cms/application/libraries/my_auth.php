<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_auth {

    private $CI;
    public function __construct(){
        $this->CI =& get_instance();
    }
    public function check(){
        $_user = $this->CI->db->select('id,username,password,email')->from('itq_user')->get()->row_array();
        return array(
            'id' => $_user['id'],
            'username' => $_user['username'],
            'password' => $_user['password'],
            'email' => $_user['email'],
        );
        return NULL;
    }


}
