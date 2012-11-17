<?php

/**
 * Enumeration that corresponds to the "active" column in the users table.
 */
class UserState {
  const ACTIVE = "Active"; // User account is active.
  const INACTIVE = "Inactive"; // User account created, but not activated yet.
  const DISABLED = "Disabled"; // User account disabled for some reason.
}

/**
 * Enumeration for which User constructor to call (to simulate constructor
 * overloading in PHP).
 */
class UserConstructors {
  const NEW_REG = 0;
  const FROM_DB = 1;
}

/**
 * A class that bundles together all the data we have on a particular user.
 */
class User {
  public $user_id;
  public $real_name;
  public $password_hash;
  public $password_salt;
  public $primary_email;
  public $active;
  public $internal;
  
  public function __construct() {
    $args = func_get_args();
    $type = $args[0];
    $remaining_args = array_slice($args, 1);
    if (UserConstructors::NEW_REG == $type) {
      call_user_func_array(array($this, "__construct_new_reg"),
        $remaining_args);
    }
    elseif (UserConstructors::FROM_DB == $type) {
      call_user_func_array(array($this, "__construct_from_db"),
        $remaining_args);
    }
    else {
    }
  }
  
  /**
   * Constructor for a new user. Generates a salt, and hashes the user's
   * password. The user's id is set after it's inserted into the database.
   * 
   * Arguments:
   *  $real_name: The user's name.
   *  $password: The user's password.
   *  $primary_email: The user's email address.
   */
  public function __construct_new_reg($real_name, $password, $primary_email) {
    $this->real_name = $real_name;
    $this->password_salt = substr(md5(uniqid(rand(), true)), 0, 25);
    $this->password_hash = sha1($this->password_salt.$password);
    $this->primary_email = $primary_email;
    $this->active = UserState::ACTIVE;
    $this->internal = 0;
  }
  
  /**
   * Constructor for when a user row is pulled from the database.
   */
  public function __construct_from_db($user_resource) {
    $this->user_id = $user_resource["user_id"];
    $this->real_name = $user_resource["real_name"];
    $this->password_hash = $user_resource["password_hash"];
    $this->password_salt = $user_resource["password_salt"];
    $this->primary_email = $user_resource["primary_email"];
    $this->active = $user_resource["active"];
    $this->internal = $user_resource["internal"];
  }
}
?>