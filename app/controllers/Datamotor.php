<?php

class Datamotor extends Controller{
    public function index()
    {
        $data['motor'] = $this->model('Admin_Model')->getMotor();
        $data['title'] = 'Data Motor';
        // var_dump($data);
        $this->view('template/header', $data);
        $this->view('datamotor/index', $data);
        $this->view('template/footer');
    }
}