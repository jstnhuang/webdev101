<!--
    TEMPLATE CHECKLIST
    - Change $title.
    - Change $pagePath.
    - Change loadTutorial(6) to the number of pages in the tutorial.
    - Change pages so that it's an array of the titles for the page.
    - Add <div class="page" id="page-n"> for as many pages as you have.
    - Make a new Google Form with a single paragraph question: "What was the
      most unclear concept in this tutorial?" and add it to the end of the last
      page. Set the height of its iframe to 600px.
    - Delete this checklist when done so it doesn't appear in the page source.
-->

<?php
$title = 'Template tutorial';
$pagePath = '/tutorials/template';

include_once($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/php/feature.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/php/tutorials.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/php/whiteboard.php');
?>

<!doctype html>
<html>
<head>
    <?php echo makeHeadSectionAll($title); ?>
    <script><!--
    $('#allPages').ready(function(){
        loadTutorial(6);
    });
    --></script>
    <?php echo makeAnalytics(); ?>
</head>
<body>
    
<?php echo makeHeader(null, $pagePath); ?>    

<?php
$pages = array(
    'Page title 1',
    'Page title 2',
    'Page title 3',
    'Page title 4',
    'Page title 5',
    'Page title 6'
);

echo makeTutorialFeature($title, $pages);
?>

<div id="content" class="pageBox">
    <div class="loading">
        <?php echo makeLoadingDiv(); ?>
    </div>

    <div id="currentPage"></div>
    
    <div class="pageButtons"></div>
    
    <div id="allPages">
        <div class="page" id="page-1">
            <h2>Page title 1</h2>
            <h3>editable=true, height=4, showCode=true</h3>
            <?php echo makeWhiteboard('template_1-standard',
                true, true, 4, 4,
'Hello world!<br />\n\
I\\\'ve got a problem: apostrophes are <strong>hard</strong> to add in.\n\
So are backslashes (\\\).',
'strong {\n\
  color: red;\n\
}', 0); ?>
        </div>
        <div class="page" id="page-2">
            <h2>Page title 2</h2>
            <h3>editable=false, height=4, showCode=true</h3>
            <?php echo makeWhiteboard('template-2-demo-readonly',
                false, true, 4, 4,
'Hello world!<br />\n\
I\\\'ve got a problem: apostrophes are <strong>hard</strong> to add in.\n\
So are backslashes (\\\).',
'strong {\n\
  color: red;\n\
}', 0); ?>
            
        </div>
        <div class="page" id="page-3">
            <h2>Page title 3</h2>
            <h3>editable=(doesn't matter), height=4, showCode=false</h3>
            <p>Can you simulate this?</p>
            <?php echo makeWhiteboard('template-3-demo-noShowCode',
                false, false, 4, 4, 
'Hello world!<br />\n\
I\\\'ve got a problem: apostrophes are <strong>hard</strong> to add in.\n\
So are backslashes (\\\).',
'strong {\n\
  color: red;\n\
}', 0); ?>
        </div>
        <div class="page" id="page-4">
            <h2>Page title 4</h2>
            <p>What is the airspeed velocity of an unladen swallow?</p>
            <?php echo makeSolution(
'Well, is it an African or a European swallow?'); ?>
        </div>
        <div class="page" id="page-5">
            <h2>Page title 5</h2>
            <p>You can put whiteboards inside solution boxes, as well.</p>
            <?php echo makeSolution(makeWhiteboard('template-5-demo-sol',
                false, true, 4, 4,
'Hello world!<br />\n\
I\\\'ve got a problem: apostrophes are <strong>hard</strong> to add in.\n\
So are backslashes (\\\).',
'strong {\n\
  color: red;\n\
}', 0)); ?>
        </div>
        <div class="page" id="page-6">
            <h2>Page title 6</h2>
            <p><span class="code">Code span</span></p>
            <p><span class="term">Term span</span></p>
            <p><span class="code term">Code term span</span></p>
            
            <h3>Tutorial survey</h3>
            <p>You can help us improve our tutorials by answering one question for us:</p>
            <iframe src="https://spreadsheets.google.com/embeddedform?formkey=dEoyU3Y5d2ZySy0xcEJZT2ZnTzBTb2c6MA" width="760" height="600" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
        </div>
    </div>
</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');
?>

</body>
</html>