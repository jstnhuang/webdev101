<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/../webdev101.php");

class FooterWidget implements Widget {
  public function __construct() {
  }

  public function toHtml() {
    return <<<EOT
    <div id="footer">
      <a href="/about">About us</a> | <a href="/workshops">Workshops</a> |  Licensed under a <a href="http://creativecommons.org/licenses/by-sa/3.0/us/">Creative Commons Attribution-Share Alike 3.0 United States License</a>.
    </div>
EOT;
  }
}

?>