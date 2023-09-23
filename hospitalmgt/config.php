<?php

ob_start();
define('ALLOW_EXPORT', FALSE);
define('ALLOW_IMPORT', FALSE);

define('ALLOW_PERSONAL_PASSWORDS', FALSE);



define('ENCRYPT_DB_CONFIG', 1);

define('DB_DRIVER', 'mysql');
define('DB_SERVER', 'localhost');
define('DB_SERVER_USERNAME', 'root');
define('DB_SERVER_PASSWORD','');

define('DB_DATABASE', 'hospital_entry sql');








$dboptions = array(
              PDO::ATTR_PERSISTENT => FALSE, 
              PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
              PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
              PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            );

try {
  $DB = new PDO(DB_DRIVER.':host='.DB_SERVER.';dbname='.DB_DATABASE, DB_SERVER_USERNAME, DB_SERVER_PASSWORD , $dboptions);
   $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$DB->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (Exception $ex) {
  echo $ex->getMessage();
  die;
}




?>
