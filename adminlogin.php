<?php 
session_start();
        
if(isset($_SESSION['admin_login'])) 
    header('location:admin_dashboard.php');   
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>money transfer admin</title>
        
        <link rel="stylesheet" href="CSS/style.css">
    </head>
<?php
include 'header.php'; 
?>

<div class='content'>
<div class="user_login">
    <form action='' method='POST'>
        <table align="center">
            <tr><td><span class="caption">Admin Login</span></td></tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr><td>Username:</td></tr>
            <tr><td><input type="text" name="uname" required></td></tr>
            <tr><td>Password:</td></tr>
            <tr><td><input type="password" name="pwd" required></td></tr>
            <tr><td class="button1"><input type="submit" name="submitBtn" value="Log In" class="button"></td></tr>
        </table>
    </form>
            </div>
        </div>
          
<?php include 'footer.php';
?>
<?php 
include 'connection.php';
if(!isset($_SESSION['admin_login'])){
if(isset($_REQUEST['submitBtn'])){
    $sql="SELECT * FROM admin WHERE id='1'";
    $result=mysql_query($sql);
    $rws=  mysql_fetch_array($result);
    $username=  mysql_real_escape_string($_REQUEST['uname']);
    $password=  mysql_real_escape_string($_REQUEST['pwd']);
    if($username==$rws[2] && $password==$rws[3]) {
        
        $_SESSION['admin_login']=1;
    header('location:admin_dashboard.php'); 
    }
    else
        header('location:adminlogin.php');      
    }
}
else {
    header('location:admin_dashboard.php');
}
?>