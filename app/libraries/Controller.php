<?php

class Controller
{
    protected bool $default_template = true;

    public function model(string $model_name)
    {
    }

    public function view(string $view_name)
    {
        if (!check_file_exist('/views/' . $view_name . '.php')) die('View doesn\'t exist');
        load('/views/' . $view_name . '.php');
    }
}
