<?php

class Pages extends Controller
{
    public function index($data = null)
    {
        if ($this->default_template) {
            load('views/inc/head.php');
        }

        // dd($this->default_template);
        $this->view('dashboard');

        if ($this->default_template) {
            load(
                'views/inc/footer.php',
                'views/inc/scripts.php',
            );
            echo '</body></html>';
        }
    }

    public function login()
    {
        echo 'login';
    }
}
