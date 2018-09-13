<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function login($where)
    {
       $cek = $this->db->get_where('fest_user', $where);
        return $cek->num_rows();
    }

}

/* End of file User.php */
/* Location: ./application/models/User.php */