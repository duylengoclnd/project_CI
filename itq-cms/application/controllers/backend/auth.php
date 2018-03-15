<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function login()
    {
        $this->load->library('form_validation');
        $data['seo']['title'] = 'Dang nhap vao he thong';
        if ($this->input->post('login')) {
            $_post = $this->input->post('data');
            $data['data']['_post'] = $_post;
            $this->form_validation->set_error_delimiters('<li>', '</li>');
            $this->form_validation->set_rules('data[username]', 'Username', 'trim|required|min_length[5]|max_length[6]');
            $this->form_validation->set_rules('data[password]', 'Password', 'trim|required|min_length[6]');
            if ($this->form_validation->run() == TRUE) {
                $_count = $this->db->select('username,password')->where(array('username' => $_post['username'],'password' => $_post['password']))->from('itq_user')->get()->row_array();
                $this->my_string->js_redirect('Đăng nhập thành công!',ITQ_BASE_URL.'backend/home');
            }
        }
        $data['seo']['keyword'] = '';
        $data['seo']['description'] = '';
        $data['template'] = 'backend\auth\login';
        $this->load->view('backend\layout\login',isset($data) ? $data : NULL);
    }

    public function logout()
    {

        $this->my_string->js_redirect('Đăng xuất thành công!',ITQ_BASE_URL.'backend/auth/login');
    }

    public function create_manage()
    {
        $this->load->library('form_validation');
        $this->load->library('my_string');
        $_count = $this->db->from('itq_user')->count_all_results();
        if($_count >0) $this->my_string->php_redirect(ITQ_BASE_URL.'backend/auth/login');
        $data['seo']['title'] = 'Tao tai khoan quan tri';
        if ($this->input->post('create')) {
            $_post = $this->input->post('data');
            $data['data']['_post'] = $_post;
            $this->form_validation->set_error_delimiters('<li>', '</li>');
            $this->form_validation->set_rules('data[username]', 'Username', 'trim|required|min_length[5]|max_length[6]');
            $this->form_validation->set_rules('data[password]', 'Password', 'trim|required|min_length[6]');
            $this->form_validation->set_rules('data[email]', 'Email', 'required|valid_email');
            if ($this->form_validation->run() == TRUE) {
                $_post = $this->my_string->allow_post($_post,array('username','password','email'));
                $_post['created'] = gmdate('Y-m-d H:i:s',time() + 7*3600);
                $this->db->insert('itq_user',$_post);
                $this->my_string->js_redirect('Tao tai khoan thanh cong!',ITQ_BASE_URL.'backend/auth/login');
            }
        }
        $data['seo']['keyword'] = '';
        $data['seo']['description'] = '';
        $data['template'] = 'backend\auth\create_manage';
        $this->load->view('backend\layout\login',isset($data) ? $data : NULL);
    }
    public function forgot()
    {
        $this->load->library('form_validation');
        $this->load->library('my_string');
        if ($this->input->post('forgot')) {
            $_post = $this->input->post('data');
            $data['data']['_post'] = $_post;
            $this->form_validation->set_error_delimiters('<li>', '</li>');
            $this->form_validation->set_rules('data[email]', 'Email', 'required|valid_email|callback__email');
            if ($this->form_validation->run() == TRUE) {
                $_post = $this->my_string->allow_post($_post,array('email'));

            }
        }
        $data['seo']['title'] = 'Quên thông tin tài khoản';
        $data['seo']['keyword'] = '';
        $data['seo']['description'] = '';
        $data['template'] = 'backend\auth\forgot';
        $this->load->view('backend\layout\login',isset($data) ? $data : NULL);
    }

    public function _email($email){
        $_count = $this->db->from('itq_user')->where(array('email' => $email))->count_all_results();
        if ($_count == 0) {
             $this->form_validation->set_message('_email','%s không tồn tại');
             return FALSE;
        }
        return TRUE;
    }
}
