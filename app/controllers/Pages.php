<?php

class Pages extends Controller
{
    public function index($data = null)
    {
        $this->dashboard();
    }

    public function dashboard()
    {
        $this->view('dashboard');
    }

    public function accessManagement()
    {
        $this->view('accessManagement');
    }

    public function login()
    {
        echo 'login';
    }
}
