<?php

use Core\App;
use Http\Forms\AddNewUserForm;

$db = App::container()->resolver('Core\Database');
$validation = new AddNewUserForm();

$javascript = [
  'isJs' => 1,
  'file_name' => '/js/user/create.js',
];

$username = sanitize($_POST['username']);
$id_number = sanitize($_POST['id_number']);
$role = sanitize($_POST['role']);
$password = sanitize($_POST['password']);
$cpassword = sanitize($_POST['confirm_password']);


if ($validation->validate($id_number, $username, $role, $password, $cpassword)) {
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $inserted = $db->query("INSERT INTO users (id_number, username, password, role)
                VALUES(:id_number, :username, :hashed_password, :role)", [
      ':id_number' => $id_number,
      ':username' => $username,
      ':hashed_password' => $hashed_password,
      ':role' => $role
    ]);

    if ($inserted) {
      $_SESSION['success'] = 'User added successfully';
      header("Location: /users");
      exit();
    }
}

view('user/create.view.php', [
  'error' => $validation->errors(),
  'javascript' => $javascript
]);
