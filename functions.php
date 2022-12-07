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


/**
 * check if the given file exist
 * 
 * @param string $filename
 * 
 * @return bool
 */
function check_file_exist(string $filename): bool
{
    return file_exists(APPPATH . $filename) ? true : false;
}


/**
 * redirect url
 * 
 * @param string $to
 * 
 * @return void
 */
function redirect(string $to): void
{
    header('location:' . ROOT . $to) . die;
}


/**
 * send response in api
 * 
 * @param string $status
 * @param string $message
 * @param array|object $data
 * 
 * @return [type]
 */
function response(string $status, string $message, array|object $data)
{
    die(json_encode([
        'status' => $status,
        'message' => $message,
        'data' => $data
    ]));
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
