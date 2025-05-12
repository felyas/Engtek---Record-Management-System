<?php

namespace Http\Forms;

use Core\App;

class AddNewUserForm
{
  protected $error = [];
  protected $db;

  public function __construct()
  {
    $this->db = App::container()->resolver('Core\Database');
  }

  public function validate($id_number, $username, $role, $password, $cpassword)
  {
    if (empty($username)) {
      $this->error['username'] = 'Username is required';
    }

    if (empty($id_number)) {
      $this->error['id_number'] = 'ID number is required';
    }

    if (!empty($id_number)) {
      $user = $this->db->query("SELECT * FROM users WHERE id_number = :id_number", [':id_number' => $id_number])->read();

      if ($user) {
        $this->error['id_number'] = "{$id_number} is already in use";
      }
    }

    if (empty($role)) {
      $this->error['role'] = 'Role is required';
    }

    if (empty($password)) {
      $this->error['password'] = 'Password is required';
    }

    if (empty($cpassword)) {
      $this->error['confirm_password'] = 'Please confirm your password';
    }

    if ($cpassword !== $password) {
      $this->error['confirm_password'] = 'Password do not match';
    }

    return empty($this->error);
  }

  // getters
  public function errors()
  {
    return $this->error;
  }
}
