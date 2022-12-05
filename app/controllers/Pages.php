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
        echo 'login';
    }

    protected function load_view(string $view_name)
    {
        return;
        load(
            '/views/pages/inc/head.php',
            '/views/pages/inc/sidebar.php',
            '/views/pages/inc/navbar.php',
        );

        $this->view('pages/' . $view_name);

        load('/views/pages/inc/footer.php',);
        echo '</div></div><!-- end of class="container body" -->';
        load(
            '/views/pages/inc/lock_screen.php',
            '/views/pages/inc/scripts.php',
        );
        echo '</body></html>';
    }
}
