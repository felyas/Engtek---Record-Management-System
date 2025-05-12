<?php

namespace Http\Forms;

use Core\App;


class UpdateUserForm
{
  protected $error = [];
  protected $db;

  public function __construct()
  {
    $this->db = App::container()->resolver('Core\Database');
  }

  public function validate($user_id, $id_number, $username, $role, $password, $cpassword)
  {
    if (empty($username)) {
      $this->error['username'] = 'Username is required';
    }

    if (empty($id_number)) {
      $this->error['id_number'] = 'ID number is required';
    } else {
      $isUserExist = $this->db->query("SELECT * FROM users WHERE id_number = :id_number AND user_id != :user_id", ['user_id' => $user_id, ':id_number' => $id_number])->read();

      if (!empty($isUserExist)) {
        $this->error['id_number'] = "{$id_number} is already in use";
      }
    }

    if (empty($role)) {
      $this->error['role'] = 'Role is required';
    }

    if (empty($password)) {
      $this->error['password'] = 'Password is required';
    } elseif ($cpassword !== $password) {
      $this->error['password'] = 'Passwords do not match';
    }

    return empty($this->error);
  }

  // getter
  public function errors() {
    return $this->error;
  }
}
