<?php

use Core\Database;
use Core\App;

$db = App::container()->resolver('Core\Database');

$users = $db->query("SELECT * FROM users")->readAll();

$header = "Dashboard";

view('index.view.php', [
    'header' => $header,
    'users' => $users,
]);