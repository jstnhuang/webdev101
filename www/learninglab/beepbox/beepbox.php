<?php

$dbInfo = parse_ini_file($_SERVER["DOCUMENT_ROOT"]."/../config/beepbox.ini");
$db = @mysql_connect($dbInfo["DB_HOST"], $dbInfo["DB_USER"], $dbInfo["DB_PASSWORD"]);
mysql_select_db($dbInfo["DB_NAME"], $db);

// If action variable is set to "beep", insert a new beep into the DB.
if (isset($_POST["action"]) && $_POST["action"] === "beep") {
  $name = trim($_POST["name"]);
  $beep = trim($_POST["beep"]);
  $result = mysql_query(sprintf(
    "insert into beeps(name, beep) values (\"%s\", \"%s\")",
    mysql_real_escape_string($name),
    mysql_real_escape_string($beep)));
}

// Otherwise, assume that the action is a request for existing beeps.
else {
  $time = time();
  while((time() - $time) < 1) {
    $result = mysql_query("select * from beeps order by timestamp desc limit 100");

    $rows = array();
    if (mysql_num_rows($result) > 0) {
      while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
        $row["name"] = htmlspecialchars($row["name"]);
        $row["beep"] = htmlspecialchars($row["beep"]);
        $row["timeString"] = date('l, M j Y \a\t g:ia', strtotime($row["timestamp"]));
        $rows[] = $row;
      }
      echo json_encode($rows);
      break;
    }

    usleep(800);
  }
}

?>