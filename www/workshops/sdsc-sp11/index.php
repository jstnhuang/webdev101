<?php
$title = 'SDSC Spring 2011 workshops';
$pagePath = '/workshops/sdsc-sp11';

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
    
    <h3>May 3, 2011</h3>
    <p>Welcome! Request a username below:</p>
    <iframe src="https://spreadsheets.google.com/a/webdev101.net/spreadsheet/embeddedform?formkey=dHZvd25TR3NCUnlLSlI0aVItcVBfeXc6MQ" width="760" height="360" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>

    <h2 id="upcoming">Upcoming workshops</h2>
    <p>Here is a calendar of our upcoming workshops:</p>
    <iframe src="https://www.google.com/calendar/b/0/embed?title=Web%20Dev%20101%20workshops&amp;mode=AGENDA&amp;height=400&amp;wkst=1&amp;bgcolor=%23ccccff&amp;src=g3ilpvdi06gg4u3bugo0mlhj8c%40group.calendar.google.com&amp;color=%230D7813&amp;ctz=America%2FLos_Angeles" style=" border-width:0 " width="100%" height="400" frameborder="0" scrolling="no"></iframe>

</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');
?>

</body>
</html>