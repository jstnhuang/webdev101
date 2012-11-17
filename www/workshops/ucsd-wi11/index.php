<?php
$title = 'UCSD Winter 2011 workshops';
$pagePath = '/workshops/ucsd-wi11';

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
    
    <h3>March 10, 2011</h3>
    <p>Welcome to workshop 5! <a href="https://spreadsheets.google.com/a/webdev101.net/viewform?hl=en&formkey=dFVFRGh0NmF4d2c5VnpPaURZN3pHS0E6MA#gid=0" target="_blank">Please sign in here.</a></p>
    <p>Here's today's <a href="https://spreadsheets.google.com/a/webdev101.net/viewform?formkey=dFNTTC1YOHV5QjBxTF9CVVBZSXc2emc6MA#gid=0" target="_blank">feedback form</a>
    <p>We will not be using our website today. Instead, download
    <a href="card.zip">this zip file</a>.</p>
    <p>If you are interested in helping out with our Spring 2011 workshops with
    middle schoolers at the San Diego Supercomputer Center, please contact
    us. Otherwise, thanks for being with us!</p>

    <h3>February 24, 2011</h3>
    <p>Welcome to workshop 4! <a href="https://spreadsheets.google.com/a/webdev101.net/viewform?formkey=dFk5eTNYMDlwZE5ZeGtYRHp1MU1JMXc6MA#gid=0" target="_blank">Please sign in here.</a></p>
    <p>Here's today's <a href="https://spreadsheets0.google.com/a/webdev101.net/viewform?formkey=dEFvQmsxeVdmemFvRlZkdy1OUmFpQkE6MA#gid=0" target="_blank">feedback form</a>.
    
    <h3>February 10, 2011</h3>
    <p>Welcome to workshop 3! <a href="https://spreadsheets.google.com/a/webdev101.net/viewform?hl=en&formkey=dDhwdTN5b2Zzcmhoa0czNm9WczZmTUE6MA#gid=0" target="_blank">Please sign in here.</a></p>
    <p>Here's today's <a href="https://spreadsheets2.google.com/a/webdev101.net/viewform?formkey=dGplZG9mSng4Uy1rSFIyc3kxZmpOM0E6MA#gid=0" target="_blank">feedback form</a>.
    
    <h3>January 27, 2011</h3>
    <p>Welcome to workshop 2! <a href="https://spreadsheets.google.com/a/webdev101.net/viewform?hl=en&formkey=dFZlYk13R2k4UjdqNHJwMl9GNWE5MGc6MA#gid=0" target="_blank">Please sign in here.</a></p>
    <p>Here's today's <a href="https://spreadsheets.google.com/a/webdev101.net/viewform?hl=en&formkey=dHhtNTZWSnFUOWQ0VXlpbjRqRlhxYXc6MA#gid=0" target="_blank">feedback form</a>.
    
    <h3>January 13, 2011</h3>
    <p>Welcome! <a href="https://spreadsheets.google.com/a/webdev101.net/viewform?hl=en&pli=1&formkey=dGVadEFYTW1VQ29YdVJGdmFiSFBtYkE6MQ#gid=0" target="_blank">Please sign in here.</a></p>
    <p>Here's today's <a href="http://spreadsheets.google.com/a/webdev101.net/viewform?hl=en&formkey=dHJFdVgzdy1sYUFsV3ltLTY1amExdGc6MQ#gid=0" target="_blank">feedback form</a>. Keep it open in a tab, and if something confuses you,
    let us know!</p>
    <p>Everyone who signed up before January 13, 2011 should have been added to
    the <a href="http://groups.google.com/group/webdev101-ucsd-winter-2011" target="_blank">Web
    Dev 101 - UCSD Winter 2011</a> Google Group.</p>

    <h2 id="upcoming">Upcoming workshops</h2>
    <p>Here is a calendar of our upcoming workshops:</p>
    <iframe src="https://www.google.com/calendar/b/0/embed?title=Web%20Dev%20101%20workshops&amp;mode=AGENDA&amp;height=400&amp;wkst=1&amp;bgcolor=%23ccccff&amp;src=g3ilpvdi06gg4u3bugo0mlhj8c%40group.calendar.google.com&amp;color=%230D7813&amp;ctz=America%2FLos_Angeles" style=" border-width:0 " width="100%" height="400" frameborder="0" scrolling="no"></iframe>

</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');
?>

</body>
</html>