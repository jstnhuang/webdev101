<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/../db/DbSystem.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/../users/User.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/../users/UserStrings.php');

/**
 * Contains the logic for the user system. If you want to deal with users,
 * include this file. To get the current user, simply say:
 *   $user = UserSystem::getLoggedInUser();
 * (which returns false if the user is not logged in, so check for that). Once
 * you have the user object, you can access its fields. Refer to User.php for
 * the user object's fields.
 */
class UserSystem {
  public static function login($email, $password) {
    $db = DbSystem::getDb();
    
    // Find user ID associated with this email.
    $result = $db->query(
      "SELECT user_id FROM emails WHERE email_address='%s'", $email);
    if ($result === false) {
      return false;
    }
    $user_id = mysql_result($result, 0);
    
    // Get user info.
    $result = $db->query(
      "SELECT * FROM users WHERE user_id='%d'", $user_id);
    if ($result === false) {
      return false;
    }
    $user = mysql_fetch_array($result);
    
    // Compare password hashes.
    $attempted_password = sha1($user["password_salt"].$password);
    if ($attempted_password === $user["password_hash"]) {
      return new User(UserConstructors::FROM_DB, $user);
    }
    else {
      return false;
    }
  }
  
  /**
   * Validates the fields for user registration. Checks that the name length is
   * within bounds (set in the database), that the passwords are the same, and
   * that the email address isn't already in the DB.
   *
   * Arguments:
   *  $real_name: the name of the user.
   *  $password: the user's password.
   *  $password_confirm: The user's second password entry, should match the
   *    first.
   *  $email: the user's email address.
   *
   * Returns: An array of string IDs (see UserStrings.php) representing the
   *  errors found. If there weren't any errors, then the array is empty.
   */
  public static function validateRegistration($real_name, $password,
      $password_confirm, $email) {
    $errors = array();
    
    $required_fields = array($real_name, $password, $password_confirm, $email);
    foreach ($required_fields as $field) {
      if (empty($field)) {
        $errors[] = UserStrings::REG_MISSING_FIELD;
        break;
      }
    }
    
    if (strlen($real_name) === 0 || strlen($real_name) > 1024) {
      $errors[] = UserStrings::REG_NAME_LENGTH;
    }
    
    if ($password != $password_confirm) {
      $errors[] =  UserStrings::REG_PASSWORD_MISMATCH;
    }
    
    
    if (UserSystem::emailExists($email)) {
      $errors[] = UserStrings::REG_EMAIL_TAKEN;
    }
    
    return $errors;
  }
  
  /**
   * Registers a new user with the given fields. Note that this function assumes
   * that the data is valid (should call validateRegistration before this).
   *
   * Returns: the user object representing the newly created user, or false if
   *  there was an error inserting the user into the DB.
   */
  public static function handleRegistration($real_name, $password,
      $password_confirm, $email) {
    $user = new User(UserConstructors::NEW_REG, $real_name, $password, $email);
    $result = UserSystem::insertUserIntoDb($user);
    if ($result === false) {
      return false;
    }
    else {
      return $user;
    }
  }
  
  /**
   * Inserts the user into the database, and sets its user id. Also inserts the
   * email address into the emails table.
   *
   * Returns: true if the insertion was successful, false otherwise.
   */
  public static function insertUserIntoDb($user) {
    $db = DbSystem::getDb();
    
    // Insert the user into the users table.
    $result = $db->query(
      "INSERT INTO users(real_name, password_hash, password_salt, primary_email,
          active) 
        VALUES('%s', '%s', '%s', '%s', '%s');",
      $user->real_name, $user->password_hash, $user->password_salt,
      $user->primary_email, $user->active);
    if ($result === false) {
      return false;
    }
    
    $user_id = mysql_insert_id();
    $user->user_id = $user_id;
    
    // Insert the primary email address into the main emails table.
    $result = $db->query(
      "INSERT INTO emails(email_address, user_id)
        VALUES('%s', '%d');",
      $user->primary_email, $user_id);
    if ($result === false) {
      return false;
    }
    else {
      return true;
    }
  }

  /**
   * Queries the emails table in the DB to see if the given email is already in
   * it.
   *
   * Arguments:
   *  $email: the email address to check.
   *
   * Returns: true if the email is already in the emails table, false otherwise.
   */
  public static function emailExists($email) {
    $db = DbSystem::getDb();
    
    $result = $db->query(
      "SELECT * FROM emails
        WHERE email_address = '%s';",
      $email);
    if ($result) {
      return mysql_num_rows($result) > 0;
    }
    else {
      return false;
    }
  }

  /**
   * Returns: true if the user is logged in, false otherwise.
   */
  public static function isUserLoggedIn() {
    return isset($_SESSION["user"]);
  }

  /**
   * Returns: a User object for the logged in user, or false if user is not
   *  logged in.
   */
  public static function getLoggedInUser() {
    if (UserSystem::isUserLoggedIn()) {
      return $_SESSION["user"];
    }
    else {
      return false;
    }
  }
  
  public static function logout() {
    if (UserSystem::isUserLoggedIn()) {
      unset($_SESSION["user"]);
    }
  }
	/**
   * Updates a user's password
   *
   * Arguments:
   *  $user: the user.
   *  $password_old: the user's old password that is going to be changed.
	 *  $password_new: the user's desired new password.
   *  $password_confirm: The user's second password entry, should match the
   *    first ($password_new).
   *
   * Returns: An array of string IDs (see UserStrings.php) representing the
   *  errors found. If there weren't any errors, then the array is empty.
   */
  public static function updatePassword($user, $password_old, $password_new,
																				$password_confirm) {
    $errors = array();
    $db = DbSystem::getDb();
		$attempted_password = sha1($user->password_salt.$password_old);
    if ($attempted_password === $user->password_hash) {
			if ($password_new == $password_old) {
				$errors[] =  UserStrings::PASSWORD_CHANGE_UNCHANGED;
			}

			if ($password_new != $password_confirm) {
				$errors[] =  UserStrings::PASSWORD_CHANGE_MISMATCH;
			}
			if( count( $errors ) > 0 ) {
			
			} else {
				$result = $db->query(
					"UPDATE users SET password_hash='%s' WHERE user_id='%d'",
					sha1($user->password_salt.$password_new),$user->user_id);
			}
			if( $result == false ) {
				$errors[] = UserStrings::PASSWORD_CHANGE_FAILED;
			}
		}
    else {
				$errors[] = UserStrings::PASSWORD_CHANGE_OLD_MISMATCH;
				$errors[] = UserStrings::PASSWORD_CHANGE_FAILED;
    }
    return $errors;
	}
}
?>