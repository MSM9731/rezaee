<?php

require_once __DIR__ . '/configs/config.php';
require_once __DIR__ . '/../functions.php';


spl_autoload_register(function ($class) {
    if (check_file_exist(DIRECTORY_SEPARATOR  . 'libraries' . DIRECTORY_SEPARATOR . $class . '.php'))
        load_once(DIRECTORY_SEPARATOR  . 'libraries' . DIRECTORY_SEPARATOR . $class . '.php');
});
