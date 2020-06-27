<?php 
session_start();      
if(!isset($_SESSION['admin_login'])) 
    header('location:adminlogin.php');   
?>
<!DOCTYPE html>
<?php
include 'connection.php';
$sql="SELECT * FROM customer";
$result=  mysql_query($sql) or die(mysql_error());
$sql_min="SELECT MIN(id) from customer";
$result_min=  mysql_query($sql_min);
$rows_min=  mysql_fetch_array($result_min);
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="CSS/style.css"/>
        <style>
            .displaystaff_content table,th,td {
    padding:6px;
    border: 1px solid #2E4372;
   border-collapse: collapse;
}
        </style>
        <title>Display Customer Details</title>
    </head>
    <?php include 'header.php'?>
        
                <div class="displaystaff_content">
                    <?php include 'admin_navbar.php'?>
               <form action="editcustomer.php" method="POST">
                    <table align="center">
                        <th>id</th>
                        <th>name</th>
                        <th>gender</th>
                        <th>dateOfBirth</th>
                        <th>nominee</th>
                        <th>account type</th>
                        <th>address</th>
                        <th>mobile</th>
                        <th>email</th>
                        <?php
                        while($rows=  mysql_fetch_array($result)){
                            echo "<tr><td><input type='radio' name='customer_id' value=".$rows[0];
                            if($rows[0]==$rows_min[0]) echo' checked';
                            echo " /></td>";
                            echo "<td>".$rows[1]."</td>";
                            echo "<td>".$rows[2]."</td>";
                            echo "<td>".$rows[3]."</td>";
                            echo "<td>".$rows[4]."</td>";
                            echo "<td>".$rows[5]."</td>";
                            echo "<td>".$rows[6]."</td>";
                            echo "<td>".$rows[7]."</td>";
                            echo "<td>".$rows[8]."</td>";
                            echo "</tr>";
                        }
                        ?>       
                  </table>
                    <table align="center">
                          <td>
                                <input type="submit" name="submit_id" value=" Customer Edit" 
                                class='addstaff_button'/>
                            </td>
                    </table>
                         </form>
                </div>
    </body>
</html>
