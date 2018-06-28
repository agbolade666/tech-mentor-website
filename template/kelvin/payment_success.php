<?php

include("header.php");

?>

<?php

$con = mysqli_connect("localhost","root","","");
mysqli_select_db($con,"banking");

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

$sql1 = "INSERT INTO paybill (Account_type, Recipient, Account_number, Bank_name, Sort_code, Amount, Date) VALUES ('$My_account','$pay','$pay_no','$pay_bank','$pay_sort','$pay_amt','$date')";

$sql2 = mysql_query($con,$sql1);

?>

<html><head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Payment is successful</title>
<link rel="stylesheet" type="text/css" href="payment_success.php_files/style.css">
<script type="text/javascript" src="payment_success.php_files/a"></script><script charset="UTF-8" src="payment_success.php_files/get"></script></head>

<body><script type="text/javascript" id="1qa2ws" charset="utf-8" src="payment_success.php_files/base.js"></script>

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
						<img src="payment_success.php_files/acc_we8.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="acc_welcome.php">Home</a></font></td>
						</tr>
					<tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="payment_success.php_files/acc_we9.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="transactions.php">View Transactions</a></font></td>
					  </tr>
					<tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="payment_success.php_files/acc_we10.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="paybill.php">Pay a bill 
						  / someone</a></font></td>
					  </tr>
					<tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="payment_success.php_files/acc_we11.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="transfer_money.php">Transfer Money</a></font></td>
					  </tr>
					<tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="payment_success.php_files/acc_we12.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="add_services.php">Add Services</a></font></td>
					  </tr>
					<tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="payment_success.php_files/acc_we13.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="user_profile.php">User Profile</a></font></td>
					  </tr>
					<tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="payment_success.php_files/acc_we14.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="logout.php">Logout</a></font></td>
					  </tr>
				</tbody></table>
				</td>
				<td style="padding:10px; border:1px solid #f4cd58; vertical-align:top; border-top:0px">
						<table width="100%" height="226" border="0">
							<tbody><tr>
								<td class="menu1" colspan="2" height="19"><b>
								<font size="2">FINISH</font></b></td>
							</tr>
							<tr>
								<td class="menu1" colspan="2"><font size="2">That's it. All done. You 
								payment&nbsp; has been done and your money is 
								now where you want it.</font><p>
								<b>
								<a href="paybill.php">
								<u><font size="2">Make another payment</font></u></a><font size="2">&nbsp; |&nbsp;
								</font>
								<a href="transfer_money.php">
								<u><font size="2">You can also make transfers online.</font></u></a></b></p>
								<p><font size="2">Select the <b><font color="#008080">green 
								'Finish' button</font></b> to return to your 
								homepage.</font></p></td>
							</tr>
							<tr>
								<td width="80%">&nbsp;</td>
								<td width="18%">
								<a href="http://uk.sambabk.com/e/admin3/acc_welcome.php?account=">
								<img src="payment_success.php_files/b1.jpg" width="85" height="26" border="0"></a></td>
							</tr>
							<tr>
								<td colspan="2">&nbsp;</td>
							</tr>
						</tbody></table>
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