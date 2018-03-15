<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends My_Controller {
    public function __construct(){
        parent:: __construct();
    }

    public function index(){
        echo 'HELLO D2 <a href="'.ITQ_BASE_URL.'backend\auth\logout">ĐĂNG XUẤT</a>';

    }
}