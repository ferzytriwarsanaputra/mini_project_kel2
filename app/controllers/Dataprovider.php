<?php

class Dataprovider extends Controller{
    public function index()
    {
        $data['title'] = 'Data Provider';
        $this->view('template/header', $data);
        $this->view('dataprovider/index');
        $this->view('template/footer');
    }
}