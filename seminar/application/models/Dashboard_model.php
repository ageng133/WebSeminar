<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

    public function hit_seluruh_peserta()
    {
        $this->db->select('nama');
        $this->db->from('fest_peserta');

        return $this->db->count_all_results();
    }

    public function hitung_hadir()
    {
        $this->db->select('nama');
        $this->db->where('is_regis_ulang','y');
        $this->db->from('fest_peserta');

        return $this->db->count_all_results();
    }

    public function hit_peserta_ots()
    {
        $this->db->select('nama');
        $this->db->where('ots','y');
        $this->db->from('fest_peserta');

        return $this->db->count_all_results();
    }

    public function hit_belum_hadir()
    {
        $this->db->select('nama');
        $this->db->where('is_regis_ulang','n');
        $this->db->from('fest_peserta');

        return $this->db->count_all_results();
    }



}

/* End of file Dashboard.php */
/* Location: ./application/models/Dashboard.php */