<?php

define('ROOT', dirname($_SERVER['PHP_SELF']));
define('APPPATH', dirname(__DIR__));
// define('URLPATH', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF'])); // with http(s)://
define('URLPATH', $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF'])); // without http(s)://


echo '<pre dir="ltr" style="padding:10px;">';
echo ROOT;
echo '<br>';
echo APPPATH;
echo '<br>';
echo URLPATH;
echo '</pre>';