<?php 
session_start();
        
if(!isset($_SESSION['employee_login'])) 
    header('location:employee_login.php');   
?>
<?php
if(isset($_REQUEST['submit_id']))
{
    $id=$_REQUEST['customer_id'];
    
    include 'connection.php';
    $sql="UPDATE account SET status='ACTIVE' WHERE id='$id'";
    mysql_query($sql) or die(mysql_error());
    
   echo '<script>alert("Receive Status ACTIVE ");';
   echo 'window.location= "employee_view_request.php";</script>';
}

