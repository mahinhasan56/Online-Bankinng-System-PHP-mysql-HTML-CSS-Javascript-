
  <?php
      session_start();
      if(!isset($_SESSION['customer_login'])){
        header('location:index.php');
      }
  ?>
     
    <?php
    $sender_id=$_SESSION["login_id"];
    $sender_name=$_SESSION["name"];

    $receiver_name=$_REQUEST['name'];
    $receiver_id=$_REQUEST['account_no'];
    $branch=$_REQUEST['branch_select'];
    $transfercode=$_REQUEST['transfercode'];
    include 'connection.php';
    $sql1="SELECT * FROM account WHERE sender_id='$sender_id' AND
    reciever_id='$receiver_id'";
    $result1=  mysql_query($sql1);
    $rows1=  mysql_fetch_array($result1);
    $s1=$rows1[1];
    $s2=$rows1[3];
    $sql="SELECT * FROM customer WHERE id='$receiver_id'";
                    
   $result=  mysql_query($sql) or die(mysql_error());
    $rows=  mysql_fetch_array($result) ;
                    
    if($sender_id==$rows[0]) 
    {
        echo '<script>alert("You cant add yourself as a receiver!");';
         echo 'window.location= "add_receiver_account.php";</script>';
    }
    elseif($s1==$sender_id && $s2==$receiver_id)
    {
         echo '<script>alert("You cant add a receiver twice!");';
          echo 'window.location= "add_receiver_account.php";</script>';
    }
                    
    elseif($rows[1]!=$receiver_name && $rows[0]!=$receiver_id && $rows[11]!=$branch && 
        $rows[12]!=$transfercode)
    {
        echo '<script>alert("receiver Not Found!\nPlease enter correct details");';
        echo 'window.location= "add_receiver_account.php";</script>';
    }
                    
    else{
                         
        $status="PENDING";
        $sql="insert into account values('','$sender_id','$sender_name','$receiver_id','$receiver_name','$status')";
        mysql_query($sql) or die(mysql_error());
        header("location:display_receiver.php");
    }

  