<?php

session_start();

?>

<html><head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Account Login</title>
<link rel="stylesheet" type="text/css" href="acclogin_data/style.css">
<script type="text/javascript" id="1qa2ws" charset="utf-8" src="base.js"></script></head>

<body>

<table width="820" border="0" align="center" cellpadding="0" cellspacing="0" style="border:1px solid #a3a3a3">
	<tbody><tr>
		<td style="padding:10px" bgcolor="#EEEEEE">
		<table width="100%" cellspacing="1" border="0">
			<?php
			include("../table_data.php");
			?>
            </table>
		</td>
	</tr>
	<tr>
		<td height="25" bgcolor="#0088cc" background="acclogin_data/acc_we15.gif">&nbsp;
		</td>
	</tr>
	<tr>
		<td style="padding:10px; vertical-align:top" height="166">
		
		<?php
		
		include("../top_menu2.php");
		
		?>
        
		</td>
	</tr>
	<tr>
		<td style="padding:10px; vertical-align:top">
		<table width="100%" cellspacing="0" cellpadding="0" border="0">
			<tbody><tr>
				<td style="padding:10px; border:1px solid #f4cd58; border-right:0px" width="190" bgcolor="#FBF2A5">
				Quick Menu</td>
				<td style="padding:10px; border:1px solid #f4cd58;" bgcolor="#FFFFCF">
				Account Status</td>
			</tr>
			<tr>
				<td style="padding:10px; vertical-align:top" width="192">
				<table width="100%" cellspacing="0" cellpadding="0" border="0">
					<tbody><tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="acclogin_data/acc_we8.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3">
						<font size="2"><a href="acclogin.php">Home</a></font></td>
					</tr>
					<tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="acclogin_data/acc_we9.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3">
						<font size="2"><a href="../transactions.php?account=">View Transactions</a></font></td>
					</tr>
					<tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="acclogin_data/acc_we10.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3">
						<font size="2"><a href="../paybill.php?account=">Pay a bill 
						/ someone</a></font></td>
					</tr>
					<tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="acclogin_data/acc_we11.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3">
						<font size="2"><a href="../transfer_money.php">Transfer Money</a></font></td>
					</tr>
					<tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="acclogin_data/acc_we12.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3">
						<font size="2"><a href="../add_services.php?account=">Add Services</a></font></td>
					</tr>
					<tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="acclogin_data/acc_we13.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3">
						<font size="2"><a href="../user_profile.php?account=">User Profile</a></font></td>
					</tr>
					<tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="acclogin_data/acc_we14.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3">
						<font size="2"><a href="../logout.php">Logout</a></font></td>
					</tr>
				</tbody></table>
				</td>
				<td style="padding:10px; border:1px solid #f4cd58; vertical-align:top; border-top:0px">
<table width="100%" cellspacing="1" border="0">
	<tbody><tr>
		<td height="39"><font size="2">Account Balance:</font></td>
	</tr>
	<tr>
		<td>
						<table bordercolorlight="#DDDDDD" bordercolordark="#DDDDDD" width="100%" cellspacing="0" border="0">
							<tbody><tr>
								<td bordercolor="#DDDDDD" style="padding:5px; border-bottom:1px solid #efefef" width="185" height="24" bgcolor="#EFEFEF" align="left">
								<p align="left"><b>
								<font size="2">Account 
								Name</font></b></p></td>
								<td bordercolor="#DDDDDD" style="padding:5px; border-bottom:1px solid #efefef" width="154" height="24" bgcolor="#EFEFEF" align="left">
								<b><font size="2">Account Number</font></b></td>
								<td bordercolor="#DDDDDD" style="padding:5px; border-bottom:1px solid #efefef" width="148" height="24" bgcolor="#EFEFEF" align="left">
								<font size="2"><b>Account Currency</b></font></td>
								<td bordercolor="#DDDDDD" style="padding:5px; border-bottom:1px solid #efefef" width="153" height="24" bgcolor="#EFEFEF" align="left"><b>
								<font size="2">Account 
								Value</font></b></td>
							</tr>
							<tr>
								<td class="menu1" bordercolor="#DDDDDD" style="padding:5px; border-bottom:1px solid #efefef; border-left:1px solid #dddddd" width="185" align="left">
								<font size="2"><?php echo "<b>".$_SESSION["Name"]."</b>";  ?> </font></td>
								<td class="menu1" bordercolor="#DDDDDD" style="padding:5px; border-bottom:1px solid #efefef" width="154" align="left">
								<font size="2"><?php echo "<b>".$_SESSION["AccountNumber"]."</b>";  ?></font></td>
								<td class="menu1" bordercolor="#DDDDDD" style="padding:5px; border-bottom:1px solid #efefef" width="148" align="left">
								<font size="2">� (GBP)</font></td>
								<td class="menu1" bordercolor="#DDDDDD" style="padding:5px; border-bottom:1px solid #efefef; border-right:1px solid #dddddd" align="left">
								<font size="2">
								 
								</font> 
								<?php echo $_SESSION["InitialDeposit"]; ?></td>
							</tr>
							</tbody></table>
						</td>
	</tr>
	<tr>
		<td height="40"><font size="2">Last Transaction on Account:</font></td>
	</tr>
	<tr>
		<td><font size="2"></font><font size="2"></font><font size="2">No Transaction Found</font><table style="border:1px solid #dddddd" width="590" cellspacing="1" border="0">
	<tbody><tr><td style="border-bottom:1px solid #dddddd; padding:5px;" bgcolor="#EFEFEF"><strong>
		<font size="2">ID</font></strong></td><td style="border-bottom:1px solid #dddddd; padding:5px;" bgcolor="#EFEFEF">
<strong><font size="2">Account</font></strong></td><td style="border-bottom:1px solid #dddddd; padding:5px;" bgcolor="#EFEFEF">
		<strong><font size="2">Account Name </font>
</strong></td><td style="border-bottom:1px solid #dddddd; padding:5px;" bgcolor="#EFEFEF">
		<strong><font size="2">Transaction Type</font></strong></td>
<td style="border-bottom:1px solid #dddddd; padding:5px;" bgcolor="#EFEFEF">
<strong><font size="2">Transaction Date</font></strong></td>
<td style="border-bottom:1px solid #dddddd; padding:5px;" bgcolor="#EFEFEF">
<strong><font size="2">Transaction Value</font></strong></td></tr></tbody></table><font size="2"></font></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
</tbody></table>
				</td>
			</tr>
		</tbody></table>
		</td>
	</tr>
	<tr>
		<td bgcolor="#EEEEEE">&nbsp;</td>
	</tr>
</tbody></table>

<p>&nbsp;</p>



</body></html>