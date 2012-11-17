<?php
$title = 'UCSD Fall 2011 workshops';
$pagePath = '/workshops/ucsd-fa11';

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

<div id="content" class="pageBox">

    <h2 id="ucsd-wi11">Latest updates</h2>
    
    <h3>October 30, 2011</h3>
    <p>The code from today's workshop is in <a href="learning-lab-1.zip">this
    zip file</a>. Enjoy!</p>

</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');
?>

</body>
</html>