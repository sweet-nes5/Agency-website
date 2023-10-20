<?php
define('HOST', 'localhost');
define('DB_NAME', 'contact');
define('USER', 'administrateur');
define('PASS', 'sawnes');
try{
  $dd=new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER ,PASS);
  $dd-> setAttribute(PDO:: ATTR_ERRMODE ,PDO::ERRMODE_EXCEPTION);
 
}catch(PDOException $e){
   echo $e;
}
?>