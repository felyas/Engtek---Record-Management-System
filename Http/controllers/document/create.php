<?php

$javascript = [
    'isJs' => 1,
    'file_name' => '/js/document/create.js',
];

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
 dd($_POST);   
}


view('document/create.view.php', [
    'javascript' => $javascript,
]);
