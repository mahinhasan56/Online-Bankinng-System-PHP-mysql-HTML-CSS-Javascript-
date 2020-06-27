<?php 
session_start();
        
if(!isset($_SESSION['admin_login'])) 
    header('location:adminlogin.php');   
?>

<?php
include 'connection.php';
$name=  mysql_real_escape_string($_REQUEST['edit_name']);
$gender=  mysql_real_escape_string($_REQUEST['edit_gender']);
$dateOfBirth=  mysql_real_escape_string($_REQUEST['edit_dateOfBirth']);
$id=  mysql_real_escape_string($_REQUEST['current_id']);
$type=  mysql_real_escape_string($_REQUEST['edit_account']);
$nominee=  mysql_real_escape_string($_REQUEST['edit_nominee']);
$address=  mysql_real_escape_string($_REQUEST['edit_address']);
$mobile=  mysql_real_escape_string($_REQUEST['edit_mobile']);

$sql="UPDATE customer SET name='$name', dateOfBirth='$dateOfBirth', nominee='$nominee', account='$type', 
     address='$address', mobile='$mobile', gender='$gender' WHERE id='$id'";
mysql_query($sql) or die(mysql_error());
header('location:admin_dashboard.php');
?>