<?php 
session_start();
        
if(!isset($_SESSION['admin_login'])) 
    header('location:adminlogin.php');   
?>
    <?php
include 'connection.php';
$name=  mysql_real_escape_string($_REQUEST['customer_name']);
$gender=  mysql_real_escape_string($_REQUEST['customer_gender']);
$dateOfBirth=  mysql_real_escape_string($_REQUEST['customer_dob']);
$nominee=  mysql_real_escape_string($_REQUEST['customer_nominee']);
$type=  mysql_real_escape_string($_REQUEST['customer_account']);
$credit=  mysql_real_escape_string($_REQUEST['initial']);
$address=  mysql_real_escape_string($_REQUEST['customer_address']);
$mobile=  mysql_real_escape_string($_REQUEST['customer_mobile']);
$email= mysql_real_escape_string($_REQUEST['customer_email']);

//salting of passwor
$password= ($_REQUEST['customer_pwd']);

$branch=  mysql_real_escape_string($_REQUEST['branch']);
$date=date("Y-m-d");
switch($branch){
case 'Motijheel': $transfercode="1201";
    break;
case 'Dhanmondi': $transfercode="1202";
    break;
case 'Mohakhali': $transfercode="1203";
    break;
}

$sql3="SELECT MAX(id) from customer";
$result=mysql_query($sql3) or die(mysql_error());
$rows=  mysql_fetch_array($result);
$id=$rows[0]+1;
$sql1="CREATE TABLE accountrecord".$id."  
(transactionid int(5) AUTO_INCREMENT, transactiondate date, name VARCHAR(255),
     branch VARCHAR(255), transfercode VARCHAR(255), credit int(10), debit int(10), 
    amount float(10,2), Summary VARCHAR(255), PRIMARY KEY (transactionid))";

$sql="insert into customer values('','$name','$gender','$dateOfBirth','$nominee','$type','$address','$mobile',
    '$email','$password','$branch','$transfercode','','ACTIVE')";
mysql_query($sql) or die("Email already exists!");
mysql_query($sql1) or die(mysql_error());
$sql4="insert into accountrecord".$id." values('','$date','$name','$branch','$transfercode','$credit','0','$credit','Account Open')";
mysql_query($sql4) or die(mysql_error());
header('location:admin_dashboard.php');
?>