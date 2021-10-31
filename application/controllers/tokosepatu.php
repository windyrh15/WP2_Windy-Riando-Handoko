<?php

class Tokosepatu extends CI_Controller{
    public function index(){
        $this->load->view('v_tokosepatu');
    }

    // public function harga($har){
    //     $this->load->model('model_tokosepatu');

    //     $data['harga'] = $this->model_tokosepatu->smodel($har);
    // }

    public function cetak(){
            $this->form_validation->set_rules('nama', 'nama pembeli', 'required|min_length[3]', [
                'required' => 'Nama wajib diisin !',
                'min_length' => 'Nama minimal 3 huruf']);

            $this->form_validation->set_rules('notlp', 'Nomor telephon', 'required|min_length[11]', [
                'required' => 'Nomor telephone wajib diisi !',
                'min_length' => 'Isi nomor yang sesuai']);
            
            $this->form_validation->set_rules('merk', 'merk sepatu', 'required', [
                'required' => 'Pilih sepatu !',]);
            
            $this->form_validation->set_rules('ukuran', 'ukuran sepatu', 'required', [
                'required' => 'pilih ukuran sepatu !',]);
            
            
        if ($this->form_validation->run() != true) {
            } else {
                $data = [
                    'nama' => $this->input->post('nama'),
                    'notlp' => $this->input->post('notlp'),
                    'ukuran' => $this->input->post('ukuran'),
                    'merk' => $this->input->post('merk'),
                    'harga'=>$this->input->post('harga')
                ];

                if ($data['merk']== "Nike"){
                    $data['harga']= 375000;
                }
                $this->load->view('v_tokosepatu_data', $data);
        }
            
    }

}

?>