/**
 * Register handlers.
 */
function init() {
  $('#register input, select').keyup(validateRegistration);
  $('#register input, select').click(validateRegistration);
}

/**
 * Checks the fields in the registration form, and disables the registration
 * button if the fields are invalid.
 */
function validateRegistration() {
    if (regFormIsValid()) {
        $('#register input[type="submit"]').removeAttr('disabled');
    }
    else {
        $('#register input[type="submit"]').attr('disabled', 'disabled');
    }
}

/**
 * Checks the fields of the registration form. All the fields must be non-empty,
 * and the password fields must match.
 *
 * Returns: true if the fields of the registration form are valid, false
 *  otherwise.
 */
function regFormIsValid() {
    var valid = true;
    
    var realName = $('#register [name=real_name]').val();
    var email = $('#register [name=email]').val();
    var password = $('#register [name=password]').val();
    var passwordConfirmation = $('#register [name=password_confirm]').val();
    
    if (password != passwordConfirmation) {
        $('#register [name=password]').css('color', '#C00000');
        $('#register [name=password_confirm]').css('color', '#C00000');
        valid = false;
    }
    else {
        $('#register [name=password]').css('color', 'black');
        $('#register [name=password_confirm]').css('color', 'black');
    }
    
    if (realName == "" || email == "" || password == "") {
        valid = false;
    }
    
    return valid;
}