<?php 
session_start();
        
if(!isset($_SESSION['admin_login'])) 
    header('location:adminlogin.php');   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add interest</title>
        
        <link rel="stylesheet" href="CSS/style.css">
    </head>

<?php include 'header.php'; ?>
    
        <div class='content_addstaff'>
            <?php include 'admin_navbar.php'?>
            <div class='addstaff'>
        <form action="add_interest.php" method="POST">
             <table align='center'>
                 <tr><td colspan='2' align='center' style='color: 
#33CC33;'><h3><u>Add Staff</u></h3></td></tr>
                <tr>
                    <td> Customer's name</td>
                    <td><input type="text" name="name" required=""/></td>
                </tr>

                 <tr>
                    <td> Account Number</td>
                    <td><input type="text" name="accountno" required=""/></td>
                </tr>
                
                <tr>
                    <td>
                        DOB
                    </td>
                    <td>
                        <input type="date" name="dob" required=""/>
                    </td>
                </tr>
                
                <tr>
                    <td>Address:</td>
                    <td><textarea name="address" required=""></textarea></td>
                </tr>

                <tr>
                    <td>Mobile</td>
                    <td><input type="text" name="mobile" required=""/></td>
                </tr>
            
                <tr>
                    <td>
                        Amount
                    </td>
                    <td>
                        <select name="deposit">
                            <option>200000</option>
                            <option>500000 </option>
                            <option>1000000</option>
                            <option>5000000 </option>
                            <option>10000000</option>
                            <option>50000000</option>
                            <option>100000000</option>
                            <option>1000000000</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Email id</td>
                    <td><input type="email" name="email" required=""/></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="pwd" required=""/></td>
                </tr>
                
                <tr >
                    <td colspan="2" align='center' style='padding-top:20px' >
                    <input type="submit" name="add_staff" value="Adddeposit" class='addstaff_button'/></td>
                </tr>
                </table>
        </form>
                </div>
        </div>
<?php include 'footer.php';?>
    </body>
</html>