<?php 

require_once($_SERVER["DOCUMENT_ROOT"]."/../webdev101.php");

class HeadWidget implements Widget {
  private $title;
  private $favicon;
  private $css;
  private $scripts;

  public function __construct() {
    $this->title = "";
    $this->favicon = "/favicon.ico";
    $this->css = array();
    $this->scripts = array();
  }
  
  /**
   * Sets the title of this document in the <title> element.
   *
   * Args:
   *  $title: The title, given as a string.
   *
   * Returns: The object with the updated title.
   */
  public function setTitle($title) {
    if (is_string($title)) {
      $this->title = $title;
    }
    return $this;
  }
  
  /**
   * Sets the favicon of this document.
   *
   * Args:
   *   $favicon: The location of the favicon file, given as a string.
   *
   * Returns: The object with the updated favicon.
   */
  public function setFavicon($favicon) {
    if (is_string($favicon)) {
      $this->favicon = $favicon;
    }
    return $this;
  }
  
  /**
   * Adds a CSS file to this document.
   *
   * Args:
   *   $css: Either a string with the location of a CSS file to add, or an
   *      array of strings with locations of CSS files to add.
   *
   * Returns: The widget with the updated CSS file(s).
   */
  public function addCss($css) {
    if (is_string($css)) {
      $css = array($css);
    }
    
    foreach ($css as $cssFile) {
      $this->css[] = "/css/$cssFile";
    }
    
    return $this;
  }
  
  /**
   * Adds a Javascript file to this document.
   *
   * Args:
   *   $script: Either a string with the location of a Javascript file to add,
   *      or an array of strings with locations of Javascript files to add.
   *
   * Returns: The widget with the updated Javascript file(s).
   */
  public function addScript($script) {
    if (is_string($script)) {
      $script = array($script);
    }
    
    foreach ($script as $scriptFile) {
      $this->scripts[] = "/js/$scriptFile";
    }
    
    return $this;
  }
  
  public function toHtml() {
    $result = "";

    if (isset($this->title)) {
      $result .= "    <title>Web Dev 101 - $this->title</title>\n";
    } else {
      $result .= "    <title>Web Dev 101</title>\n";
    }
    
    if (isset($this->favicon)) {
      $result .=
        "    <link rel=\"shortcut icon\" type=\"image/x-icon\" "
        ."href=\"$this->favicon\" />\n";
    }
    
    foreach($this->css as $css) {
      $result .=
        "    <link rel=\"stylesheet\" type=\"text/css\" href=\"$css\" />\n";
    }
    
    foreach($this->scripts as $script) {
      $result .=
        "    <script type=\"text/javascript\" src=\"$script\"></script>\n";
    }
      
    return $result;
  }
}

?>