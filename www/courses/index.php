<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/../webdev101.php");
?>

<!doctype html>
<html>
  <head>
      <?php $head = new HeadWidget();
      echo $head->setTitle("Web Dev 101")
        ->addCss(array("webdev101-2.css", "two-pane-widget.css"))
        ->addScript(array("jquery.js", "two-pane-widget.js"))
        ->toHtml();
      ?>
  </head>
  <body>
    <?php $header = new HeaderWidget(); echo $header->toHtml(); ?>
    <div id="content" class="contentBox">
      <div class="tpNav">
        <h3>Getting started</h3>
        <div class="tpNavLink" name="introduction">
          <a href="introduction">Introduction</a>
        </div>
        <div class="tpNavLink" name="html-basics">
          <a href="html-basics">HTML basics</a>
        </div>
        <div class="tpNavLink" name="css-basics">
          <a href="css-basics">CSS basics</a>
        </div>
        
        <h3>HTML tutorials</h3>
        <div class="tpNavLink" name="html-tables">
          <a href="html-tables">HTML tables</a>
        </div>
        <div class="tpNavLink" name="html-web-services">
          <a href="html-web-services">Adding web services</a>
        </div>
      </div>
      <div class="tpContentArea">
        <div class="tpContentAreaPadding">
          <div class="tpContent" name="default">
            <h3>Web Dev 101 courses</h3>
            <p>Hover over one of the courses on the left for a description.</p>
          </div>
          <div class="tpContent" name="introduction">
            <h3>Introduction to Web Dev 101</h3>
            <p>Web development is one of the most useful skills you can learn. We
            make it easy.</p>
            <a href="introduction" class="bigButton highlight">Start: Introduction</a>
          </div>
          <div class="tpContent" name="html-basics">
            <h3>HTML basics</h3>
            <p>The building blocks for a website. We put them together, one at a
            time.</p>
            <a href="html-basics" class="bigButton highlight">Start: HTML basics</a>
          </div>
          <div class="tpContent" name="css-basics">
            <h3>CSS basics</h3>
            <p>Web development becomes beautiful, once we learn to style our
            site with CSS.</p>
            <a href="html-basics" class="bigButton highlight">Start: CSS basics</a>
          </div>
          <div class="tpContent" name="html-tables">
            <h3>HTML tables</h3>
            <p>The perfect HTML element for structured data.</p>
            <a href="html-basics" class="bigButton highlight">Start: HTML tables</a>
          </div>
          <div class="tpContent" name="html-web-services">
            <h3>Adding web services</h3>
            <p>Some easy ways to add great functionality to your site.</p>
            <a href="html-basics" class="bigButton highlight">Start: Adding web services</a>
          </div>
        </div>
      </div>
    </div>
    <?php $footer = new FooterWidget(); echo $footer->toHtml(); ?>
  </body>
</html>