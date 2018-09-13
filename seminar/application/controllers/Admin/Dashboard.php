<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('dashboard_model');
        $this->load->library('session');
    }

    public function index()
    {
       
        $data['seluruh_peserta'] = $this->dashboard_model->hit_seluruh_peserta();
        $data['peserta_hadir'] = $this->dashboard_model->hitung_hadir();
        $data['peserta_ots'] = $this->dashboard_model->hit_peserta_ots();
        $data['peserta_belum_hadir'] = $this->dashboard_model->hit_belum_hadir();

        $this->load->view('admin/index', $data);
    }   
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Admin/Dashboard.php */