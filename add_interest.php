<?php 
session_start();
        
if(!isset($_SESSION['admin_login'])) 
    header('location:adminlogin.php');   
?>
<?php
include 'connection.php';
$accountno=  mysql_real_escape_string($_REQUEST['accountno']);
$name=  mysql_real_escape_string($_REQUEST['name']);
$dob=  mysql_real_escape_string($_REQUEST['dob']);
$address=  mysql_real_escape_string($_REQUEST['address']);
$mobile=  mysql_real_escape_string($_REQUEST['mobile']);
$email= mysql_real_escape_string($_REQUEST['email']);
$password=  mysql_real_escape_string($_REQUEST['pwd']);
$deposit=  mysql_real_escape_string($_REQUEST['deposit']);

switch($deposit){
case '200000': $interest="20000";
    break;
case '500000': $interest="30000";
    break;
case '1000000': $interest="100000";
    break;
case '5000000': $interest="250000";
    break;
case '10000000': $interest="500000";
    break;
case '50000000': $interest="2000000";
    break;
case '100000000': $interest="30000000";
    break;
case '1000000000': $interest="50000000";
    break;
}


$sql="insert into loaninterest values('$name','$accountno','$dob','$address','$mobile',
    '$email','$password','$deposit','$interest')";
mysql_query($sql) or die("the email-id is already registered");
header('location:admin_dashboard.php');
?>