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
}