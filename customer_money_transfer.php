<?php 
session_start();
        
if(!isset($_SESSION['customer_login'])) 
    header('location:index.php');   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Transfer Funds</title>
        
        <link rel="stylesheet" href="CSS/style.css">
          <style>
            .content_customer table,th,td {
    padding:6px;
    border: 1px solid #2E4372;
   border-collapse: collapse;
   text-align: center;
}
.content_customer td{
    padding:10px;
}
.head{
    
  text-align:center;
    color:#2E4372;
    font-weight:bold;
}

        </style>
    </head>
        <?php include 'header.php' ?>
        <div class='content_customer'>
            
           <?php include 'customer_navbar.php'?>
            <div class="customer_top_nav">
             <div class="text">Welcome <?php echo $_SESSION['name']?></div>
            </div>
            <br><br><br><br>
        <h3 style="text-align:center;color:#2E4372;"><u>Transfer Funds</u></h3>
            
                    
                    <?php
                    include 'connection.php';
        $sender_id=$_SESSION["login_id"];
        
        
        $sql="SELECT * FROM account WHERE sender_id='$sender_id' AND status='ACTIVE'";
        $result=  mysql_query($sql);
        $rows=mysql_fetch_array($result);
        $s_id=$rows[1];              
        ?>
        <?php

        ?>
    
        <?php       
        if($sender_id==$s_id)    
        {
        echo "<form action='customer_money_transfer_process.php' method='POST'>";
        echo "<table align='center'>";
        echo "<tr><td>Select Payee:</td><td> <select name='transfer'>" ; 
        
        $sql1="SELECT * FROM account WHERE sender_id='$sender_id' AND status='ACTIVE'";
        $result=  mysql_query($sql);
                
        while($rows=mysql_fetch_array($result)) {
        echo "<option value='$rows[3]'>$rows[4]</option>";
        }
      
        echo "</td></tr></select>";
         
        echo "<tr><td>How Much Money</td><td><input type='number' name='t_val' required></td></table>";
        
        echo "<table align='center'><tr><td style='padding:5px;'>
        <input type='submit' name='submitBtn' value='Transfer' class='addstaff_button'>
        </td></tr></table></form>"; 
        }
        else{
            echo "<br><br><div class='head'><h3>You did not get employee approval</h3></div>";
        }
        ?>
    </div> 
    <?php include 'footer.php';
     ?>