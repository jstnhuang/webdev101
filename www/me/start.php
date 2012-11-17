<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/../webdev101.php");

if ($config->get("webdev101", "VERSION") == 3) {
require_once($_SERVER['DOCUMENT_ROOT'].'/../users/UserSystem.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/../users/UserStrings.php');
session_start();

// Redirect to main My 101 page if user is already logged in.
if (UserSystem::getLoggedInUser()) {
  header("Location: /me");
}

if(isset($_POST["action"])) {
  // Handle a registration.
  if ($_POST["action"] === "register") {
    // Get data.
    $real_name = trim($_POST['real_name']);
    $password = trim($_POST['password']);
    $password_confirm = trim($_POST['password_confirm']);
    $email = trim($_POST['email']);
    
    // Validate data.
    $errors = UserSystem::validateRegistration($real_name, $password,
      $password_confirm, $email);
    if (count($errors) > 0) {
      header("Location: start?failure=registration&reason="
        .join(",", $errors));
      exit();
    }
    
    // If data is all valid, then handle the registration.
    $result = UserSystem::handleRegistration($real_name, $password,
      $password_confirm, $email);
    
    // Report possible database errors.
    if ($result === false) {
      $error = UserStrings::REG_DATABASE_FAILED;
      header("Location: start?failure=registration&reason=$error");
      exit();
    }
    
    // Otherwise, set user session variable and redirect to main My 101 page.
    else {
      $_SESSION["user"] = $result;
      header("Location: /me");
    }
  }
  
  // Handle a log in.
  elseif ($_POST["action"] === "login") {
    // Get data.
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    
    // Check login.
    $user = UserSystem::login($email, $password);
    
    // Login failed.
    if ($user === false) {
      $error = UserStrings::LOGIN_FAILED;
      header("Location: start?failure=login&reason=$error");
    }
    
    // Otherwise, set user session variable and redirect to main My 101 page.
    else {
      $_SESSION["user"] = $user;
      header("Location: /me");
    }
  }
  
  else {
    exit();
  }
}

if (isset($_GET["action"])) {
  if ($_GET["action"] === "logout") {
    UserSystem::logout();
    header("Location: start");
  }
}
?>
<!doctype html>
<html>
<head>
      <?php $head = new HeadWidget();
      echo $head->setTitle("Web Dev 101")
        ->addCss(array("webdev101-2.css", "home.css"))
        ->addScript(array("jquery.js", "header.js", "home.js"))
        ->toHtml();
      ?>
			<script type="text/javascript" src="js/start.js"></script>
			<script>
			$(document).ready(function() {
			init();
			});
			</script>
  </head>
<body>
    
	  <?php $header = new HeaderWidget(); echo $header->toHtml(); ?>
		
	<div id="content" class="contentBox">

  <?php
  if (isset($_GET["failure"])) {
    $failure = $_GET["failure"];
    $reasons = explode(",", $_GET["reason"]);
    $errorWord = "Error";
    if (count($reasons) > 1) {
      $errorWord = "Errors";
    }
  ?>
  <div class="errorBox">
    <h3><?php echo $errorWord ?> with <?php echo $failure ?>:</h3>
    <?php
    foreach ($reasons as $reason) {
      if (isset(UserStrings::$strings[$reason])) {
        echo UserStrings::$strings[$reason]."<br />";
      }
    }
    ?>
  </div>
  <?php
    }
  ?>
  
  <h2>My 101</h2>
  <div class="form">
    <h3>Log in</h3>
    <p>Log in to start using My 101.</p>
    <form action="start" name="login" method="post">
      <input type="hidden" name="action" value="login" />
      <table>
        <tr>
          <td>Email:</td>
          <td><input type="text" name="email" class="textInput" tabindex="1" /></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input type="password" name="password" class="textInput" tabindex="2" /></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" tabindex="3" value="Log in" />
        </tr>
      </table>
    </form>
  </div>

  <div class="form">
    <h3>Register</h3>
    <p>No account? Register here.</p>
    <form action="start" name="register" id="register" method="post">
      <input type="hidden" name="action" value="register" />
      <table>
        <tr>
          <td>Your name:</td>
          <td><input type="text" name="real_name" class="textInput" tabindex="4" /></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input type="password" name="password" class="textInput" tabindex="5" /></td>
        </tr>
        <tr>
          <td>Confirm password:</td>
          <td><input type="password" name="password_confirm" class="textInput" tabindex="6" /></td>
        </tr>
        <tr>
          <td>Email:</td>
          <td><input type="text" name="email" class="textInput" tabindex="7" /></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" disabled="disabled" tabindex="8"
            value="Register" title="Click to register your Web Dev 101 account. If the button is disabled, then verify the fields are filled out correctly." /></td>
        </tr>
      </table>
    </form>
  </div>

</div>

	<?php $footer = new FooterWidget(); echo $footer->toHtml(); ?>


</body>
</html>
<?php
}

/*
If config has version == 2,
*/
elseif ($config->get("webdev101", "VERSION") == 2) {
?>
<!doctype html>
<html>
<head>
    <?php echo makeHeadSectionAll($title); ?>
    <?php echo makeAnalytics(); ?>
    <script type="text/javascript" src="js/start.js"></script>
    <script>
      $(document).ready(function() {
        init();
      });
    </script>
</head>
<body>
    
<?php echo makeHeader($title, $pagePath); ?>    

<div id="content" class="pageBox">

  <?php
  if (isset($_GET["failure"])) {
    $failure = $_GET["failure"];
    $reasons = explode(",", $_GET["reason"]);
    $errorWord = "Error";
    if (count($reasons) > 1) {
      $errorWord = "Errors";
    }
  ?>
  <div class="errorBox">
    <h3><?php echo $errorWord ?> with <?php echo $failure ?>:</h3>
    <?php
    foreach ($reasons as $reason) {
      if (isset(UserStrings::$strings[$reason])) {
        echo UserStrings::$strings[$reason]."<br />";
      }
    }
    ?>
  </div>
  <?php
    }
  ?>
  
  <h2>My 101</h2>
  <div class="form">
    <h3>Log in</h3>
    <p>Log in to start using My 101.</p>
    <form action="start" name="login" method="post">
      <input type="hidden" name="action" value="login" />
      <table>
        <tr>
          <td>Email:</td>
          <td><input type="text" name="email" class="textInput" tabindex="1" /></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input type="password" name="password" class="textInput" tabindex="2" /></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" tabindex="3" value="Log in" />
        </tr>
      </table>
    </form>
  </div>

  <div class="form">
    <h3>Register</h3>
    <p>No account? Register here.</p>
    <form action="start" name="register" id="register" method="post">
      <input type="hidden" name="action" value="register" />
      <table>
        <tr>
          <td>Your name:</td>
          <td><input type="text" name="real_name" class="textInput" tabindex="4" /></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input type="password" name="password" class="textInput" tabindex="5" /></td>
        </tr>
        <tr>
          <td>Confirm password:</td>
          <td><input type="password" name="password_confirm" class="textInput" tabindex="6" /></td>
        </tr>
        <tr>
          <td>Email:</td>
          <td><input type="text" name="email" class="textInput" tabindex="7" /></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" disabled="disabled" tabindex="8"
            value="Register" title="Click to register your Web Dev 101 account. If the button is disabled, then verify the fields are filled out correctly." /></td>
        </tr>
      </table>
    </form>
  </div>

  

</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');
?>

</body>
</html>

<?php } else {
$title = 'Learn HTML, CSS, and Javascript easily';
$pagePath = '/me';

include_once($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/php/feature.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/php/whiteboard.php');
?>

<!doctype html>
<html>
<head>
    <?php echo makeHeadSectionAll($title); ?>
    <?php echo makeAnalytics(); ?>
    <script type="text/javascript" src="js/start.js"></script>
    <script>
      $(document).ready(function() {
        init();
      });
    </script>
</head>
<body>
    
<?php echo makeHeader($title, $pagePath); ?>    

<div id="content" class="pageBox">

  <?php
  if (isset($_GET["failure"])) {
    $failure = $_GET["failure"];
    $reasons = explode(",", $_GET["reason"]);
    $errorWord = "Error";
    if (count($reasons) > 1) {
      $errorWord = "Errors";
    }
  ?>
  <div class="errorBox">
    <h3><?php echo $errorWord ?> with <?php echo $failure ?>:</h3>
    <?php
    foreach ($reasons as $reason) {
      if (isset(UserStrings::$strings[$reason])) {
        echo UserStrings::$strings[$reason]."<br />";
      }
    }
    ?>
  </div>
  <?php
    }
  ?>
  
  <h2>My 101</h2>
  <div class="form">
    <h3>Log in</h3>
    <p>Log in to start using My 101.</p>
    <form action="start" name="login" method="post">
      <input type="hidden" name="action" value="login" />
      <table>
        <tr>
          <td>Email:</td>
          <td><input type="text" name="email" class="textInput" tabindex="1" /></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input type="password" name="password" class="textInput" tabindex="2" /></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" tabindex="3" value="Log in" />
        </tr>
      </table>
    </form>
  </div>

  <div class="form">
    <h3>Register</h3>
    <p>No account? Register here.</p>
    <form action="start" name="register" id="register" method="post">
      <input type="hidden" name="action" value="register" />
      <table>
        <tr>
          <td>Your name:</td>
          <td><input type="text" name="real_name" class="textInput" tabindex="4" /></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input type="password" name="password" class="textInput" tabindex="5" /></td>
        </tr>
        <tr>
          <td>Confirm password:</td>
          <td><input type="password" name="password_confirm" class="textInput" tabindex="6" /></td>
        </tr>
        <tr>
          <td>Email:</td>
          <td><input type="text" name="email" class="textInput" tabindex="7" /></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" disabled="disabled" tabindex="8"
            value="Register" title="Click to register your Web Dev 101 account. If the button is disabled, then verify the fields are filled out correctly." /></td>
        </tr>
      </table>
    </form>
  </div>

  

</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');
?>

</body>
</html>

<?php } ?>