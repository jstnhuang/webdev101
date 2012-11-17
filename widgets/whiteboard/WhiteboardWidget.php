<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/../webdev101.php");

class WhiteboardViews {
  const HTML = 0;
  const CSS = 1;
}

/**
 * A code whiteboard.
 *
 * Fields:
 *  $id: 
 *  $editable: 
 *  $showCode: 
 *  $minRows: 
 *
 * Author: Justin Huang (justin@)
 */
class WhiteboardWidget implements Widget {
  private $id; // A unique id for the whiteboard, used by the javascript.
  private $editable; // Whether or not the user should be able to edit the code.
  private $showCode; // Whether to display the code or just the output.
  private $height; // The default height, in rows, of the whiteboard.
  private $htmlContent; // The default HTML content in the whiteboard.
  private $cssContent; // The default CSS content in the whiteboard.
  private $defaultView; // The default view (HTML or CSS) of the whiteboard.

  public function __construct($id) {
    $this->id = $id;
    $this->editable = true;
    $this->showCode = true;
    $this->height = 10;
    $this->htmlContent = "";
    $this->cssContent = "";
    $this->defaultView = WhiteboardViews::HTML;
  }

  public function setEditable($editable) {
    if (is_bool($editable)) {
      $this->editable = $editable;
    }
    return $this;
  }
  
  public function setShowCode($showCode) {
    if (is_bool($showCode)) {
      $this->showCode = $showCode;
    }
    return $this;
  }
  
  public function setHeight($height) {
    if (is_int($height)) {
      $this->height = $height;
    }
    return $this;
  }
  
  public function setHtml($html) {
    if (is_string($html)) {
      $this->htmlContent = $html;
    }
    return $this;
  }
  
  public function setCss($css) {
    if (is_string($css)) {
      $this->cssContent = $css;
    }
    return $this;
  }
  
  public function setDefaultView($defaultView) {
    $this->defaultView = $defaultView;
    return $this;
  }
  
  public function toHtml() {
    $showCodeClass = ($this->showCode ? "" : "hidden");
  
    $whiteboardCode = <<<EOT
      <div class="whiteboard" id="$this->id">
        <div class="whiteboardPadding">
        <div class="codeDiv $showCodeClass" id="$this->id-codeDiv">
EOT;
    $whiteboardCode .= '
          <div class="codeDivPadding">
            <a href="javascript:void(0);"
              class="whiteboardLabel'.
              ($this->defaultView == WhiteboardViews::HTML ? ' active' : '').
              ($this->editable ? ' editable' : '').
              '" id="'.$this->id.'-htmlLink">HTML</a>
            <a href="javascript:void(0);"
              class="whiteboardLabel'.
              ($this->defaultView == WhiteboardViews::CSS ? ' active' : '').
              ($this->editable ? ' editable' : '')
              .'" id="'.$this->id.'-cssLink">CSS</a>
        
              <div class="codeAreaPadding">
              <textarea class="codeArea'.
                  ($this->editable ? ' editable' : '').
              '" rows="'.$this->height.'" id="'.$this->id.'-codeArea"'.
              ($this->editable ? '' : 'readonly="readonly"').'></textarea>
              </div>
            </div>
          </div>
          <div class="previewDiv" id="'.$this->id.'-previewDiv">
            <div class="previewDivPadding">
              <span class="whiteboardLabel">'.
              ($this->showCode ? ($this->editable ? 'Preview' : 'Result') : 'Result')
              .':</span><div style="clear: both;"></div>
              <div class="previewArea" id="'.$this->id.'-previewArea">
                <iframe id="'.$this->id.'-iframe" src=""></iframe>
              </div>
            </div>
          </div>';
                
    if ($this->showCode) {
        $whiteboardCode .= '
                <form name="downloadButtonForm"     action="/php/download-whiteboard.php">
                    <input type="hidden" name="type" />
                    <input type="hidden" name="contents" />
                    <input type="submit" name="downloadButton" value="Download '
                        .($this->defaultView == WhiteboardViews::HTML ? 'HTML' : 'CSS' )
                        .' as file" />
                </form>';
    }
    $whiteboardCode .='
                </div>
            </div>
            <script>
                var codeArea = $("#'.$this->id.'-codeArea");
                var codeDiv = $("#'.$this->id.' .codeDiv");
                $("#'.$this->id.'-htmlLink").data(\'value\', \''.$this->htmlContent.'\');
                $("#'.$this->id.'-cssLink").data(\'value\', \''.$this->cssContent.'\');
                $("#'.$this->id.'-codeArea").val(\''.
                ($this->defaultView == WhiteboardViews::HTML ? $this->htmlContent : $this->cssContent).'\');
              initWhiteboardById("'.$this->id.'");
            </script>';
    return $whiteboardCode;
  }
}
?>