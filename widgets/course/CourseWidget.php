<?php
require_once(dirname($_SERVER["DOCUMENT_ROOT"])."/webdev101.php");

class CourseWidget implements Widget {
  private pages;

  public function __construct(pages) {
    $this->pages = pages;
  }
  
  public function toHtml() {
    
  }
}