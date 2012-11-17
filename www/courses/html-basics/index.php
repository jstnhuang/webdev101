<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/../webdev101.php");
?>

<!doctype html>
<html>
  <head>
      <?php $head = new HeadWidget();
      echo $head->setTitle("Web Dev 101")
        ->addCss(array("webdev101-2.css", "courses.css", "whiteboard.css"))
        ->addScript(array("jquery.js", "jquery.taboverride-1.0.js",
        "html-sanitizer.js", 'header.js', "tutorials.js", "whiteboard.js"))
        ->toHtml();
      ?>
  </head>
  <body>
    <?php $header = new HeaderWidget(); echo $header->toHtml(); ?>
    
    <div id="main" class="course">
      <h1>HTML basics</h1>
      <div class="courseVideo">
        <div class="courseVideoWrapper">
          <iframe width="640" height="480" src="http://www.youtube.com/embed/JZ-V0fmBlrg?rel=0&wmode=transparent" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      <h2>Exercises</h2>
      <div class="exercises contentBox">
        <div class="exercise">
          <h3>1: Italics and bold</h3>
          <p>Try italicizing "quick brown fox" and bolding "lazy dog."</p>
          <?php
            $whiteboard = new WhiteboardWidget("html-basics-italics-and-bold");
            $whiteboard->setHeight(3)
              ->setHtml("The quick brown fox jumped over the lazy dog.");
            echo $whiteboard->toHtml();
          ?>
        </div>
        <div class="exercise">
          <h3>2: Underline</h3>
          <p>To underline a piece of text, use the
          <span class="code">&lt;u&gt;</span> tag. Try underlining the word
          "LOVE" below.</p>
          <?php
            $whiteboard = new WhiteboardWidget("html-basics-underline");
            $whiteboard->setHeight(3)
              ->setHtml("Dogs LOVE to play fetch!");
            echo $whiteboard->toHtml();
          ?>
        </div>
      </div>
    </div>
    <?php $footer = new FooterWidget(); echo $footer->toHtml(); ?>
  </body>
</html>