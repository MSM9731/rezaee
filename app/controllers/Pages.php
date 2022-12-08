<?php

class Pages extends Controller
{
    public function index($data = null)
    {
        $this->home();
    }

    public function home()
    {
        $this->load_view('home');
    }
    
    public function login()
    {
        // $this->load_view('login');
        redirect('/users/login');
    }
    
    public function post($data)
    {
        $this->load_view('post');
    }

    protected function load_view(string $view_name)
    {
        // return;
        load(
            '/views/pages/inc/head.php',
            '/views/pages/inc/header.php',
        );

        $this->view('pages/' . $view_name);

        load(
            '/views/pages/inc/footer.php',
            '/views/pages/inc/scroll_top.php',
            '/views/pages/inc/scripts.php',
        );
        echo '</body></html>';
    }
}
