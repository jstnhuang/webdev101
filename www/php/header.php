<?php

function makeHeadSectionAll($title) {
    $pageTitle = 'Web Dev 101';
    if (isset($title)) {
        $pageTitle .= " - " . $title;
    }
    
    $output = 
    '<title>'.$pageTitle.'</title>
        <link href="http://fonts.googleapis.com/css?family=Lobster" 
            rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
        <link rel="stylesheet" type="text/css" href="/css/webdev101.css" />
        <link rel="stylesheet" type="text/css" href="/css/whiteboard.css" />
        <link href="https://plus.google.com/108571036171498305603" rel="publisher" />
        <script type="text/javascript">
          (function() {
            var po = document.createElement("script");
            po.type = "text/javascript";
            po.async = true;
            po.src = "https://apis.google.com/js/plusone.js";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(po, s);
          })();
        </script>
        <script type="text/javascript" src="/js/html-sanitizer.js"></script>
        <script type="text/javascript" src="/js/jquery-1.5.min.js">
        </script>
        <script type="text/javascript"
            src="/js/jquery.taboverride-1.0.js"></script>
        <script type="text/javascript" src="/js/whiteboard.js">
        </script>
        <script type="text/javascript" src="/js/tutorials.js">
        </script>
        <script type="text/javascript">
            var SERVER_NAME = "'.$_SERVER['SERVER_NAME'].'";
        </script>';
        
    return $output;
}

function makeHeader($title, $pagePath) {
    $navLinks = array(
        'Home' => '/',
        'Tutorials' => '/tutorials',
        'Workshops' => '/workshops',
        'Whiteboard' => '/whiteboard',
        'About us' => '/about',
    );

    $output =
    '<div id="header">
        <a href="/">
            <img alt="Zzz..." title="Zzz..." class="headerLogo" 
                width="150" height="90" 
                src="/images/webdev101-header.png" />
        </a>
        <h1>Web Dev 101</h1>
        <h2>'.$title.'</h2>
        <div id="navBar">
            <ul>';
    foreach ($navLinks as $navTitle => $navUrl) {
        $output .= '<li><a href="'.$navUrl.'"'.
        ($navUrl == $pagePath ? ' class="active"' : '').'>'.
        $navTitle.'</a></li>';
    }
    $output .=
    '        </ul>
        </div>
    </div>';
    
    return $output;
}

function makeAnalytics() {
    return '<script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push([\'_setAccount\', \'UA-21353377-1\']);
            _gaq.push([\'_setDomainName\', \'.webdev101.net\']);
            _gaq.push([\'_trackPageview\']);
            (function() {
                var ga = document.createElement(\'script\'); ga.type = \'text/javascript\'; ga.async = true;
                ga.src = (\'https:\' == document.location.protocol ? \'https://ssl\' : \'http://www\') + \'.google-analytics.com/ga.js\';
                var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>';
}

?>
        