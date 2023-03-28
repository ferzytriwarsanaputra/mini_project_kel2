<?php

class Datapesanan extends Controller{
    public function index()
    {
        $data['pesanan'] = $this->model('Admin_Model')->getPesanan();
        $data['title'] = 'Data Pesanan';
        // var_dump($data);
        $this->view('template/header', $data);
        $this->view('datapesanan/index', $data);
        $this->view('template/footer');
    }
    public function konfirmasi($id)
    {
        $data['pesanan'] = $this->model('Admin_Model')->getPesanan();
        $data['title'] = 'Data Pesanan';
        $dat = $this->model('Admin_Model')->getPesan($id);
        // var_dump($data);
        $this->model('Admin_Model')->updateStatus($dat, $id);
        $this->view('template/header', $data);
        $this->view('datapesanan/index', $data);
        $this->view('template/footer');
    }
}