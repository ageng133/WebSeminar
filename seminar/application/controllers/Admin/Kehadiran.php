<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kehadiran extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kehadiran_model');
    }

    public function index()
    {
        $data['kehadiran'] = $this->kehadiran_model->get_kehadiran_peserta();
        $this->load->view('admin/kehadiran', $data);
    }

    public function aksi_regis($is_regis, $id)
    {
        $hasil = $this->kehadiran_model->conf_regis_ulang($is_regis, $id);
        if ($hasil) {
            redirect('admin/kehadiran','refresh');
        }
    }

}

/* End of file Kehadiran.php */
/* Location: ./application/controllers/Admin/Kehadiran.php */