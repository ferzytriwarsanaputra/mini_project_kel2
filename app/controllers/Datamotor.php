<?php

class Datamotor extends Controller{
    public function index()
    {
        $data['title'] = 'Data Motor';
        $this->view('template/header', $data);
        $this->view('datamotor/index');
        $this->view('template/footer');
    }
}