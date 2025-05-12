<?php

$router->get('/500', '500.php');

$router->get('/', 'login.php')->only('guest');
$router->post('/', 'login.php');

$router->get('/dashboard', 'index.php')->only('auth');



$router->get('/documents', 'document/document.php')->only('auth');
$router->get('/documents/create', 'document/create.php');
$router->post('/documents/create', 'document/create.php');



$router->get('/users', 'user/user.php')->only('auth');
$router->get('/users/create', 'user/create.php');
$router->post('/users/add', 'user/add.php');

$router->get('/users/edit', 'user/edit.php')->only('auth');
$router->post('/users/update', 'user/update.php');
$router->post('/user/delete', 'user/destroy.php');



$router->get('/logout', 'logout.php');

