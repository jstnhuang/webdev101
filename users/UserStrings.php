<?php

/**
 * Holds string constants for the user system.
 */ 
class UserStrings {
  const REG_MISSING_FIELD = "registration_missing_field";
  const REG_NAME_LENGTH = "registration_name_length";
  const REG_PASSWORD_MISMATCH = "registration_password_mismatch";
  const REG_EMAIL_TAKEN = "registration_email_taken";
  const REG_DATABASE_FAILED = "registration_database_failed";
  const LOGIN_FAILED = "login_failed";
	const PASSWORD_CHANGE_MISMATCH = "password_change_mismatch";
	const PASSWORD_CHANGE_UNCHANGED = "password_change_unchanged";
	const PASSWORD_CHANGE_OLD_MISMATCH = "password_change_old_mismatch";
	const PASSWORD_CHANGE_FAILED = "password_change_failed";
	const PASSWORD_CHANGE_SUCCESS = "password_change_success";


  public static $strings = array(
    self::REG_MISSING_FIELD =>
      "Not all the fields for registration were provided.",
    self::REG_NAME_LENGTH =>
      "The given name must be between 1 and 1024 characters.",
    self::REG_PASSWORD_MISMATCH => 
			"The given passwords did not match.",
    self::REG_EMAIL_TAKEN =>
      "The given email address already belongs to another user.",
    self::REG_DATABASE_FAILED =>
      "There was a problem adding your information to our database.",
    self::LOGIN_FAILED => 
			"Incorrect email / password combination.",
		self::PASSWORD_CHANGE_MISMATCH =>
			"The given new passwords did not match",
		self::PASSWORD_CHANGE_UNCHANGED =>
			"The new password is the same as the old password",
		self::PASSWORD_CHANGE_OLD_MISMATCH =>
			"The old password did not match",
		self::PASSWORD_CHANGE_FAILED =>
			"The password change failed. Your password is unchanged",
		self::PASSWORD_CHANGE_SUCCESS =>
			"The password change was successful. Use your new password the next time you log on!"

  );
}

?>