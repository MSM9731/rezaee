<?php

class Router
{
    private string|object $current_controller = 'Pages';
    private string $current_method = 'index';
    private array $params = [];

    public function __construct()
    {
        $url = $this->get_url();

        // controller
        if (isset($url['controller']) && check_file_exist('/contollers/' . $url['controller'] . '.php')) $this->current_controller = $url['controller'];
        load('/controllers/' . $this->current_controller . '.php');
        $this->current_controller = new $this->current_controller;

        // method
        if (isset($url['method']) && method_exists($this->current_controller, $url['method'])) $this->current_method = $url['method'];

        // params
        if (isset($url['params']) && $url['params'] !== []) $this->params = $url['params'];

        call_user_func_array([$this->current_controller, $this->current_method], [$this->params]);
    }

    public function get_url()
    {
        $url = $_SERVER['REQUEST_URI'];
        $url = substr($url, strlen(ROOT));
        $url = trim($url, '/');
        preg_match('/(?P<controller>[a-zA-Z0-9]+)?(\/(?P<method>[a-zA-Z0-9]+)(\/(?P<params>.+))?)?/im', $url, $routs);
        $url = [];
        $url['controller']  =       isset($routs['controller'])     ?       ucwords($routs['controller'])       :      '';
        $url['method']      =       isset($routs['method'])         ?       strtolower($routs['method'])        :      '';
        $url['params']      =       isset($routs['params'])         ?       explode('/', $routs['params'])      :      [];
        return $url;
    }

    public function get_controller()
    {
        return $this->current_controller;
    }

    public function get_method()
    {
        return $this->current_method;
    }

    public function get_params()
    {
        return $this->params;
    }
}
