<?php
require_once(dirname(dirname(dirname(__FILE__)))."/config/Config.php");

if ($config->get("webdev101", "VERSION") == 3) {
require_once(dirname(dirname(dirname(__FILE__)))."/webdev101.php");
session_start();
$user = UserSystem::getLoggedInUser();
if ($user === false) {
  header("Location: /me");
}
?>

<!doctype html>
<html>
  <head>
    <?php $head = new HeadWidget();
    echo $head->setTitle("Web Dev 101 Internal")
      ->addCss(array("webdev101-2.css", "two-pane-widget.css"))
      ->addScript(array("jquery.js", "home.js"))
      ->toHtml();
    ?>
  </head>
  <body>
    <?php $header = new HeaderWidget(); echo $header->toHtml(); ?>
    <div id="content" class="pageBox">
      <div class="twoPaneWidget">
        <div class="tpNav">
          <ul>
            <li><a href="#" class="tpNavLink">Create course</a></li>
          </ul>
        </div>
        <div class="tpContentArea">
          Test!!!!
        </div>
      </div>
    </div>
    <?php $footer = new FooterWidget(); echo $footer->toHtml(); ?>
  </body>
</html>

<?php
}
?>