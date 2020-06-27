<?php 
session_start();
        
if(!isset($_SESSION['customer_login'])) 
    header('location:index.php');   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Display</title>
        
        <link rel="stylesheet" href="CSS/style.css">
        <style>
            .content_customer table,th,td {
    padding:6px;
    border: 1px solid #2E4372;
   border-collapse: collapse;
   text-align: center;
}

        </style>
        </head>
        <?php include 'header.php' ?>
<div class='content_customer'>
            
           <?php include 'customer_navbar.php'?>
    <div class="customer_top_nav">
             <div class="text">Welcome <?php echo $_SESSION['name']?></div>
            </div>
    
            <?php
include 'connection.php';
$sender_id=$_SESSION["login_id"];
$sql="SELECT * FROM account WHERE sender_id='$sender_id'";
$result=  mysql_query($sql) or die(mysql_error());
?>
     <br><br><br>
        <h3 style="text-align:center;color:#2E4372;"><u>Display</u></h3>
    <form action="delete_receiver_payment_request.php">
<table align="center">
                        <th>Id</th>
                        <th>Name</th>
                        <th>Receiver Account Numbeer</th>
                        <th>Status</th>
                        <?php
                        while($rows=  mysql_fetch_array($result)){
                            echo "<tr><td><input type='radio' name='customer_id' value=".$rows[0];
                            echo ' checked';
                            echo " /></td>";
                            echo "<td>".$rows[4]."</td>";
                            echo "<td>".$rows[3]."</td>";
                            echo "<td>".$rows[5]."</td>";
                            echo "</tr>";
                        } ?>
</table>
    <table align="center"><tr><td><input type="submit" name="submit_id" 
    value="Withdraw Payment" class='addstaff_button'/></td></tr></table>
    </form>
</div>
        <?php include 'footer.php'?>