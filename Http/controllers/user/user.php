<?php

use Core\App;

$db = App::container()->resolver('Core\Database');



$errors = [];

$start = 0;
$limit = 4;

$rowCount = count($db->query("SELECT * FROM users")->readAll()); // 7
$pages = ceil($rowCount / $limit);
// 7 / 4 = 1.75, ceil will round off that 1.75 into 2

if (isset($_GET['page_no'])) {
    if ($_GET['page_no'] > $pages || $_GET['page_no'] < 1) {
        $errors['errors'] = 'No more data found in the database';
    } else {
        $page = $_GET['page_no'] - 1; // 2 - 1 = 1
        $start = $page * $limit; // 1 * 4 = 4
    }
}
// 4    4
$users = $db->query("SELECT * FROM users LIMIT $start, $limit")->readAll();




$header = "Users";
$javascript = [
    'isJs' => 1,
    'file_name' => '/js/user/user.view.js',
];

view('user/user.view.php', [
    'header' => $header,
    'users' => $users,
    'javascript' => $javascript,
    'pages' => $pages,
    'errors' => $errors
]);
