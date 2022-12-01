<?php

class Controller
{
    protected bool $default_template = true;

    public function model(string $model_name)
    {
    }

    public function view(string $view_name)
    {
        if ($this->default_template) {
            load(
                '/views/inc/head.php',
                '/views/inc/sidebar.php',
                '/views/inc/navbar.php',
            );
        }

        if (!check_file_exist('/views/' . $view_name . '.php')) $this->notfound();

        load('/views/' . $view_name . '.php'); // load the requested view

        if ($this->default_template) {
            load('/views/inc/footer.php',);
            echo '</div></div><!-- end of class="container body" -->';
            load(
                '/views/inc/lock_screen.php',
                '/views/inc/scripts.php',
            );
            echo '</body></html>';
        }
    }

    public function notfound()
    {
        $this->view('404.php');
    }
}
