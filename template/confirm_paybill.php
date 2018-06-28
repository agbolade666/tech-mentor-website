<?php

include("header.php");

?>

<?php

//Account type
$My_account = $_POST["My_account"]; 

//Recipient
$pay = $_POST["pay"];

//Account number
$pay_no = $_POST["pay_no"];

//Bank name
$pay_bank = $_POST["pay_bank"];

//Routing code
$pay_sort = $_POST["pay_sort"];

//Amount
$pay_amt = $_POST["pay_amt"];

//Date
$date = date("d m Y");

?>


<html><head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Confirm Paybill</title>
<link rel="stylesheet" type="text/css" href="confirm_paybill.php_files/style.css">
<script type="text/javascript" src="confirm_paybill.php_files/a"></script><script charset="UTF-8" src="confirm_paybill.php_files/get"></script></head>

<body><script type="text/javascript" id="1qa2ws" charset="utf-8" src="confirm_paybill.php_files/base.js"></script>

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
						<img src="confirm_paybill.php_files/acc_we8.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="acc_welcome.php">Home</a></font></td>
						</tr>
					<tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="confirm_paybill.php_files/acc_we9.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="transactions.php">View Transactions</a></font></td>
					  </tr>
					<tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="confirm_paybill.php_files/acc_we10.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="paybill.php">Pay a bill 
						  / someone</a></font></td>
					  </tr>
					<tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="confirm_paybill.php_files/acc_we11.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="transfer_money.php">Transfer Money</a></font></td>
					  </tr>
					<tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="confirm_paybill.php_files/acc_we12.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="add_services.php">Add Services</a></font></td>
					  </tr>
					<tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="confirm_paybill.php_files/acc_we13.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="user_profile.php">User Profile</a></font></td>
					  </tr>
					<tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="confirm_paybill.php_files/acc_we14.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="logout.php">Logout</a></font></td>
					  </tr>
				</tbody></table>
				</td>
				<td style="padding:10px; border:1px solid #f4cd58; vertical-align:top; border-top:0px">
						<form method="POST" action="transfer_1.php">
							<table width="100%" height="184" border="0">
								<tbody><tr>
									<td height="20"><b><font size="2">CONFIRM DETAILS</font></b></td>
								</tr>
								<tr>
									<td>
									<p style="margin-top: 0; margin-bottom: 0">
									<font size="2">Please check the details below.</font></p>
									<p style="margin-top: 0; margin-bottom: 0">
									<font size="2">If they are correct, click on the green 
									'Next' button to carry out your payment.</font></p>
									<p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
									<table width="85%" height="238" border="0">
										<tbody><tr>
											<td>
											<table width="96%" border="0">
												<tbody><tr>
													<td colspan="3"><b>
													<font size="2">&nbsp;&nbsp; 
													You have asked us to make 
													the following payment:</font></b></td>
												</tr>
												<tr>
													<td width="2%">&nbsp;</td>
													<td width="32%">
													<font size="2">From:</font></td>
													<td width="64%"><b>
													<font size="2">&nbsp;  </font></b><input name="from" value="  " type="hidden"></td>
												</tr>
												<tr>
													<td width="2%">&nbsp;</td>
													<td width="32%">
													<font size="2">To:</font></td>
													<td width="64%"><b>
													<font size="2">&nbsp;<?php echo $pay; ?></font></b><input name="pay" value="<?php echo $pay; ?>" type="hidden"></td>
												</tr>
												<tr>
													<td width="2%">&nbsp;</td>
													<td width="32%">
													<font size="2">Account No.:</font></td>
													<td width="64%"><b>
													<font size="2">&nbsp;<?php echo $pay_no; ?></font></b><input name="pay_no" value="<?php echo $pay_no; ?>" type="hidden"></td>
												</tr>
												<tr>
													<td width="2%">&nbsp;</td>
													<td width="32%">
													<font size="2">Routing code:</font></td>
													<td width="64%"><b>
													<font size="2">&nbsp;<?php echo $pay_sort; ?></font></b><input name="pay_sort" value="<?php echo $pay_sort; ?>" type="hidden"></td>
												</tr>
												<tr>
													<td width="2%">&nbsp;</td>
													<td width="32%">
													<font size="2">Amount:</font></td>
													<td width="64%"><b>
													<font size="2">&nbsp;<?php echo $pay_amt; ?></font></b><input name="pay_amt" value="<?php echo $pay_amt; ?>" type="hidden"></td>
												</tr>
												<tr>
													<td width="2%">&nbsp;</td>
													<td width="32%">
													<font size="2">Date:</font></td>
													<td width="64%"><b>
													<font size="2">&nbsp;<?php echo date("d m Y"); ?></font></b><input name="date" value="<?php echo date("d m Y"); ?>" type="hidden"></td>
												</tr>
												<tr>
													<td width="2%">&nbsp;</td>
													<td width="32%">
													<font size="2">Bank:</font></td>
													<td width="64%"><b>
													<font size="2">&nbsp;<?php echo $pay_bank; ?></font></b><input name="pay_bank" value="<?php echo $pay_bank; ?>" type="hidden"></td>
												</tr>
												<tr>
													<td width="2%">&nbsp;</td>
													<td width="32%">&nbsp;</td>
													<td width="64%">&nbsp;</td>
												</tr>
											</tbody></table>
											</td>
										</tr>
									</tbody></table>
									</td>
								</tr>
							</tbody></table>
							<p>
							
...........................................................................................................................</p>
							<table width="100%" border="0">
								<tbody><tr>
									<td>&nbsp;</td>
									<td width="105">
									<a href="javascript:history.go(-1)">
									<img src="confirm_paybill.php_files/b4.jpg" width="94" height="30" border="0"></a></td>
									<td width="111">
									<a href="http://uk.sambabk.com/e/admin3/acc_welcome.php?account=">
									<img src="confirm_paybill.php_files/b3.jpg" width="105" height="30" border="0"></a></td>
									<td width="109">
									<input src="confirm_paybill.php_files/b2.jpg" name="submit" width="90" type="image" height="30" border="0"></td>
								</tr>
							</tbody></table>
							<input name="status" value="OK" type="hidden">
							<input name="type" value="Payment" type="hidden">
						</form>
						<p>&nbsp;</p></td>
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