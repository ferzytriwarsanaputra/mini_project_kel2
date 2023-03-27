<?php

class Datacustomer extends Controller{
    public function index()
    {
        $data['title'] = 'Data Customer';
        $this->view('template/header', $data);
        $this->view('datacustomer/index');
        $this->view('template/footer');
    }
}