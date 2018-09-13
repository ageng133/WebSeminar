<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user');
        $this->load->library('session');
        $this->load->helper('url');
        // print_r($data);
    }

    public function index()
    {
        $this->load->library('session');
        $this->load->view('login_view');
    }
    function aksi_login(){
        $this->load->library('session');
        $username = htmlspecialchars($this->input->post('username'));
        $password = htmlspecialchars($this->input->post('password'));
        $where = array(
            'username' => $username,
            'password' => md5($password),
        );
        $cek = $this->user->login($where);
        if($cek > 0){
            $data = array(
                'nama' => $username,
                'status' => 1
            );
        $this->session->set_userdata('admin', $data);
        redirect('dashboard');
        } else {
            redirect('login');
        }
    }

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */