<?php 
session_start();
if(!isset($_SESSION['employee_login'])) 
    header('location:employee_login.php');   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Payment Requests</title>
        
        <link rel="stylesheet" href="CSS/style.css">
        <style>
            .displaystaff_content table,th,td {
    padding:6px;
    border: 1px solid #2E4372;
   border-collapse: collapse;
   text-align: center;
}

        </style>
    </head>
        <?php include 'header.php' ?>
       <div class="displaystaff_content">
            
           <?php include 'employee_navbar.php'?>
            
           
    <h3 style="text-align:center;color:#2E4372;"><u>View Payment Requests</u></h3>
<?php
include 'connection.php';
$sql="SELECT * FROM account WHERE status='PENDING'";
$result=  mysql_query($sql) or die(mysql_error());
?>
           
           <form action="employee_approve.php" method="POST">
<table align="center">
                        <th>id</th>
                        <th>Sender</th>
                        <th>Sender Account No:</th>
                        <th>Reciever</th>
                        <th>Reciever Account No:</th>
                        <th>Status</th>
                        <?php
                        while($rows=  mysql_fetch_array($result)){
                            echo "<tr><td><input type='radio' name='customer_id' value=".$rows[0];
                            echo ' checked';
                            echo " /></td>";
                            echo "<td>".$rows[2]."</td>";
                            echo "<td>".$rows[1]."</td>";
                            echo "<td>".$rows[4]."</td>";
                            echo "<td>".$rows[3]."</td>";
                            echo "<td>".$rows[5]."</td>";
                           
                            echo "</tr>";
                        } ?>
</table>
            <table align="center">
                        <tr>
                            <td>
                                <input type="submit" name="submit_id" value="APPROVE Payment Request"
                                 class='Addstaff_button'/>
                            </td>
                        </tr>
                    </table>
               </form>
            </div>
    <?php include 'footer.php'?>


                