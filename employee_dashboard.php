<?php 
session_start();
        
if(!isset($_SESSION['employee_login'])) 
    header('location:employee_login.php');   
?>
 <?php
                $employee_id=$_SESSION['employee_id'];
                include 'connection.php';
                $sql="SELECT * FROM employee WHERE email='$employee_id'";
                $result=  mysql_query($sql) or die(mysql_error());
                $rows=  mysql_fetch_array($result);
                
                $id=$rows[0];
                $name=$rows[1];
                $dateOfBirth=$rows[2];
                $department=$rows[4];
                $dateOfJoinning=$rows[5];
                $mobile=$rows[7];
                $email=$rows[8];
                $gender=$rows[10];
                $last_login=$rows[11];
                
                $_SESSION['login_id']=$email;
                $_SESSION['name1']=$name;
                $_SESSION['id']=$id;
                ?>
            
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>employee Home</title>
        
        <link rel="stylesheet" href="CSS/style.css">
    </head>
        <?php include 'header.php' ?>
        <div class="displaystaff_content">
            
           <?php include 'employee_navbar.php'?>
            <div class="customer_top_nav">
             <div class="text">Welcome <?php echo $_SESSION['name1']?></div>
            </div>
           
            <div class="customer_body">
             <div class="content1">
                <p><span class="heading">Name: </span><?php echo $name;?></p>
            <p><span class="heading">Department: </span><?php echo $department;?></p>
            <p><span class="heading">Email: </span><?php echo $email;?></p>
            </div>
             <div class="content2">
            <p><span class="heading">dateOfJoinning: </span><?php echo $dateOfJoinning;?></p>
            <p><span class="heading">Last Login: </span><?php echo $last_login;?></p>
            </div>
            </div>
        </div>
    <?php include 'footer.php';?>
<?php
$date1=date('Y-m-d H:i:s');
$_SESSION['employee_date']=$date1;
?>
            
                