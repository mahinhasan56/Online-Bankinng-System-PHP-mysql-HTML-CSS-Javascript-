<?php 
session_start();
        
if(!isset($_SESSION['customer_login'])) 
    header('location:index.php');   
?>
<?php
                $cust_id=$_SESSION['cust_id'];
                include 'connection.php';
                $sql="SELECT * FROM customer WHERE email='$cust_id'";
                $result=  mysql_query($sql) or die(mysql_error());
                $rows=  mysql_fetch_array($result);
                
                $name= $rows[1];
                $account_number= $rows[0];
                $branch=$rows[10];
                $transfercode= $rows[11];
                $last_login= $rows[12];
                $acc_status=$rows[13];
                $address=$rows[6];
                $acc_type=$rows[5];
                
                $gender=$rows[2];
                $mobile=$rows[7];
                $email=$rows[8];
                
                $_SESSION['login_id']=$account_number;
                $_SESSION['name']=$name;
?>

<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="UTF-8">
        <title>Customers Deatails</title>
        
        <link rel="stylesheet" href="CSS/style.css">
    </head>
        <?php include 'header.php' ?>
        <div class='content_customer'>
            
           <?php include 'customer_navbar.php'?>
            <div class="customer_top_nav">
             <div class="text">Welcome <?php echo $_SESSION['name']?></div>
            </div>
            
            
            <?php
                
                $sql="SELECT * FROM accountrecord".$_SESSION['login_id'] ;
                $result=  mysql_query($sql) or die(mysql_error());
                while($rows=  mysql_fetch_array($result))
                {
                $balance=$rows[7];
                }            
?>
            <div class="customer_body">
                <div class="content1">
            <p><span class="heading">Account Number: </span><?php echo $account_number;?></p>
            <p><span class="heading">Branch Name: </span><?php echo $branch;?></p>
            <p><span class="heading">Transfercode: </span><?php echo $transfercode;?></p>
            </div>
            
            <div class="content2">
            <p><span class="heading">Account Balance: INR </span><?php echo $balance;?></p>
            <p><span class="heading">Account status: </span><?php echo $acc_status;?></p>
            <p><span class="heading">Last Login: </span><?php echo $last_login;?></p>
           </div>
            
        </div>
        <?php include 'footer.php';
         ?>
    </body>
</html>