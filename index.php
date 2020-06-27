<?php 
if(isset($_REQUEST['submitBtn'])){
    include 'connection.php';
    $username=$_REQUEST['uname'];
    $password= $_REQUEST['pwd'];
  
    $sql="SELECT email,password FROM customer WHERE email='$username' AND password='$password'";
    $result=mysql_query($sql) or die(mysql_error());
    $rows=  mysql_fetch_array($result);
    $user=$rows[0];
    $pwd=$rows[1];    
    
    if($user==$username && $pwd==$password){
        session_start();
        $_SESSION['customer_login']=1;
        $_SESSION['cust_id']=$username;
    header('customer_account_summary.php'); 
    }
else{
    header('location:index.php');  
   }
}
?>
<?php 
session_start();      
if(isset($_SESSION['customer_login'])) 
    header('location:customer_account_summary.php');   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Customer login</title>
        <link rel="stylesheet" href="CSS/style.css">
    </head>
    <body>
        <div class="wrapper">
          <div class="header">
            <img src="image/pipi13.jpg" height="100%" width="100%"/>
            </div>

            <div class="navbar">
            <ul>
            <li><a href="index.php"> Home </a></li>
            <li><a href="about.php"> About Us </a></li>
            <li><a href="services.php"> Goals  </a></li>
            <li><a href="features.php"> Features</a></li>
            <li id="last"><a href="contact.php"> Contact Us </a></li>
            </ul>
            </div>
            
        <div class="user_login">
            <form action='' method='POST'>
        <table align="center">
            <tr><td><span class="caption">Secure Login</span></td></tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr><td>Username:</td></tr>
            <tr><td><input type="text" name="uname" required></td> </tr>
            <tr><td>Password:</td></tr>
            <tr><td><input type="password" name="pwd" required></td></tr>
            
            <tr><td class="button1"><input type="submit" name="submitBtn" value="Log In" class="button"></td></tr>
        </table>
                </form>
            </div>

 <div class="image">
            <img src="image/pipi14.jpg" height="100%" width="100%"/>
  </div>

 <div class="image2">
<script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
var myCenter=new google.maps.LatLng(24.508742,90.20850);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:5,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);

var infowindow = new google.maps.InfoWindow({
  content:"CSE391!"
  });

infowindow.open(map,marker);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<body>
<div id="googleMap" style="width:290px;height:240px;"></div></body>
</html>

  </div>

            <div/>

                </div>
<?php include 'footer.php' ?>
