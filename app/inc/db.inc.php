<?php

defined('MY_INC_CODE') or die('Access to this file is restricted');

class DBConnection extends SQLite3 {
  function __construct() {
     $this->open(DB_DATABASE);
  }
}

$db = new DBConnection();

if(!$db) 
{
  echo $db->lastErrorMsg();
  header("Location: dbupdate.php?registration=dbfail");
  exit;
} 
