<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kehadiran_model extends CI_Model {

    function get_kehadiran_peserta()
    {
        $hasil = $this->db->get('fest_peserta');
        return $hasil->result();
    }

    public function conf_regis_ulang($status, $id)
    {
        if ($status == 'y') {
            $data = array(
                'is_regis_ulang' => 'n'
            );
        }else{
            $data = array(
                'is_regis_ulang' => 'y'
            );
        }

        $this->db->where('id', $id);
        $result=$this->db->update('fest_peserta', $data);
        return $result;
    }


}

/* End of file Kehadiran_model.php */
/* Location: ./application/models/Kehadiran_model.php */