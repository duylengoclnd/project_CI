<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends My_Controller {
    private $auth;

    public function __construct(){
        parent:: __construct();
        $this->auth = $this->my_auth->check();
        // print_r($this->auth);
    }

    public function infor()
    {

        $user = $this->db->where(array('username' => $this->auth['username']))->from('itq_user')->get()->row_array();
        $_post = $user;
        $data['data']['auth'] = $this->auth;
        $this->load->library('form_validation');
        $data['seo']['title'] = 'Thay doi thong tin tai khoan';
        if ($this->input->post('change')) {
            $_post = $this->input->post('data');
            $data['data']['_post'] = $_post;
            $this->form_validation->set_error_delimiters('<li>', '</li>');
            $this->form_validation->set_rules('data[email]', 'Email', 'required|valid_email|callback__email');
            if ($this->form_validation->run() == TRUE) {
                $_post = $this->my_string->allow_post($_post,array('fullname','email','password'));
                $_post['updated'] = gmdate('Y-m-d H:i:s',time() + 7*3600);
                $this->db->where(array('username' =>  $user['username']))->update('itq_user',$_post);
                $this->my_string->js_redirect('Thay doi thong thanh cong!',ITQ_BASE_URL.'backend/auth/login');
            }
        }
        $data['data']['_post'] = $_post;
        $data['template'] = 'backend\account\infor';
        $this->load->view('backend\layout\home',isset($data) ? $data : NULL);
    }

    public function change_password()
    {

        $user = $this->db->where(array('username' => $this->auth['username']))->from('itq_user')->get()->row_array();
        $_post = $user;
        $data['data']['auth'] = $this->auth;
        $this->load->library('form_validation');
        $data['seo']['title'] = 'Thay đổi password!';
        if ($this->input->post('change_password')) {
            $_post = $this->input->post('data');
            $data['data']['_post'] = $_post;
            $this->form_validation->set_error_delimiters('<li>', '</li>');
            $this->form_validation->set_rules('data[old_password]', 'Password', 'trim|required|min_length[6]|callback__password');
            $this->form_validation->set_rules('data[new_password]', 'Password', 'trim|required|min_length[6]');
            $this->form_validation->set_rules('data[confirm_password]', 'Password', 'trim|required|min_length[6]|matches[data[new_password]]');
            if ($this->form_validation->run() == TRUE) {
                $temp = $_post;
                $_post['password'] = $temp['new_password'];
                $_post = $this->my_string->allow_post($_post,array('password'));
                $_post['updated'] = gmdate('Y-m-d H:i:s',time() + 7*3600);
                // print_r($_post);die;
                $this->db->where(array('username' =>  $user['username']))->update('itq_user',$_post);
                $this->my_string->js_redirect('Thay đổi password thành công!',ITQ_BASE_URL.'backend/auth/login');
            }
        }
        $data['data']['_post'] = $_post;
        $data['template'] = 'backend\account\change_password';
        $this->load->view('backend\layout\home',isset($data) ? $data : NULL);
    }

    public function _email($email){
        $_count = $this->db->where(array('email' => $email,'email !=' => $this->auth['email']))->from('itq_user')->get()->row_array();
        if ($_count > 0) {
             $this->form_validation->set_message('_email','Email '.$email.' đã tồn tại!Please enter again.');
             return FALSE;
        }
        return TRUE;
    }

    public function _password($password = NULL){
        $count = $this->db->where(array('id' => $this->auth['id'],'password' => $password))->from('itq_user')->get()->row_array();
        if ($count['password'] != $password) {
            $this->form_validation->set_message('_password','Password cũ không đúng!');
            return FALSE;
        }
        return TRUE;
    }
}
