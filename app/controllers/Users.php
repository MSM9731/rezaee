<?php

class Users extends Controller
{
    public function index($data = null)
    {
        $this->dashboard();
    }

    public function dashboard()
    {   
        $this->load_view('dashboard');
    }

    public function accessManagement()
    {
        $this->load_view('accessManagement');
    }

    public function login()
    {
        // echo 'login';
        // redirect('/pages/login');
        $this->view('/users/login');
    }

    protected function load_view(string $view_name)
    {
        load(
            '/views/users/inc/head.php',
            '/views/users/inc/sidebar.php',
            '/views/users/inc/navbar.php',
        );

        $this->view('users/' . $view_name);

        load('/views/users/inc/footer.php',);
        echo '</div></div><!-- end of class="container body" -->';
        load(
            '/views/users/inc/lock_screen.php',
            '/views/users/inc/scripts.php',
        );
        echo '</body></html>';
    }
}
