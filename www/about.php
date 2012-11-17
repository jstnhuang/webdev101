<?php
$title = 'About us';
$pagePath = '/about';

include_once($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/php/feature.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/php/whiteboard.php');
?>

<!doctype html>
<html>
<head>
    <?php echo makeHeadSectionAll($title); ?>
    <link rel="stylesheet" type="text/css" href="/css/about.css" />
    <?php echo makeAnalytics(); ?>
</head>
<body>
    
<?php echo makeHeader($title, $pagePath); ?>    

<?php echo makePhotoFeature('/images/features/about.jpg',
    '250', 'Part of the 2009 - 2010 Web Dev 101 team.'); ?>

<div id="content" class="pageBox">

    <h2 id="contributors">Project Contributors</h2>
    
    <div class="memCard">
        <img src="images/portraits/justin.jpg" width="100" height="150"
        alt="Justin Huang" title="Justin Huang" />
        <div class="memInfo">
            <span class="memName">Justin Huang</span>
            <div class="memContent">
                <span class="memPos">Project lead, Web Dev 101</span><br />
                <span class="memMaj">Computer Science, 2012</span>
            </div>
            <span class="memEmail">Email: <a href="http://www.google.com/recaptcha/mailhide/d?k=016zOznJFELXgkoculPUVXkQ==&amp;c=aJvGycG39zAGf8ywwWIcJWRoNUjXApPlI7QSqmAe9K8=" onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k\075016zOznJFELXgkoculPUVXkQ\75\75\46c\75aJvGycG39zAGf8ywwWIcJWRoNUjXApPlI7QSqmAe9K8\075', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300'); return false;" title="Reveal this e-mail address">jus...@webdev101.net</a></span>
        </div>
    </div>
    
    <div class="memCard">
        <img src="images/portraits/bulat.jpg" width="100" height="150"
        alt="Bulat Bochkariov" title="Bulat Bochkariov" />
        <div class="memInfo">
            <span class="memName">Bulat Bochkariov</span>
            <div class="memContent">
                <span class="memPos">Web Dev 101 contributor</span><br />
                <span class="memMaj">Computer Science, 2012</span>
            </div>
            <span class="memEmail">Email: <a href="http://www.google.com/recaptcha/mailhide/d?k=016zOznJFELXgkoculPUVXkQ==&amp;c=6tHReGQGAKpiRzwWZN_zg0SIU2iT5hVHmknDtocb800=" onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k\075016zOznJFELXgkoculPUVXkQ\75\75\46c\0756tHReGQGAKpiRzwWZN_zg0SIU2iT5hVHmknDtocb800\075', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300'); return false;" title="Reveal this e-mail address">bul...@webdev101.net</a></span>
        </div>
    </div>
    
    <div class="memCard">
        <img src="images/portraits/justinkw.jpg" width="100" height="150"
        alt="Justin Wong" title="Justin Wong" />
        <div class="memInfo">
            <span class="memName">Justin Wong</span>
            <div class="memContent">
                <span class="memPos">Web Dev 101 contributor</span><br />
                <span class="memMaj">Computer Science, 2011</span>
            </div>
            <span class="memEmail">Email: <a href="http://www.google.com/recaptcha/mailhide/d?k=016zOznJFELXgkoculPUVXkQ==&amp;c=j68pyRTsf44kfhX0Tli1xc8gMHV4igS7owxeILSc5-U=" onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k\075016zOznJFELXgkoculPUVXkQ\75\75\46c\75j68pyRTsf44kfhX0Tli1xc8gMHV4igS7owxeILSc5-U\075', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300'); return false;" title="Reveal this e-mail address">just...@webdev101.net</a></span>
        </div>
    </div>
    
    <div class="memCard">
        <img src="images/portraits/edgardo.jpg" width="100" height="150"
        alt="Edgardo Leija" title="Edgardo Leija" />
        <div class="memInfo">
            <span class="memName">Edgardo Leija</span>
            <div class="memContent">
                <span class="memPos">Web Dev 101 contributor</span><br />
                <span class="memMaj">Computer Science, 2013</span>
            </div>
            <span class="memEmail">Email: <a href="http://www.google.com/recaptcha/mailhide/d?k=016zOznJFELXgkoculPUVXkQ==&amp;c=K2BeA4VN-9R3j1j8L5aagA==" onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k\075016zOznJFELXgkoculPUVXkQ\75\75\46c\75K2BeA4VN-9R3j1j8L5aagA\75\075', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300'); return false;" title="Reveal this e-mail address">ele...@ucsd.edu</a></span>
        </div>
    </div>
    
    <div class="memCard">
        <img src="images/portraits/matthew.jpg" width="100" height="150"
        alt="Matthew Borger" title="Matthew Borger" />
        <div class="memInfo">
            <span class="memName">Matthew Borger</span>
            <div class="memContent">
                <span class="memPos">Web Dev 101 contributor</span><br />
                <span class="memMaj">Computer Engineering, 2013</span>
            </div>
            <span class="memEmail">Email: <a href="http://www.google.com/recaptcha/mailhide/d?k=016zOznJFELXgkoculPUVXkQ==&amp;c=s2CUXePEJC-DIIUFxoT7AhFzgZfjGlkwG9sNBlO3lRg=" onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k\075016zOznJFELXgkoculPUVXkQ\75\75\46c\75s2CUXePEJC-DIIUFxoT7AhFzgZfjGlkwG9sNBlO3lRg\075', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300'); return false;" title="Reveal this e-mail address">matt...@webdev101.net</a></span>
        </div>
    </div>
    
    <div class="memCard">
        <img src="images/portraits/kristina.jpg" width="100" height="150"
        alt="Kristina Thai" title="Kristina Thai" />
        <div class="memInfo">
            <span class="memName">Kristina Thai</span>
            <div class="memContent">
                <span class="memPos">Web Dev 101 volunteer</span><br />
                <span class="memMaj">Computer Science, 2012</span>
            </div>
            <span class="memEmail">Email: <a href="http://www.google.com/recaptcha/mailhide/d?k=016zOznJFELXgkoculPUVXkQ==&amp;c=9a4x_J3QVWB2HlpoPYI_pw==" onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k\075016zOznJFELXgkoculPUVXkQ\75\75\46c\759a4x_J3QVWB2HlpoPYI_pw\75\075', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300'); return false;" title="Reveal this e-mail address">klt...@ucsd.edu</a></span>
        </div>
    </div>
    
    <div class="memCard">
        <img src="images/portraits/leilani.jpg" width="100" height="150"
        alt="Leilani Gilpin" title="Leilani Gilpin" />
        <div class="memInfo">
            <span class="memName">Leilani Gilpin</span>
            <div class="memContent">
                <span class="memPos">Web Dev 101 contributor</span><br />
                <span class="memMaj">Computer Science, Mathematics, 2011
                </span>
            </div>
            <span class="memEmail">Email: <a href="http://mailhide.recaptcha.net/d?k=01mfZO_jUWJO2NG_A-GtJL-w==&amp;c=0n4nH_H-MAEuBm0Mt2mcLFuzM1eGMtj1XNRPayg_WJI=" onclick="window.open('http://mailhide.recaptcha.net/d?k=01mfZO_jUWJO2NG_A-GtJL-w==&amp;c=0n4nH_H-MAEuBm0Mt2mcLFuzM1eGMtj1XNRPayg_WJI=', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300'); return false;" title="Reveal this e-mail address">lgil...@ucsd.edu</a></span>
        </div>
    </div>
    
    <div class="memCard">
        <img src="images/portraits/christine.jpg" width="100" height="150"
        alt="Christine Luu" title="Christine Luu" />
        <div class="memInfo">
            <span class="memName">Christine Luu</span>
            <div class="memContent">
                <span class="memPos">Web Dev 101 volunteer</span><br />
                <span class="memMaj">Computer Science, 2012</span>
            </div>
            <span class="memEmail">Email: <a href="http://www.google.com/recaptcha/mailhide/d?k=016zOznJFELXgkoculPUVXkQ==&amp;c=j2NxnbLa-2bYtmu6aBnykA==" onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k\075016zOznJFELXgkoculPUVXkQ\75\75\46c\75j2NxnbLa-2bYtmu6aBnykA\75\075', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300'); return false;" title="Reveal this e-mail address">cml...@ucsd.edu</a></span>
        </div>
    </div>
    
    <div style="clear:both"></div>
    
    <div class="socialBox">
      <div class="g-plus" data-href="https://plus.google.com/108571036171498305603" data-size="badge"></div>
      <br />
      <iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FWeb-Dev-101%2F188225361197871&amp;width=292&amp;colorscheme=light&amp;show_faces=true&amp;stream=true&amp;header=true&amp;height=427" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:427px; float:right; margin-left:5px; background-color: white" allowTransparency="true"></iframe>
    </div>
    
    <h2 id="cses">The Computer Science and Engineering Society</h2>
    <p>The <a href="http://cses.ucsd.edu">Computer Science and Engineering
    Society</a> (CSES) at UC San Diego, a student chapter of the <a 
    href="http://acm.org">ACM</a>, is an undergraduate student 
    organization that provides UCSD students opportunities to work on cool
    projects (such as Web Dev 101) outside of class, as well as to connect 
    socially. Some of CSES's other projects include a multitouch table, a 
    Lisp game engine, AI programming competitions, and robot building.</p>
    
    <p>CSES also engages in activities like intramural sports,
    game nights, and volunteering. In April, CSES hosts their annual
    CSE Day event, planned and run entirely by CSES members. It features 
    presentations by professors, industry speakers and panelists, a project
    fair, and other fun activities related to CS.</p>
    
    <h2 id="impact">Impact</h2>
    <p>The Web Dev 101 project plans on studying the impact it
    has on workshop participants and tutorial users. In particular, we
    will be looking to see if we have met our stated goal, "to promote
    interest, engagement, and a positive image of computer science and
    engineering," as follows:
    <ol>
        <li><strong>Interest:</strong> is the participant more interested
        in exploring further topics in computer science, studying CS in
        college, or pursuing a CS-related career?</li>
        <li><strong>Engagement:</strong> is the participant more actively
        involved in computer science-related activities such as website
        development, other kinds of computer programming, participating in
        CS-related clubs, self-learning, or personal projects?</li>
        <li><strong>Positive Image:</strong> how well does Web Dev 101 counter
        negative stereotypes about computer science and engineering, such
        as those involving engineering student life, gender diversity, or 
        creative aspects of science and technology?</li>
    </ol></p>
    
    <h2 id="help">Interested in helping?</h2>
    <h3>Tutorial feedback</h3>
    <p>If you attended one of our workshops, or worked through the 
    tutorials on our website, we'd like to hear your thoughts on how
    we did! Please fill out our surveys (available on most tutorial and workshop
    pages) or email us directly (contact information above). We really
    appreciate it!
    </p>
    
    <h3>Schools</h3>
    <p>We are interested in opportunities to do workshops and provide
    guidance for our tutorials for students near the UC San Diego campus.
    If this sounds like something your school would be interested in, 
    please contact us!</p>
    
    <h3>UCSD students</h3>
    <p>Join us! We are always in the process of revising and improving
    our tutorials and workshops, and would love to have your help. If you
    are interested in being a member of our project, please contact us,
    or come to our meetings. No experience necessary! 
    See <a href="http://cses.ucsd.edu">http://cses.ucsd.edu</a> for 
    details.</p>
    
    <p>If you are part of another engineering student organization, we are
    also looking for partners to help expand our outreach efforts through
    BYOW. Please let us know if you have ideas for a collaboration, and
    we'd love to work with you!</p>
    
    <h3>Sponsors</h3>
    <p>The main cost of Web Dev 101 is in the cost of USB
    drives, which we provide to workshop participants free of cost. The
    USB drives come preloaded with tutorials, example source files,
    and lightweight, portable software, and we believe they serve as a
    useful and convenient learning tool. If you are an individual or a
    company that would be interested in supporting our project, please
    contact Justin Huang.</p>
</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');
?>

</body>
</html>