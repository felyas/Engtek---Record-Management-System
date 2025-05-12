<?php

use Core\App;
use Http\Forms\UpdateUserForm;

$db = App::container()->resolver('Core\Database');
$validation = new UpdateUserForm();

$javascript = [
    'isJs' => 1,
    'file_name' => '/js/user/create.js',
];


$user_id = sanitize($_POST['user_id']);
$username = sanitize($_POST['username']);
$id_number = sanitize($_POST['id_number']);
$role = sanitize($_POST['role']);
$password = sanitize($_POST['password']);
$cpassword = sanitize($_POST['confirm_password']);

$user = $db->query("SELECT * FROM users WHERE user_id = :user_id", ['user_id' => $user_id])->read();


if ($validation->validate($user_id, $id_number, $username, $role, $password, $cpassword)) {
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);
  $updated = $db->query("UPDATE users SET id_number = :id_number, username = :username, role = :role, password = :hashed_password WHERE user_id = :user_id", [
    ':user_id' => $user_id,
    ':id_number' => $id_number,
    ':username' => $username,
    ':role' => $role,
    ':hashed_password' => $hashed_password,
  ]);


  if ($updated) {
    $_SESSION['success'] = "User updated successfully";
    header("Location: /users");
    exit();
  }
}

view('user/edit.view.php', [
  'user' => $user,
  'error' => $validation->errors(),
  'javascript' => $javascript,
]);
