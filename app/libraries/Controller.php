<?php

class Controller
{
    // protected bool $default_template = true;

    public function model(string $model_name)
    {
    }

    public function view(string $view_name)
    {
        if (!check_file_exist('/views/' . $view_name . '.php')) $this->notfound();
        load('/views/' . $view_name . '.php'); // load the requested view
    }

    public function notfound()
    {
        $this->view('404.php');
    }
}
