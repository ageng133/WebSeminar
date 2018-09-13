<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('peserta_model');
    }

    public function index()
    {
        $this->load->view('admin/v_admin_peserta');
    }

    function peserta_data(){
        $data = $this->peserta_model->peserta_list();
        echo json_encode($data);
    }

    function save(){
        $data = $this->peserta_model->save_peserta();
        echo json_encode($data);
    }

    function update(){
        $data=$this->peserta_model->update_peserta();
        echo json_encode($data);
    }

    function delete(){
        $data=$this->peserta_model->delete_peserta();
        echo json_encode($data);
    }

    function ots()
    {
        $data['ots'] = $this->peserta_model->get_peserta_ots();
        $this->load->view('admin/ots', $data);
    }

}

/* End of file Peserta.php */
/* Location: ./application/controllers/Peserta.php */