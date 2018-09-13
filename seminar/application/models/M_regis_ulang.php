<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_regis_ulang extends CI_Model {

    public function get_peserta($id)
    {
        $this->db->where('invoice',$id);
        $result = $this->db->get('fest_peserta');

        return $result->result();
    }

    public function get_autocomplete($data)
    {
        $this->db->select('nama, invoice, is_regis_ulang');
        $this->db->where('is_regis_ulang','n');
        $this->db->where("(nama LIKE '%".$data."%' OR invoice LIKE '%".$data."%')", NULL, FALSE);
        // $this->db->or_like(array('nama' => $data, 'invoice' => $data));;
        // $this->db->like('invoice', $data);
        // $this->db->where('is_bayar','y');


        return $this->db->get('fest_peserta', 10)->result();
    }

    public function konfirmasi_peserta($invoice, $data)
    {
        $this->db->where('invoice', $invoice);
        $this->db->update('fest_peserta', $data);
        $this->db->trans_complete();

        if ($this->db->affected_rows() == '1') {
            return 1;
        } else {
            return 0;
        }
    }

}

/* End of file M_regis_ulang.php */
/* Location: ./application/models/M_regis_ulang.php */