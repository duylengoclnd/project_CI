<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends My_Controller {
    private $auth;

    public function __construct(){
        parent:: __construct();
        $this->auth = $this->my_auth->check();
        // print_r($this->auth);
    }

    public function index(){

        $data['data']['auth'] = $this->auth;
        $data['template'] = 'backend\home\index';
        $this->load->view('backend\layout\home',isset($data) ? $data : NULL);

    }
}