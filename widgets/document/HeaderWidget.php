<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/../webdev101.php");

class HeaderWidget implements Widget {
  public function __construct() {
  }

  public function toHtml() {
    global $config;
    
    $result = <<<EOT
    <div id="header">  
      <div id="navBar">
        <a href="" class="logo">
          <img alt="Zzz..." title="Zzz..." class="headerLogo" 
            width="113" height="48" src="/images/webdev101-flat3.png" />
        </a>
        <ul id="links">
          <li><a href="/courses">Courses</a></li>
          <li><a href="/whiteboard">Whiteboard</a></li>
EOT;
    if ($config->get("webdev101", "NOTEBOOK_READY") == 1) {
      $result .= "    <li><a href=\"/notebook\">Notebook</a></li>";
    }
    
    $result .= <<<EOT
        </ul>

        <ul id="my101">
          <li><a href="/me">My 101</a></li>
        </ul>
      </div>
    </div>
EOT;

    return $result;
  }
}

?>