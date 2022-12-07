<?php
require_once __DIR__ . '/../functions.php';

// die('hello');
$res = [
    'status' => 'success',
    'message' => '',
    'data' => $_POST,
];

response('success', 'دسترسی با موفقیت اضافه شد!', $_POST);
