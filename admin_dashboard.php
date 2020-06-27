<?php 
session_start();
        
if(!isset($_SESSION['admin_login'])) 
    header('location:adminlogin.php');   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin Dashboard</title>
        
        <link rel="stylesheet" href="CSS/style.css">
    </head>
        <?php include 'header.php' ?>
        <div class='content'>
            
           <?php include 'admin_navbar.php'?>
            <div class='admin_customer'>
                <ul>
         <li><b><u> Customer</u></b></li>
        <li><a href="addcustomer.php">Add Customer</a></li>
       <li> <a href="display_customer.php">Display customer</a></li>
       <li> <a href="delete_customer.php">Delete customer</a></li>
       <li> <a href="addinterest.php">Add loan interest</a></li>
       
        </div>

                <div class='admin_staff'>
                <ul>
         <li><b><u> Employee</u></b></li>
        <li><a href="addemployee.php">Add Employee</a></li>
       <li> <a href="display_employee.php">Display Employee</a></li>
       <li> <a href="delete_employee.php">Delete Employee</a></li>      
        </div>
        </div>
        <?php include 'footer.php';?>
    </body>
</html>