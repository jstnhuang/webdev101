<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/../webdev101.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/../db/Db.php");

/**
 * Instantiates a Db object from the server config files. To get the Db object,
 * simply write:
 *  $db = DbSystem::getDb();
 */
class DbSystem {
  private static $instance;
  private $db;

  private function __construct() {
    $config = Config::singleton();
    $this->db = new Db(
      $config->get("db", "DB_HOST"),
      $config->get("db", "DB_USER"),
      $config->get("db", "DB_PASSWORD"));
    $result = $this->db->connect("webdev101");
  }
  
  public static function getDb() {
    if (!isset(self::$instance)) {
      $className = __CLASS__;
      self::$instance = new $className;
    }
    
    return self::$instance->db;
  }
}

?>