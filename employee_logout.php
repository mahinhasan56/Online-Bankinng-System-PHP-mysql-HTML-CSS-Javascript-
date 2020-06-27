<?php 
session_start();

include 'connection.php';
$date=$_SESSION['employee_date'];
$id=$_SESSION['id'];
$sql="UPDATE employee SET lastlogin='$date' WHERE id='$id'";
mysql_query($sql) or die(mysql_error());

session_destroy();
header('location:employee_login.php');
?>