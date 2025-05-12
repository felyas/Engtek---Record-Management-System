<?php

use Core\App;

$db = App::container()->resolver('Core\Database');

$javascript = [
    'isJs' => 1,
    'file_name' => '/js/login.js',
];

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id_number = sanitize($_POST['id_number']);
    $password = sanitize($_POST['password']);

    $user = $db->query("SELECT * FROM users WHERE id_number = :id_number", [':id_number' => $id_number])->read();

    if (empty($id_number) || empty($password)) {
        $errors['error'] = 'ID number and password are required';
    } else if (!$user) {
        $errors['error'] = "{$id_number} doesn't exist";
    } else if (!password_verify($password, $user['password'])) {
        $errors['error'] = 'Incorrect Password';
    }

    if(!$errors) {
        $_SESSION['user'] = [
            'id_number' => $user['id_number'],
            'role' => $user['role'],
        ];
        header("Location: /dashboard");
        exit();
    }
}

view('login.view.php', [
    'javascript' => $javascript,
    'errors' => $errors,
]);
