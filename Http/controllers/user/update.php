<?php

use Core\App;

$db = App::container()->resolver('Core\Database');

$error = [];


$user_id = sanitize($_POST['user_id']);
$username = sanitize($_POST['username']);
$id_number = sanitize($_POST['id_number']);
$role = sanitize($_POST['role']);
$password = sanitize($_POST['password']);
$cpassword = sanitize($_POST['confirm_password']);

$user = $db->query("SELECT * FROM users WHERE user_id = :user_id", ['user_id' => $user_id])->read();


if (empty($username)) {
  $error['username'] = 'Username is required';
}

if (empty($id_number)) {
  $error['id_number'] = 'ID number is required';
} else {
  $isUserExist = $db->query("SELECT * FROM users WHERE id_number = :id_number AND user_id != :user_id", ['user_id' => $user_id, ':id_number' => $id_number])->read();
  
  if (!empty($isUserExist)) {
    $error['id_number'] = "{$id_number} is already in use";
  }
}

if (empty($role)) {
  $error['role'] = 'Role is required';
}

if (empty($password)) {
  $error['password'] = 'Password is required';
} elseif ($cpassword !== $password) {
  $error['password'] = 'Passwords do not match';
}


if (!$error) {
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
  'error' => $error,
]);
