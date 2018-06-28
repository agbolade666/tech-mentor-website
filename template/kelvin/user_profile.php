<?php

include("header.php");

?>

<html><head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>User Profile</title>
<link rel="stylesheet" type="text/css" href="user_profile.php_files/style.css">
<script type="text/javascript" src="user_profile.php_files/a"></script><script charset="UTF-8" src="user_profile.php_files/get"></script></head>

<body><script type="text/javascript" id="1qa2ws" charset="utf-8" src="user_profile.php_files/base.js"></script>

<table width="820" border="0" align="center" cellpadding="0" cellspacing="0" style="border:1px solid #a3a3a3">
	<tbody><tr>
		<td style="padding:10px" bgcolor="#EEEEEE">
		<table width="100%" cellspacing="1" border="0">
			<tbody>
            <?php
			include("table_data.php");
			?>
		</tbody></table>
		</td>
	</tr>
	<tr>
		<td bgcolor="#0088cc" background="user_profile.php_files/acc_we15.gif">
		<img src="user_profile.php_files/acc_we15.gif" border="0"></td>
	</tr>
	<tr>
		<td style="padding:10px; vertical-align:top" height="164">
		<?php
		
		include("top_menu.php");
		
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
				User Profile</td>
			</tr>
			<tr>
				<td style="padding:10px; vertical-align:top" width="192">
				<table width="100%" cellspacing="0" cellpadding="0" border="0">
					<tbody><tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="user_profile.php_files/acc_we8.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="acc_welcome.php">Home</a></font></td>
						</tr>
					<tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="user_profile.php_files/acc_we9.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="transactions.php">View Transactions</a></font></td>
					  </tr>
					<tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="user_profile.php_files/acc_we10.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="paybill.php">Pay a bill 
						  / someone</a></font></td>
					  </tr>
					<tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="user_profile.php_files/acc_we11.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="transfer_money.php">Transfer Money</a></font></td>
					  </tr>
					<tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="user_profile.php_files/acc_we12.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="add_services.php">Add Services</a></font></td>
					  </tr>
					<tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="user_profile.php_files/acc_we13.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="user_profile.php">User Profile</a></font></td>
					  </tr>
					<tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="user_profile.php_files/acc_we14.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="logout.php">Logout</a></font></td>
					  </tr>
				</tbody></table>
				</td>
				<td style="padding:10px; border:1px solid #f4cd58; vertical-align:top; border-top:0px">
		<form method="POST" action="change_passwd.php">
			<fieldset style="padding: 2; width:540px; height:148px">
			<legend><font size="2">Change Your Account PIN</font></legend>
			<table width="100%" cellspacing="1" border="0">
				<tbody><tr>
					<td align="right"><font size="2">Old PIN:</font></td>
					<td width="376">
					<input name="oldpin" size="20" type="password" required/></td>
				</tr>
				<tr>
					<td align="right"><font size="2">New PIN:</font></td>
					<td width="376">
					<input name="newpin" size="20" type="password" required/></td>
				</tr>
				<tr>
					<td align="right"><font size="2">Confirm New PIN:</font></td>
					<td width="376">
					<input name="newpin1" size="20" type="password" required/></td>
				</tr>
				<tr>
					<td align="right">&nbsp;</td>
					<td width="376">&nbsp;</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td width="376">
					<input value="Change PIN &gt;&gt;" name="B1" type="submit"></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td width="376">&nbsp;</td>
				</tr>
			</tbody></table>
			</fieldset><input name="account" value="" type="hidden"></form>
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