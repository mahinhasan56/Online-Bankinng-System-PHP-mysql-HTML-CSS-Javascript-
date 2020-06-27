<!--?php
session_start();
include ("header.php");
include("connection.php");
$results=mysql_query("Select * FROM accounts where customerid='255'");
while($sql=mysql_fetch_array($results)){
$acno=$sql[accno];
$sql[customerid];
$status=$sql[accstatus];
$primaryacc=$sql[primaryacc];
$accopendate=$sql[accopendate];
$acctype=$sql[accounttype];
$accbal=$sql[accountbalance];
$interest=$sql[interest];
}
?-->
<html><head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1"></head><body><table>
<tbody><tr>
<th colspan="2" scope="col">Sign Up<!--?php echo $_SESSION[customername] ?--></th>
</tr>

<tr>
    <td height="35" width="282">Account Number</td>
    <td width="262">&nbsp;<!--?php echo $acno ; ?--></td>
</tr>
<tr>
    <td height="35" width="282">Account Type</td>
    <td width="262">&nbsp;<!--?php echo $acctype ; ?--></td>
</tr>

<tr>
    <td height="35" width="282">Account Status</td>
    <td width="262">&nbsp;<!--?php echo $accstatus ; ?--></td>
</tr>
<tr>
    <td height="38" width="282">Primary Account</td>
    <td width="262">&nbsp;<!--?php echo $primaryacc ; ?--></td>
</tr>

<tr>
    <td height="38" width="282">Account Holder</td>
    <td width="262">&nbsp;<!--?php echo $_SESSION[customername]?--></td>
</tr>

<tr>
    <td height="38" width="282">Account Open Date</td>
    <td width="262">&nbsp;<!--?php echo $accopendate; ?--></td>
</tr>
</tbody></table>
<!--?php
include(footer.php);
?-->
</body></html>