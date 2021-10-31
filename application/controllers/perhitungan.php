<?php
class perhitungan extends CI_Controller{
    public function index(){
        $this->load->view('v_perhitungan');
    }

    public function penjumlahan($n1, $n2){
        $this->load->model('modelpenjumlahan');
        $model = modelpenjumlahan;

        $data = [
            'nilai1'=>$this->input->post('nilai1'),
            'nilai2'=>$this->input->post('nilai2'),
            'hasil'=>$this->input->post('hasil')
        ];

        $data['nilai1'] = $nilai1;
        $data['nilai2'] = $nilai2;
        $data['hasil'] = $model->jumlah($nilai1,$nilai2);

        $this->load->view('v_hasilperhitungan', $data);
    }
}

?>