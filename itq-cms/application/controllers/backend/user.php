<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends My_Controller {
    private $auth;

    public function __construct(){
        parent:: __construct();
        $this->auth = $this->my_auth->check();
        // print_r($this->auth);
    }

    public function group()
    {
        $this->load->library('pagination');
        $data['seo']['title'] = 'Nhom thanh vien';
        $config['base_url'] = "backend/user/group";
        $config['total_rows'] = $this->db->from('itq_user_group')->count_all_results();
        $config['uri_segment'] = 2;
        $this->pagination->initialize($config);
        $data['data']['pagination'] = $this->pagination->create_links();
        $data['data']['_list'] = $this->db->from('itq_user_group')->get()->result_array();
        $data['data']['auth'] = $this->auth;
        $data['template'] = 'backend\user\group';
        $this->load->view('backend\layout\home',isset($data) ? $data : NULL);
    }

    public function addgroup()
    {

        $data['seo']['title'] = 'Tao nhom thanh vien';
        if ($this->input->post('add')) {
            $_post = $this->input->post('data');
            $data['data']['_post'] = $_post;
            $this->form_validation->set_error_delimiters('<li>', '</li>');
            $this->form_validation->set_rules('data[title]', 'Title', 'trim|required');
            if ($this->form_validation->run() == TRUE) {
                $_post = $this->my_string->allow_post($_post,array('title','group','allow'));
                $_post['created'] = gmdate('Y-m-d H:i:s',time() + 7*3600);
                $this->db->insert('itq_user_group',$_post);
                $this->my_string->js_redirect('Tao nhom thanh vien thanh cong!',ITQ_BASE_URL.'backend/user/group');
            }
        }

        $data['data']['auth'] = $this->auth;
        $data['template'] = 'backend\user\addgroup';
        $this->load->view('backend\layout\home',isset($data) ? $data : NULL);
    }
}
