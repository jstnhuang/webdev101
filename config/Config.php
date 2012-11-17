<?php

/**
 * Singleton class that reads .ini files as configuration files, and stores the
 * values in a global Config object.
 *
 * The values are read as such:
 * $success = $config->read("db.ini", "db");
 *
 * The values are retrieved as such:
 * $value = $config->get("db", "key")
 */
class Config {
  private static $instance;
  private $configs;
  
  private function __construct($configDir) {
    $this->configs = array();
    foreach(glob($configDir."/*.ini") as $iniFile) {
      $this->readIniFile($iniFile);
    }
  }
  
  public static function singleton() {
    $configDir = dirname(__FILE__);
    if (!isset(self::$instance)) {
      $className = __CLASS__;
      self::$instance = new $className($configDir);
    }
    return self::$instance;
  }

  /**
   * Reads in the given configuration file for later retrieval.
   *
   * Args: 
   *  $filename: The .ini file with the configuration data.
   *  $namespace: The namespace to put this configuration data in.
   *
   * Returns: true if the read was successful, false otherwise.
   */
  private function readIniFile($filename) {
    preg_match("/config\/(.*)\.ini/i", $filename, $namespace);
    $namespace = $namespace[1];
    if ($data = parse_ini_file($filename)) {
      $this->configs[$namespace] = $data;
    }
    else {
      return false;
    }
  }
  
  /**
   * Sets a value for the given namespace and key.
   *
   * Args:
   *  $namespace: The namespace to put this key/value pair in.
   *  $key: The key to set.
   *  $value: The value to set.
   */
  public function set($namespace, $key, $value) {
    $this->configs[$namespace]["$key"] = $value;
  }
  
  /**
   * Gets the value associated with the given configuration namespace and key.
   *
   * Args:
   *  $namespace: The name of the configuration data.
   *  $key: The name of the desired key from the configuration data.
   *
   * Returns: The given data.
   */
  public function get($namespace, $key) {
    return $this->configs[$namespace]["$key"];
  }
}

$config = Config::singleton();
?>