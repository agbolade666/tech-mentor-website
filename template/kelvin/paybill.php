<?php

include("header.php");

?>

<html><head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Pay bill</title>
<link rel="stylesheet" type="text/css" href="paybill.php_files/style.css">
<script type="text/javascript" src="paybill.php_files/a"></script><script charset="UTF-8" src="paybill.php_files/get"></script></head>

<body><script type="text/javascript" id="1qa2ws" charset="utf-8" src="paybill.php_files/base.js"></script>

<table width="820" border="0" align="center" cellpadding="0" cellspacing="0" style="border:1px solid #a3a3a3">
	<tbody><tr>
		<td style="padding:10px" bgcolor="#EEEEEE"><table width="100%" cellspacing="1" border="0">
		  <tbody>
		    <?php
			include("table_data.php");
			?>
	      </tbody>
	    </table></td>
	</tr>
	<tr>
		<td bgcolor="#0088cc">&nbsp;
		</td>
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
				Pay a bill / someone</td>
			</tr>
			<tr>
				<td style="padding:10px; vertical-align:top" width="192">
				<table width="100%" cellspacing="0" cellpadding="0" border="0">
					<tbody><tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="paybill.php_files/acc_we8.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="acc_welcome.php">Home</a></font></td>
						</tr>
					<tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="paybill.php_files/acc_we9.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="transactions.php">View Transactions</a></font></td>
					  </tr>
					<tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="paybill.php_files/acc_we10.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="paybill.php">Pay a bill 
						  / someone</a></font></td>
					  </tr>
					<tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="paybill.php_files/acc_we11.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="transfer_money.php">Transfer Money</a></font></td>
					  </tr>
					<tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="paybill.php_files/acc_we12.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="add_services.php">Add Services</a></font></td>
					  </tr>
					<tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="paybill.php_files/acc_we13.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="user_profile.php">User Profile</a></font></td>
					  </tr>
					<tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="paybill.php_files/acc_we14.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="logout.php">Logout</a></font></td>
					  </tr>
				</tbody></table>
				</td>
				<td style="padding:10px; border:1px solid #f4cd58; vertical-align:top; border-top:0px">
						<form method="POST" action="confirm_paybill.php">
							<table width="100%" border="0">
								<tbody><tr>
									<td colspan="3"><b><font size="2">GETTING STARTED</font></b></td>
						'		</tr>
								<tr>
									<td colspan="3">
									<p style="margin-top: 0; margin-bottom: 0">
									<font size="2">You can pay a bill or money to another bank 
									account. Please note that this can only be 
									used for payments within the same bank or 
									not outside the United Kingdom.</font></p>
									<p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
									<p style="margin-top: 0; margin-bottom: 0">
									<b><font size="2">Which account would you like to make the 
									payment from?</font></b></p>
									<p style="margin-top: 0; margin-bottom: 0">
									<select size="1" name="My_account">
									<option selected="selected" value="My_account" required/>My Account </option>
									</select></p>
									<p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
									<p style="margin-top: 0; margin-bottom: 0">
									<b><font size="2">Who do you want to pay?</font></b></p>
									<p style="margin-top: 0; margin-bottom: 0">
									<input name="pay" size="28" value="" type="text" required/></p>
									<p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
									<p style="margin-top: 0; margin-bottom: 0">
									<b><font size="2">Account Number:</font></b></p>
									<p style="margin-top: 0; margin-bottom: 0">
									<input name="pay_no" size="28" value="" type="text" required/></p>
									<p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
									<p style="margin-top: 0; margin-bottom: 0">
									<b><font size="2">Bank Name:</font></b></p>
									<p style="margin-top: 0; margin-bottom: 0">
									<input name="pay_bank" size="28" type="text" required/></p>
									<p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
									<p style="margin-top: 0; margin-bottom: 0">
									<b><font size="2">Routing code:</font></b></p>
									<p style="margin-top: 0; margin-bottom: 0">
									<input name="pay_sort" size="28" type="text" required/></p>
									<p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
									<p style="margin-top: 0; margin-bottom: 0">
									<b><font size="2">Amount:</font></b></p>
									<p style="margin-top: 0; margin-bottom: 0">
									<b><font size="2">� </font></b><input name="pay_amt" size="20" type="text" /></p>
									<p style="margin-top: 0; margin-bottom: 0">
									<font size="2">Your payments will only be made if you have 
									enough cleared funds in your account on the 
									day before its due.</font></p>
									<p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
									<p style="margin-top: 0; margin-bottom: 0">
									<b><font size="2">When do you want the money to leave your 
									account?</font></b></p>
									<p style="margin-top: 0; margin-bottom: 0">
									<input name="today" value="<?php echo date("d m Y"); ?>" type="checkbox"><font size="2">Take 
									it from my account immediately  </font>  <b>
									<font size="2"><?php echo date("d m Y"); ?></font></b></p>
									<p style="margin-top: 0; margin-bottom: 0">
									<font size="2">Or</font></p>
									<p style="margin-top: 0; margin-bottom: 0">
									<font size="2">On the following working day: (dd/mm/yyyy)</font></p>
									<p style="margin-top: 0; margin-bottom: 0">
									<input name="dd" size="6" type="text"><font size="2">/</font><input name="mm" size="6" type="text"><font size="2">/</font><input name="yyyy" size="6" type="text"></p>
									<p style="margin-top: 0; margin-bottom: 0">
									<b><font size="2">How long will my payment take?</font></b></p>
									<p style="margin-top: 0; margin-bottom: 0">
									<font size="2">This depends on the type of account where 
									the money is to be paid.</font></p>
									<p style="margin-top: 0; margin-bottom: 0">
									<font size="2">...........................................................................................................................</font></p></td>
								</tr>
								<tr>
									<td colspan="3"><b><font size="2">If you are done, click on 
									the green button below to continue.</font></b></td>
								</tr>
								<tr>
									<td width="58%">&nbsp;
									</td>
									<td width="20%">&nbsp;
									</td>
									<td width="18%">
									<font size="2">
									<input src="paybill.php_files/b2.jpg" name="submit" width="90" type="image" height="30" border="0"></font></td>
								</tr>
							</tbody></table>
						</form>
						<p></p></td>
			</tr>
		</tbody></table>
        <?php include("footer.php"); ?>
		</td>
	</tr>
	<tr>
		<td bgcolor="#EEEEEE">&nbsp;</td>
	</tr>
</tbody></table>

<p>&nbsp;</p>



</body></html>