<?php
$serverName="localhost";
$dbusername="root";
$dbpassword="";
$dbname="cse391database"; 
mysql_connect($serverName,$dbusername,"");
mysql_select_db($dbname) or die (mysql_error());
?>