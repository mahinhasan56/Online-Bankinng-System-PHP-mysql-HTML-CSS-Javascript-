<?php 
session_start();
        
if(!isset($_SESSION['customer_login'])) 
    header('location:index.php');   
?>
<?php
     $t_amount=$_REQUEST['t_val'];
     $sender_id=$_SESSION["login_id"];
     $reciever_id=$_REQUEST['transfer'];
     
     //select last transaction id in reciever's accountrecord.
     include 'connection.php';
     $sql="SELECT MAX(transactionid) from accountrecord".$reciever_id;
     $result=mysql_query($sql) or die(mysql_error());
     $rows=  mysql_fetch_array($result);
     $r_last_tid=$rows[0];
    
    //select the details in the last row of reciever's accountrecord.
    $sql="SELECT * from accountrecord".$reciever_id." WHERE transactionid='$r_last_tid'";
    $result=mysql_query($sql) or die(mysql_error());
    while($rows= mysql_fetch_array($result)){
    $r_amount=$rows[7];
    $r_name=$rows[2];
    $r_branch=$rows[3];
    $r_transfercode=$rows[4];
    }
    
   //select the last transaction id in the sender's accountrecord
     $sql="SELECT MAX(transactionid) from accountrecord".$sender_id;
     $result=mysql_query($sql) or die(mysql_error());
     $rows=  mysql_fetch_array($result);
     $s_last_tid=$rows[0];
    
    //select the details in the last row of sender's accountrecord.
    $sql="SELECT * from accountrecord".$sender_id." WHERE transactionid='$s_last_tid'";
    $result=mysql_query($sql) or die(mysql_error());
    while($rows= mysql_fetch_array($result)) {
    $s_amount=$rows[7];
    $s_name=$rows[2];
    $s_branch=$rows[3];
    $s_transfercode=$rows[4];
    }
    
    $date=date("Y-m-d");
     $date=date("Y-m-d");
    
    $s_total=$s_amount-$t_amount; //sender's final balance.
    if($t_amount>=10000000)
    {
        echo '<script>alert("You  cannot transfer more than this amount.");';
        echo 'window.location= "customer_account_summary.php";</script>';
    }
    
    $s_total=$s_amount-$t_amount; //sender's final balance.
    
    if($s_amount<=500)
    {
        echo '<script>alert("Your account balance is less than Rs. 500.\n\nYou 
            must maintain a minimum balance of Rs. 500 in order to proceed with the transfer.");';
        echo 'window.location= "customer_account_summary.php";</script>';
    }
    elseif($t_amount<100){
         echo '<script>alert("You cannot transfer less than Rs. 100");';
        echo 'window.location= "customer_account_summary.php";</script>';
    }
    elseif($s_total<500)
    {
        echo '<script>alert("You do not have enough balance in your 

            account to proceed this transfer.\n\nYou must maintain a 
            minimum of Rs. 500 in your account.");';
        echo 'window.location= "customer_account_summary.php";</script>';
    }
    
    else{ 
        //insert statement into reciever accountrecord.
        $r_total=$r_amount+$t_amount;
        $sql1="insert into accountrecord".$reciever_id." values('','$date','$r_name','$r_branch','$r_transfercode','$t_amount','0','$r_total','BY $s_name')";
        mysql_query($sql1) or die(mysql_error());
        
        //insert statement into sender accountrecord.
        $s_total=$s_amount-$t_amount;
        $sql2="insert into accountrecord".$sender_id." values('','$date','$s_name','$s_branch','$s_transfercode','0','$t_amount','$s_total','TO $r_name')";
         mysql_query($sql2) or die(mysql_error());
        
        echo '<script>alert("Transfer Successful.");';
        echo 'window.location= "customer_account_summary.php";</script>';

    }
?>