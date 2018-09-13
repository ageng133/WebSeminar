<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta_model extends CI_Model {

    function peserta_list(){
        $hasil=$this->db->get('fest_peserta');
        return $hasil->result();
    }

    function save_peserta(){

        $data = array(
            'nama'=>$this->input->post('nama'),
            'nim'  => $this->input->post('nim'),
            'jurusan' => $this->input->post('jurusan'),
            'semester' => $this->input->post('semester'),
            'no_telp' => $this->input->post('no_telp'),
            'invoice' => $this->input->post('invoice'), // bermasalah
            'status' => $this->input->post('status'),
            'ots' => $this->input->post('ots'),
            'alamat' => $this->input->post('alamat'),
            'is_regis_ulang' => 'n'
        );

        $result=$this->db->insert('fest_peserta',$data);
        return $result;
    }

    function update_peserta(){
        $id = $this->input->post('id');
        $data = array(
            'nama'=>$this->input->post('nama'),
            'nim'  => $this->input->post('nim'),
            'jurusan' => $this->input->post('jurusan'),
            'semester' => $this->input->post('semester'),
            'no_telp' => $this->input->post('no_telp'),
            'invoice' => $this->input->post('invoice'), // bermasalah
            'status' => $this->input->post('status'),
            'ots' => $this->input->post('ots'),
            'alamat' => $this->input->post('alamat'),
        );

        $this->db->where('id', $id);
        $result=$this->db->update('fest_peserta', $data);
        return $result;
    }

    function delete_peserta(){
        $id=$this->input->post('id');
        $this->db->where('id', $id);
        $result = $this->db->delete('fest_peserta');
        return $result;
    }

    function get_peserta_ots()
    {
        $this->db->where('ots','y');
        $hasil = $this->db->get('fest_peserta');

        return $hasil->result();
    }

}

/* End of file Peserta.php */
/* Location: ./application/models/Peserta.php */