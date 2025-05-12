<?php

use Core\App;

$db = App::container()->resolver('Core\Database');

$user_id = sanitize($_POST['user_id']);

$deleted = $db->query("DELETE FROM users WHERE user_id = :user_id", [':user_id' => $user_id]);

if ($deleted) {
  $_SESSION['success'] = "User deleted successfully";
  header("Location: /users ");
  exit();
} else {
  $_SESSION['error'] = "Something went wrong, please try again";
  header("Location: /users");
  exit();
}
