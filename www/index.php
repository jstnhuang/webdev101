<?php
require_once(dirname(dirname(__FILE__))."/config/Config.php");

if ($config->get("webdev101", "VERSION") == 3) {
require_once(dirname(dirname(__FILE__))."/webdev101.php");
?>
<!doctype html>
<html>
  <head>
    <?php $head = new HeadWidget();
    echo $head->setTitle("Web Dev 101")
      ->addCss(array("webdev101-2.css", "home.css"))
      ->addScript(array("jquery.js", "header.js", "home.js"))
      ->toHtml();
    ?>
  </head>
  <body>
    <?php $header = new HeaderWidget(); echo $header->toHtml(); ?>
    <div id="content">
      <div class="homeInfo">
        <div class="homeInfoNav">
          <ul>
            <li><a href="#learn" name="learn">Learn</a></li>
            <li><a href="#experiment" name="experiment">Experiment</a></li>
            <li><a href="#personalize" name="personalize">Personalize</a></li>
          </ul>
        </div>
        <div class="homeInfoContainer">
          <div class="homeInfoDescription" id="learn">
            <h1>Welcome to Web Dev 101</h1>
            
            <div class="homeInfoFeature">
              <img src="images/home/fake-youtube-small.jpg" />
            </div>
            
            <p>Here you can learn to program websites in HTML, CSS, and
            Javascript.</p>
            
            <a href="/tutorials" class="bigButton highlight">&gt;&gt; View our video courses</a>
            
            <h2>Beginner-friendly</h2>
            <p>Our lessons are designed for beginners, so don't worry if
            you've never programmed before.</p>

            <h2>Your online reference</h2>
            <p>Each lesson comes with a set of online notes, stored in the Web
            Dev 101 notebook. So, you can quickly remember what you learned.</p>
            <h2>Why learn web development?</h2>
            <p>There are so many good reasons to learn with us!
              <ol>
                <li>Website programming is a useful skill to have.</li>
                <li>You can express your creativity in web development as much as your engineering skill.</li>
                <li>You already have all the tools to learn: you and your web browser!</li>
              </ol>
            </p>
          </div>
          
          <div class="homeInfoDescription" id="experiment">
            <h1>Experiment and learn by doing</h1>
            <p>The best way to learn is to practice. We
            give you plenty of chances to do just that!</p>
            <a href="/whiteboard" class="bigButton highlight">&gt;&gt; Go to the whiteboard</a>
            
            <h2>Interactive code editor</h2>
            <p>Our online editor is one of a kind. Just start typing code into our whiteboard, and you'll automatically begin to see the
            resulting web page immediately.</p>
            
            <h2>No special tools required</h2>
            <p>No special tools or expensive software packages required. You
            just need to browse to our whiteboard, and you can save your code 
            to our cloud.</p>
            
            <h2>Learning through practice</h2>
            <p>Every tutorial comes with a set of interactive exercises, so you
            can do actual programming as you learn, and get feedback on your
            results.</p>
            
          </div>
          
          <div class="homeInfoDescription" id="personalize">
            <h1>Personalized learning</h1>
            <p>Create a Web Dev 101 account to personalize your learning
            experience.</p>
            <a href="/me" class="bigButton highlight">&gt;&gt; Create an account</a>
            
            <h2>Host web pages online</h2>
            <p>All Web Dev 101 users can create their own online websites,
            and save it to our cloud. It's a great way to create
            a personal website or showcase what you've learned!</p>
            
            <h2>Personalized notebook</h2>
            <p>Web Dev 101 users can add their own notes to their notebook, in
            addition to the ones that come with each course.</p>
            
            <h2>Track your progress</h2>
            <p>Log in with your Web Dev 101 account, and we'll keep track of
            the courses and exercises you've completed, and save all your
            work!</p>
          </div>
        </div>
      </div>
    </div>
    <?php $footer = new FooterWidget(); echo $footer->toHtml(); ?>
  </body>
</html>
<?php
}

elseif ($config->get("webdev101", "VERSION") == 2) {

require_once($_SERVER["DOCUMENT_ROOT"]."/../widgets/Widget.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/../widgets/core/Document/DocumentWidget.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/../widgets/standard/StandardBody/StandardBodyWidget.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/../widgets/standard/ContentBox/ContentBoxWidget.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/../widgets/standard/StandardHeader/StandardHeaderWidget.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/../widgets/home/HomeContentWidget.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/../widgets/standard/StandardFooter/StandardFooterWidget.php");

$document = new DocumentWidget();
$document
  ->setTitle("Web Dev 101")
  ->setFavicon("/favicon.ico")
  ->addExternalCss("http://fonts.googleapis.com/css?family=Open+Sans")
  ->setBody(new StandardBodyWidget(new ContentBoxWidget(
    new HomeContentWidget()
  )));

echo $document->toHtml();

?>

<?php } else {
include_once($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/php/feature.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/php/whiteboard.php');
$title = 'Learn HTML, CSS, and Javascript easily';
$pagePath = '/';
?>

<!doctype html>
<html>
<head>
    <?php echo makeHeadSectionAll($title); ?>
    <?php echo makeAnalytics(); ?>
</head>
<body>
    
<?php echo makeHeader($title, $pagePath); ?>    

<?php echo makePhotoFeature('/images/features/home.jpg',
    '200',
    'A Web Dev 101 workshop being held at the UC San Diego campus in La Jolla on November 13, 2010.'); ?>

<div id="content" class="pageBox">

<div class="socialBox">
  
  <div class="g-plus" data-href="https://plus.google.com/108571036171498305603" data-size="badge"></div>
  <br />
  
  <iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FWeb-Dev-101%2F188225361197871&amp;width=292&amp;colorscheme=light&amp;show_faces=true&amp;stream=true&amp;header=true&amp;height=427" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:427px; margin-left:5px; background-color: white" allowTransparency="true"></iframe>
</div>

<h2>Want to learn to make a website?</h2>
<p>It's easy! Not only that, but it's one
of the most useful skills you can acquire. That's why we, a bunch of computer
science undergrads at <a href="http://ucsd.edu">UC San Diego</a>, created the
series of step-by-step tutorials available on this website. We did this because
we've seen all the benefits that knowing how to program a website has, and want
to share our knowledge with everyone. Here are some of those benefits:</p>
<ol>
    <li><span class="listTitle">Try this at home:</span> To practice
    soccer, you need a soccer field. So, to practice web programming, you
    need special software and your own web server, right? Actually, no. You can
    practice web programming on any computer, without any special software,
    any time of day (or night), for free!</li>
    <li><span class="listTitle">Art and science:</span> Making a website
    isn't just a technical exercise to increase brain power, it's also a
    chance for you to express your creativity. Let those creative juices
    flow, and let's make the web a more colorful and interesting place!</li>
    <li><span class="listTitle">Endless potential:</span> The skills
    you'll learn from our tutorials are simple, but that doesn't mean 
    they're just for beginners! In fact, you'll be writing the same basic
    code that real, professional web programmers do all the time!</li>
</ol>
			
<h2>Wait, I've got no programming experience!</h2>
<p>Don't worry, join the crowd! Our tutorials start you off without 
assuming that you've programmed before. Each tutorial builds on the next,
and by the end, even those with programming experience might have something
to learn. So, just take them one at a time, go at your own pace, and enjoy!
</p>
<p>To get started, just click on <a href="tutorials">The Tutorials</a>
here or at the top of this page.</p>
			
<h2>Workshops</h2>
<p>Not only have we created this set of tutorials, we've also got live 
workshops to go with it! These workshops are a great way to meet the  
students who wrote these tutorials, and learn from their experience. In the
workshop, we go through the first few tutorials as time allows, and bring
USB keys with tutorials and programming software preloaded. A list of
upcoming events is on the <a href="workshops">Workshops</a> page. If
you're interested in having a workshop with us, please contact us at
<a href="http://mailhide.recaptcha.net/d?k=011fYV_FKGMU8Ay14TZUlojA==&amp;c=rNMs6MU7rJ3qJ1RAr1UZ_Q==" onclick="window.open('http://mailhide.recaptcha.net/d?k=011fYV_FKGMU8Ay14TZUlojA==&amp;c=rNMs6MU7rJ3qJ1RAr1UZ_Q==','','toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300');return false;" title="Reveal this e-mail address">cs..@ucsd.edu</a>.</p>
			
<h2>Who are we, anyway?</h2>
<p>We are members of the <a href="http://cses.ucsd.edu">Computer Science 
and Engineering Society</a> at UC San Diego, a student chapter of the
<a href="http://acm.org">ACM</a>. As undergraduate computer science majors,
there are two things we don't like: early morning classes, and having
nothing fun to do. Projects like this are our way of getting together to
work on cool stuff outside of class. We also do fun stuff like bonfires and
game nights, and do all sorts of activities with
<a href="http://tesc.ucsd.edu">other engineering majors</a>. To learn more
about us, visit the <a href="about">About Us</a> page.</p>

</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');
?>

</body>
</html>

<?php } ?>