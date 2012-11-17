<?php
$title = 'The tutorials';
$pagePath = '/tutorials';

include_once($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/php/feature.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/php/whiteboard.php');
?>

<!doctype html>
<html>
<head>
    <?php echo makeHeadSectionAll($title); ?>
    <link rel="stylesheet" type="text/css" href="/css/tutorials.css" />
    <?php echo makeAnalytics(); ?>
</head>
<body>
    
<?php echo makeHeader($title, $pagePath); ?>    

<?php echo makePhotoFeature('/images/features/tutorials.jpg',
    '200px',
    'A Web Dev 101 workshop being held at the San Diego Supercomputer Center at the UC San Diego campus on May 22, 2010.'); ?>

<div id="content" class="pageBox">

    <h2>Many paths to web development</h2>
    <p>Getting started in web development means learning two main languages:
    HTML, which defines the content of your website, and CSS, which defines the
    appearance of your website. If you want to start from the beginning, go
    through the core tutorials, which cover the basics of both.</p>
    
    <p>After that, our tutorials split into two tracks&mdash;one which goes
    deeper into HTML and another which goes deeper into CSS. We hope you go
    through and enjoy them all!</p>
    
    <div class="tutorialListBox coreTutorials">
        <span class="tutorialBoxTitle">Core tutorials (start here!)</span>
        <ol>
            <li><a href="html-basics">HTML basics</a></li>
            <li><a href="css-basics">CSS basics</a></li>
            <li><a href="javascript-basics">Javascript basics</a></li>
        </ol>
    </div>
    <div id="nonCoreTutorials">
        <div class="tutorialsTrack">
            <div class="tutorialListBox">
                <span class="tutorialBoxTitle">HTML tutorials</span>
                <ol>
                    <li><a href="html-tables">Tables</a></li>
                    <li>Special characters</li>
                    <li><a href="embedding-web-services">
                        Embedding web services</a></li>
                </ol>
            </div>
        </div>
        <div class="tutorialsTrack">
            <div class="tutorialListBox">
                <span class="tutorialBoxTitle">CSS tutorials</span>
                <ol>
                    <li><a href="box-model">The box model</a></li>
                    <li><a href="css-layout">CSS layout</a></li>
                </ol>
            </div>
            <div class="tutorialListBox">
                <span class="tutorialBoxTitle">CSS layout examples</span>
                <ol>
                    <li>Left-hand navigation</li>
                    <li>Top navigation</li>
                    <li>Three-column navigation</li>
                </ol>
            </div>
        </div>
    </div>
    
    <h2>Miscellaneous tutorials</h2>
    <p>These tutorials don't depend on anything you learn in the above tutorials,
    but they have good information you might want to know.</p>
    <div class="tutorialListBox" id="miscTutorials">
        <span class="tutorialBoxTitle">Miscellaneous</span>
        <ol>
            <li><a href="about-html-css">About HTML and CSS</a></li>
            <li><a href="html-crash-course">HTML crash course</a></li>
            <li>Web development tools</li>
            <li>What next?</li>
        </ol>
    </div>
</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');
?>

</body>
</html>