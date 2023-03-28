<?php

class Datacustomer extends Controller{
    public function index()
    {
        $data['customer'] = $this->model('Admin_Model')->getCustomer();
        $data['title'] = 'Data Customer';
        // var_dump($data);
        $this->view('template/header', $data);
        $this->view('datacustomer/index', $data);
        $this->view('template/footer');
    }
    public function hapusCustomer($nama)
    {
        if( $this->model('Admin_Model')->delCustomer($nama) > 0){
            $data['title'] = 'Data Customer';
            $data['customer'] = $this->model('Admin_Model')->getCustomer();
            // var_dump($data);
            $this->view('template/header', $data);
            $this->view('datacustomer/index', $data);
            $this->view('template/footer');
        }

    }
}