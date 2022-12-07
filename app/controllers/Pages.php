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

    public function accessManagement()
    {
        $this->load_view('accessManagement');
    }

    public function login()
    {
        // $this->load_view('login');
        redirect('/users/login');
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
