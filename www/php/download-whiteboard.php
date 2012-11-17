<?php

$type = strtolower(trim($_GET["type"]));
$contents = trim($_GET["contents"]);


header('Content-type: text/html');
header('Content-Disposition: attachment; filename="index.'.$type.'"');

$html_top =
'<!doctype html>
<html>
  <head>
    <title>My awesome webpage</title>
    <link rel="stylesheet" type="text/css" href="index.css" />
  </head>
  <body>
';

$html_bottom = 
'  </body>
</html>';

$result = $contents;

if ($type === 'html') {
    $result = $html_top;
    
    $lines = explode("\n", $contents);
    foreach($lines as $line) {
        $result .= '    '.$line."\n";
    }
    
    $result .= $html_bottom;
}
echo $result;
?>