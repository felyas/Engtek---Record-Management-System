<?php

use Core\App;

$db = App::container()->resolver('Core\Database');
$user_id = $_GET['user_id'];

$javascript = [
    'isJs' => 1,
    'file_name' => '/js/user/create.js',
];

$user = $db->query("SELECT * FROM users WHERE user_id = :user_id", [':user_id' => $user_id])->read();


view('user/edit.view.php', [
    'user' => $user,
    'javascript' => $javascript,
]);