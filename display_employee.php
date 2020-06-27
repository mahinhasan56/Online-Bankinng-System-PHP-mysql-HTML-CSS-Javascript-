<?php 
session_start();
        
if(!isset($_SESSION['admin_login'])) 
    header('location:adminlogin.php');   
?>
<!DOCTYPE html>
<?php
include 'connection.php';
$sql="SELECT * FROM employee";
$result=  mysql_query($sql) or die(mysql_error());
$sql_min="SELECT MIN(id) from employee";
$result_min=  mysql_query($sql_min);
$rows_min=  mysql_fetch_array($result_min);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit Staff Details</title>
        <style>
            .displaystaff_content table,th,td {
    padding:6px;
    border: 1px solid #2E4372;
   border-collapse: collapse;
}
#button{
    border:none;
}
        </style>
        <link rel="stylesheet" href="CSS/style.css">
    </head>
    
    <?php include 'header.php' ?>
     
    <div class="displaystaff_content">
       <?php include 'admin_navbar.php'?>
                    <div class="displaystaff">
                <form action="edit_employee.php" method="POST">
            
                    <table align="center">
                        <caption align='center' style='color:#2E4372'><h3><u>Staff Details</u></h3></caption>
                        <th>id</th>
                        <th>name</th>
                        <th>gender</th>
                        <th>dateOfBirth</th>
                        <th>relationship</th>
                        <th>department</th>
                        <th>dateOfJoinning</th>
                        <th>address</th>
                        <th>mobile</th>
                        <th>email</th>
                        <?php
                        while($rows=  mysql_fetch_array($result)){
                            echo "<tr><td><input type='radio' name='staff_id' value=".$rows[0];
                            if($rows[0]==$rows_min[0]) echo' checked';
                            echo " /></td>";
                            echo "<td>".$rows[1]."</td>";
                            echo "<td>".$rows[10]."</td>";
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
                    
                    
                    <table align="center" id='button'>
                    
                        <tr>
                            <td><input type="submit" name="submit1_id" value="EDIT STAFF DETAILS" class='addstaff_button' ></td>
                        </tr>
                        
                    </table>
                    </form>
                
                    
</div>
          <?php include 'footer.php';?>
    </body>
</html>