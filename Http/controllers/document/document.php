<?php

$header = "Documents";
$javascript = [
    'isJs' => 1,
    'file_name' => '/js/document/show.js',
];

view('document/document.view.php', [
    'header' => $header,
    'javascript' => $javascript,
]);