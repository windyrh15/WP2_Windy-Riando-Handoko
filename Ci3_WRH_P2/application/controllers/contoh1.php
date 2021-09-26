<?php
class contoh1 extends CI_Controller
{
    public function index()
    {
    echo"Belajar Codeigniter pertemuan 2";
    $this->load->view('view-latihanwp2');
    }
 
        public function penjumlahan($nil1, $nil2)
        {
            $this->load->model('model_latihan1');

           $data['nilai1'] = $nil1;
           $data['nilai2'] = $nil2;
           $data['hasil'] = $this->model_latihan1->jumlah($nil1, $nil2);

           $this->load->view('view-latihanwp2', $data);
        }
}

?>