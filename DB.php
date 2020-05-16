<?php
class MySQLException extends Exception {}

define ("host","localhost");
define("user","root");
define ("pass","");
define ("name","meditation");
try{
$connect = mysqli_connect(host,user,pass,name);
}catch(MySQLException $e)
{
die("Cannot connect with database!");
}
?>
