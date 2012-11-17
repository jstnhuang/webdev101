<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/../config/Config.php");

if ($config->get("webdev101", "VERSION") == 3) {

require_once(dirname(dirname(__FILE__))."/webdev101.php");
$whiteboard = new WhiteboardWidget("full-page-whiteboard");
$whiteboard->setHeight(42);
?>

<!doctype html>
<html>
  <head>
    <?php $head = new HeadWidget();
    echo $head->setTitle("Web Dev 101 - Full page whiteboard")
      ->addCss(array("webdev101-2.css", "whiteboard.css"))
      ->addScript(array("jquery.js", "jquery.taboverride-1.0.js",
        "html-sanitizer.js", "whiteboard.js", "home.js"))
      ->toHtml();
    ?>
  </head>
  <body>
    <?php $header = new HeaderWidget(); echo $header->toHtml(); ?>
    <div id="content">
      <?php
        $whiteboard = new WhiteboardWidget("full-page-whiteboard");
        $whiteboard->setHeight(42);
        echo $whiteboard->toHtml();
      ?>
    </div>
    <?php $footer = new FooterWidget(); echo $footer->toHtml(); ?>
  </body>
</html>

<?php
}

elseif ($config->get("webdev101", "VERSION") == 2) {

require_once($_SERVER["DOCUMENT_ROOT"]."/../widgets/Widget.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/../widgets/core/Document/DocumentWidget.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/../widgets/core/Body/BodyWidget.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/../widgets/standard/StandardBody/StandardBodyWidget.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/../widgets/whiteboard/WhiteboardWidget.php");

$whiteboard = new WhiteboardWidget("full-page-whiteboard");
$whiteboard->setHeight(42);

$document = new DocumentWidget();
$document
  ->setTitle("Web Dev 101 whiteboard")
  ->setFavicon("/favicon.ico")
  ->addExternalCss("http://fonts.googleapis.com/css?family=Open+Sans")
  ->setBody(new StandardBodyWidget($whiteboard));

echo $document->toHtml();

?>

<?php } else { 
$title = 'Full-page code whiteboard';
$pagePath = '/whiteboard';

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
    
<?php echo makeHeader($title, $pagePath); ?>

<div id="content" class="fullPage">
    <?php echo makeWhiteboard(
        'full-page-whiteboard', true, true, 20, 50, '', '', 0); ?>
    <script><!--
        initWhiteboardById("full-page-whiteboard");
    --></script>
</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');
?>

</body>
</html>

<?php } ?>