<?php 
session_start();
        
if(isset($_SESSION['employee_login'])) 
    header('location:employee_dashboard.php');   
?>

<!DOCTYPE html>
<html>
    <head> 
        <meta charset="UTF-8">
        <title>Employee </title>
        
        <link rel="stylesheet" href="CSS/style.css">
    </head>
<?php
include 'header.php'; 
?>

<div class='content'>
<div class="user_login">
    <form action='' method='POST'>
        <table align="left">
            <tr><td><span class="caption">Employee Login</span></td></tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr><td>Username:</td></tr>
            <tr><td><input type="text" name="uname"></td></tr>
            <tr><td>Password:</td></tr>
            <tr><td><input type="password" name="password"></td></tr>
            <tr><td class="button1"><input type="submit" name="submitBtn" value="Log In" class="button"></td></tr>
        </table>
    </form>
            </div>
        </div>
          
<?php include 'footer.php';
?>
<?php
if(isset($_REQUEST['submitBtn'])){
    include 'connection.php';
    $username=$_REQUEST['uname'];
    $password=$_REQUEST['password'];
  
    $sql="SELECT email,password FROM employee WHERE email='$username' AND password='$password'";
    $result=mysql_query($sql) or die(mysql_error());
    $rows=  mysql_fetch_array($result);
    
    if($rows[0]==$username && $rows[1]==$password){
        session_start();
        $_SESSION['employee_login']=1;
        $_SESSION['employee_id']=$username;
    header('location:employee_dashboard.php'); 
    }
    else{
        header('locaion:employee_login.php');
        
    }
}
?>
<?php include 'footer.php';
?>