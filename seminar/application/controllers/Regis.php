<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regis extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_regis_ulang');
    }

    public function index()
    {
        $this->load->view("v_regis_ulang");
    }

    public function get_individu_peserta()
    {
        $invoice = $this->input->post('invoice');
        $data = $this->M_regis_ulang->get_peserta($invoice);
        echo json_encode($data);
    }

    public function konfirmasi()
    {
        $invoice = $this->input->post('invoice');

        $data = array(
            'is_regis_ulang' => 'y'
        );

        $result = $this->M_regis_ulang->konfirmasi_peserta($invoice, $data);

        echo $result;

    }

    public function autocomplete()
    {
         // load model
        $this->load->model('M_regis_ulang');

         $data = $this->input->post('search_data');
         // echo $data;

         $result = $this->M_regis_ulang->get_autocomplete($data);

         if (!empty($result))
         {
              foreach ($result as $row):
                   echo "<li class='data-peserta' data-id='".$row->invoice ."'>" . ucwords($row->nama) ." - ".$row->invoice ."</li>";
              endforeach;

         }
         else
         {
               echo "<li> <em> Data tidak di temukan ... </em> </li>";
         }


     }



}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */