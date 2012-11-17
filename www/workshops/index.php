<?php
$title = 'Workshops';
$pagePath = '/workshops';

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

<?php echo makePhotoFeature('/images/features/workshops.jpg',
    '250',
    'A Web Dev 101 workshop being held at the San Diego Supercomputer Center at the UC San Diego campus on January 9, 2010.'); ?>

<div id="content" class="pageBox">

    <h2 id="links">Workshop links</h2>
    <p><a href="ucsd-fa11">UCSD Fall 2011</a> - October 30, 2011 to current.</p>
    <p><a href="sdsc-sp11">SDSC Spring 2011</a> - May 3, 2011 to June 1, 2011.</p>
    <p><a href="ucsd-wi11">UCSD Winter 2011</a> - January 13, 2011 to March 10, 2011.</p>

    <h2 id="about">About our workshops</h2>
    <p>Our workshops are meant to help people get started with HTML and CSS
    programming so that they can self-study the tutorials on our website with
    confidence. Being there in person helps us ensure that everyone's
    comfortable with the initial setup and the basics of HTML.</p>

    <p>The workshops don't follow the tutorials exactly, but you
    can expect the workshop to cover about the same material. A one-hour
    workshop will probably cover HTML and CSS basics.</a></p>

    <h2 id="signup">How do I sign up?</h2>
    <p>We currently don't do any open workshops available for sign-up.
    However, if you are an organizer for a group (for example, schools,
    clubs, community centers), we are looking for opportunities to deliver
    our workshop! Our workshop can be tailored for different lengths, from
    as little as half an hour to as much time as an academic quarter. There
    is typically no charge for a workshop. If you are interested in having
    us do one for your group, please <a href="about#h1contrib">contact
    us!</a></p>

    <h2 id="upcoming">Upcoming workshops</h2>
    <p>Here is a calendar of our upcoming workshops:</p>
    <iframe src="https://www.google.com/calendar/b/0/embed?title=Web%20Dev%20101%20workshops&amp;mode=AGENDA&amp;height=400&amp;wkst=1&amp;bgcolor=%23ccccff&amp;src=g3ilpvdi06gg4u3bugo0mlhj8c%40group.calendar.google.com&amp;color=%230D7813&amp;ctz=America%2FLos_Angeles" style=" border-width:0 " width="100%" height="400" frameborder="0" scrolling="no"></iframe>

</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');
?>

</body>
</html>