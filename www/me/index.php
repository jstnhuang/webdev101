<?php
  

require_once($_SERVER["DOCUMENT_ROOT"]."/../config/Config.php");
require_once($_SERVER['DOCUMENT_ROOT'].'/../users/UserSystem.php');
  
session_start();
$user = UserSystem::getLoggedInUser();
if ($user === false) {
  header("Location: start");
}

if (isset($_POST["action"])) {
  $password_old     = trim( $_POST['password_old']);
  $password_new     = trim( $_POST['password_new']);
  $password_confirm = trim( $_POST['password_confirm']);

  if ($_POST["action"] === "changePassword") {
    $errors = UserSystem::updatePassword( $user, $password_old,
    $password_new, $password_confirm );
    if (count($errors) > 0) {
      header("Location: ?failure=password%20change&reason="
      .join(",", $errors));
    exit();
    }
    else {
      $errors = UserStrings::PASSWORD_CHANGE_SUCCESS;
      header("Location: ?success=password%20change&message=password_change_success");
    }
  }
}

if ($config->get("webdev101", "VERSION") == 3) {
require_once($_SERVER["DOCUMENT_ROOT"]."/../webdev101.php");
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
			<script type="text/javascript" src="js/me.js"></script>
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
		elseif( isset( $_GET["success"])) {
    $success = $_GET["success"];
    $messages = explode(",", $_GET["message"]);
  ?>
  <div class="errorBox">
    <h3>Successful <?php echo $success ?>:</h3>
    <?php
    foreach ($messages as $message) {
      if (isset(UserStrings::$strings[$message])) {
        echo UserStrings::$strings[$message]."<br />";
      }
    }
    ?>
  </div>
	<?php
    }
	?>
	<p class="greetBar">Welcome, <?php echo $user->real_name ?>!
	<a href="start?action=logout">(Logout)</a></p>
		<div class="form">
			<h3>Change password</h3>
			<p>Enter your old password and your desired new password</p>
			<form action="index" name="changePassword" method="post">
				<input type="hidden" name="action" value="changePassword" />
				<table>
					<tr>
						<td>Old Password:</td>
						<td><input type="password" name="password_old" class="textInput" tabindex="1" /></td>
					</tr>
					<tr>
						<td>New Password:</td>
						<td><input type="password" name="password_new" class="textInput" tabindex="2" /></td>
					</tr>
					<tr>
						<td>Confirm New Password:</td>
						<td><input type="password" name="password_confirm" class="textInput" tabindex="3" /></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" tabindex="4" value="Update" />
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
  $title = 'Learn HTML, CSS, and Javascript easily';
  $pagePath = '/me';
  require_once($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
  require_once($_SERVER['DOCUMENT_ROOT'].'/php/feature.php');
  require_once($_SERVER['DOCUMENT_ROOT'].'/php/whiteboard.php');
?>

<!doctype html>
<html>
<head>
  <?php echo makeHeadSectionAll($title); ?>
  <?php echo makeAnalytics(); ?>
  <script type="text/javascript" src="js/me.js"></script>
  <script>
    $(document).ready(function() {
      init();
    });
  </script>
</head>
<body>
    
<?php echo makeHeader($title, $pagePath); ?>    

<div id="content" class="pageBox">
<p class="greetBar">Welcome, <?php echo $user->real_name ?>!
  <a href="start?action=logout">(Logout)</a></p>
</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');
?>

</body>
</html>

<?php } else {
include_once($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/php/feature.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/php/whiteboard.php');
?>

<!doctype html>
<html>
	<head>
    <?php echo makeHeadSectionAll($title); ?>
    <?php echo makeAnalytics(); ?>
	</head>
	<body>
	
	<div id="content" class="pageBox">
	<p class="greetBar">Welcome, <?php echo $user->real_name ?>!
	<a href="start?action=logout">(Logout)</a></p>
	</div>

	<?php echo makeHeader($title, $pagePath); ?>
	<?php
	require_once($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');
	?>
	</body>
</html>

<?php } ?>
