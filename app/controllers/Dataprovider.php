<?php

class Dataprovider extends Controller{
    public function index()
    {
        $data['provider'] = $this->model('Admin_Model')->getProvider();
        $data['title'] = 'Data Provider';
        $this->view('template/header', $data);
        $this->view('dataprovider/index', $data);
        $this->view('template/footer');
    }
    public function hapusProvider($nik)
    {
        if( $this->model('Admin_Model')->delProvider($nik) > 0){
            $data['title'] = 'Data Provider';
            $data['provider'] = $this->model('Admin_Model')->getProvider();
            // var_dump($data);
            $this->view('template/header', $data);
            $this->view('dataprovider/index', $data);
            $this->view('template/footer');
        }

    }
}