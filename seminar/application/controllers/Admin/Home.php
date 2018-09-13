<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('peserta');
    }

    public function index()
    {
        $data['seluruh_peserta'] =$this->peserta->hit_seluruh_peserta();
        $data['peserta_hadir'] =$this->peserta->hitung_hadir();
        // $data['belum_bayar'] =$this->peserta->hit_belum_bayar();
        // $data['sudah_bayar'] =$this->peserta->hit_sudah_bayar();
        // $data['hari_ini'] =$this->peserta->peserta_hari_ini();
        $this->load->view('admin/index', $data);
    }

    public function peserta()
    {
        $data['seluruh_peserta'] = $this->peserta->semua_peserta();
        $this->load->view('admin/seluruh_peserta', $data);
    }

    // public function seluruh_peserta()
    // {
    //     $data['seluruh_peserta'] = $this->peserta->semua_peserta();
    //     $this->load->view('admin/seluruh_peserta', $data);
    // }

    public function edit_peserta($id)
    {
        $data['peserta_edit'] = $this->peserta->get_peserta($id);
        $this->load->view('admin/edit_peserta', $data);
    }

    public function delete_peserta($id)
    {
        $this->peserta->delete_peserta($id);
        redirect('home/seluruh_peserta','refresh');
    }

    public function update_peserta()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'j_kel' => $this->input->post('j_kel'),
            'usia' => $this->input->post('usia'),
            'no_telp' => $this->input->post('no_telp'),
            'tgl_daftar' => $this->input->post('tgl_daftar'),
            'tgl_tempo' => $this->input->post('tgl_tempo'),
            'alamat' => $this->input->post('alamat')
        );

        $id = $this->input->post('id');

        $this->peserta->update_peserta($id, $data);

        redirect('home/seluruh_peserta','refresh');
    }

    public function belum_bayar()
    {
        $data['belum_bayar'] = $this->peserta->list_belum_bayar();
        $this->load->view('admin/belum_bayar', $data);
    }

    public function sudah_bayar()
    {
        $data['sudah_bayar'] = $this->peserta->list_sudah_bayar();
        $this->load->view('admin/sudah_bayar', $data);
    }

    public function update_bayar($id)
    {
        $data = array(
            'is_bayar' => 'y'
        );
        $this->peserta->update_bayar_seminar($id, $data);

        redirect('home/belum_bayar','refresh');
    }

    public function detil_peserta($id)
    {
        $data['detil'] = $this->peserta->get_peserta($id);
        $this->load->view('admin/detil_peserta', $data);
    }

    public function laporan()
    {
        $this->load->view('laporan/index');
    }

    public function cetak($case = 'semua')
    {
        ob_start();

        $data = array();
        $nama_file = "";

        // kondisi
        if ($case == 'semua') {
            $data['peserta'] = $this->peserta->semua_peserta();
            $data['jumlah'] = $this->peserta->hit_seluruh_peserta();
            $data['judul'] = 'Data Seluruh Pendaftar Seminar IT';
            $nama_file = "Seluruh Pendaftar.pdf";
        }
        if ($case == 'valid') {
            $data['peserta'] = $this->peserta->list_sudah_bayar();
            $data['jumlah'] = $this->peserta->hit_sudah_bayar();
            $data['judul'] = 'Data Valid Pendaftar Seminar IT';
            $nama_file = "Pendaftar Valid.pdf";
        }
        if ($case == 'belum_valid') {
            $data['peserta'] = $this->peserta->list_belum_bayar();
            $data['jumlah'] = $this->peserta->hit_belum_bayar();
            $data['judul'] = 'Data Belum Valid Pendaftar Seminar IT';
            $nama_file = "Pendaftar belum Valid.pdf";
        }

        // $data['siswa'] = $this->siswa_model->view_row();
        $this->load->view('admin/cetakpdf', $data);
        $html = ob_get_contents();
        ob_end_clean();

         require_once('./asset/html2pdf/html2pdf.class.php');
        $pdf = new HTML2PDF('P','A4','en','UTF-8');
        $pdf->WriteHTML($html);
        $pdf->pdf->IncludeJS('print(TRUE)');
        $pdf->Output($nama_file, 'D');
    }

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */