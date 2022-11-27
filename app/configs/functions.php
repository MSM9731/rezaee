<?php

/**
 * Load the source given
 * 
 * @param string ...$filename
 * 
 * @return [type]
 */
function load(string ...$filename)
{
    foreach ($filename as $file) {
        require APPPATH . $file;
    }
}



/**
 * Load once the source given
 * 
 * @param string ...$filename
 * 
 * @return [type]
 */
function load_once(string ...$filename)
{
    foreach ($filename as $file) {
        require_once APPPATH .  $file;
    }
}


function check_file_exist(string $filename): bool
{
    return file_exists(APPPATH . $filename) ? true : false;
}



function dr($input)
{
    echo '<pre dir="ltr">';
    print_r($input);
    echo '</pre>';
}



function dd($input)
{
    echo '<pre dir="ltr">';
    var_dump($input);
    echo '</pre>';
}
