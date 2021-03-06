<?php
/**
 * Represents a particular database host, and holds logic for DB transactions.
 * It provides a query() method for automatically escaping database input.
 */
class Db {
  private $host;
  private $user;
  private $password;
  private $db_name;
  private $db = null;
  
  /**
   * Constructor that sets the information needed to connect to the DB host.
   *
   * Arguments:
   *  $host: The database host.
   *  $user: The username for the host.
   *  $password: The password for the given username.
   */
  function __construct($host, $user, $password) {
    $this->host = $host;
    $this->user = $user;
    $this->password = $password;
  }
  
  /**
   * Connects to the given database on this host and selects the database.
   *
   * Arguments:
   *  $db_name: The name of the database to connect to.
   */
  function connect($db_name) {
    $this->db = @mysql_connect($this->host, $this->user, $this->password);
    if (!$this->db) {
      return false;
    }
    return mysql_select_db($db_name, $this->db);
  }
  
  /**
   * Executes a query on the database, automatically escaping all the arguments.
   * Use the function exactly as you would sprintf. E.g.,
   *   query("%s, %s", "Hello", "world!");
   *
   * Arguments:
   *  Arg 1: The first argument is the format string to pass to sprintf.
   *  Args 2, 3, ...: The remaining args are the values to pass to sprintf for
   *    the format string.
   *
   * Returns: a database resource on success, or false on error. The returned
   *  resource should be passed to mysql_fetch_array() if you want to look at
   *  the data, mysql_num_rows() to see how many rows were in a SELECT
   *  statement, or mysql_affected_rows() to see how many rows were affected by
   *  a DELETE, INSERT, REPLACE, or UPDATE statement. You can also call
   *  mysql_insert_id() after the query to get the ID generated by an INSERT.
   */
  function query() {
    $args = func_get_args();
    $query_args = array($args[0]);
    $fields = array_slice($args, 1);
    
    foreach ($fields as $field) {
      if (get_magic_quotes_gpc()) {
        $field = stripslashes($field);
      }
      $query_args[] = mysql_real_escape_string($field);
    }
  
    $query = call_user_func_array("sprintf", $query_args);
    return mysql_query($query);
  }
}
?>