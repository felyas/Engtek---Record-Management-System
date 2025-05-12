<?php

$javascript = [
    'isJs' => 1,
    'file_name' => '/js/user/create.js',
];

view('user/create.view.php', [
    'javascript' => $javascript,
]);