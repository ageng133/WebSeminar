<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user','',TRUE);
    }

    public function index()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login_view');
        } else {
            redirect('admin/dashboard', 'refresh');
        }
    }

    public function check_database($password)
    {
        $username = $this->input->post('username');

        $result = $this->user->login($username, $password);

        if ($result) {

            foreach ($result as $row) {
                $sess_array = array(
                    'id' => $row->id,
                    'username' => $row->username,
                    'status' => 1
                );
                $this->session->set_userdata('logged_in', $sess_array);
            }
            return TRUE;
        }else{
            $this->form_validation->set_message('check_database','Username dan Password salah');
            return FALSE;
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        redirect('login','refresh');
    }

}

/* End of file VerifyLogin.php */
/* Location: ./application/controllers/VerifyLogin.php */