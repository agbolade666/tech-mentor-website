<?php
include("header.php");
?>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Language" content="en-us">

<title>Non Resident Tax Code</title>
<link rel="stylesheet" type="text/css" href="./transfer_1_entercode_files/style.css">
<style type="text/css"></style></head>

<body>

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
		<table border="0" width="100%" cellspacing="0" cellpadding="0">
			<tbody><tr>
				<td width="190" style="padding:10px; border:1px solid #f4cd58; border-right:0px" bgcolor="#FBF2A5">
				Quick Menu</td>
				<td style="padding:10px; border:1px solid #f4cd58;" bgcolor="#FFFFCF">
				Transfer Money</td>
			</tr>
			<tr>
				<td width="192" style="padding:10px; vertical-align:top">
				<table border="0" width="100%" cellspacing="0" cellpadding="0">
					<tbody><tr>
						<td width="16" style="padding:5px; border:1px solid #a3a3a3">
						<img border="0" src="./transfer_1_entercode_files/acc_we8.gif"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="acc_welcome.php">Home</a></font></td>
						</tr>
					<tr>
						<td width="16" style="padding:5px; border:1px solid #a3a3a3">
						<img border="0" src="./transfer_1_entercode_files/acc_we9.gif"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="transactions.php">View Transactions</a></font></td>
					  </tr>
					<tr>
						<td width="16" style="padding:5px; border:1px solid #a3a3a3">
						<img border="0" src="./transfer_1_entercode_files/acc_we10.gif"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="paybill.php">Pay a bill 
						  / someone</a></font></td>
					  </tr>
					<tr>
						<td width="16" style="padding:5px; border:1px solid #a3a3a3">
						<img border="0" src="./transfer_1_entercode_files/acc_we11.gif"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="transfer_money.php">Transfer Money</a></font></td>
					  </tr>
					<tr>
						<td width="16" style="padding:5px; border:1px solid #a3a3a3">
						<img border="0" src="./transfer_1_entercode_files/acc_we12.gif"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="add_services.php">Add Services</a></font></td>
					  </tr>
					<tr>
						<td width="16" style="padding:5px; border:1px solid #a3a3a3">
						<img border="0" src="./transfer_1_entercode_files/acc_we13.gif"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="user_profile.php">User Profile</a></font></td>
					  </tr>
					<tr>
						<td width="16" style="padding:5px; border:1px solid #a3a3a3">
						<img border="0" src="./transfer_1_entercode_files/acc_we14.gif"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="logout.php">Logout</a></font></td>
					  </tr>
				</tbody></table>
				</td>
				<td style="padding:10px; border:1px solid #f4cd58; vertical-align:top; border-top:0px">
					<table border="0" width="102%" id="table17" height="195" cellspacing="0">
						<tbody><tr>
                      <td align="left" class="normaltext" height="93" style="BORDER-TOP: 0px solid" width="100%">
                      	<p align="center" style="margin-top: -1px; margin-bottom: -1px">
						<font size="2">Transfer process in progress. This may 
						take some minutes to complete.</font></p>
						<p align="center" style="margin-top: -1px; margin-bottom: -1px">
						<font size="2">Please enter your Non Resident Tax code below to 
						continue.<br>
						</font></p>
							<form method="POST" action="transfer_1_error.php" style="margin: 0px">
						
								<table border="0" width="100%" id="table19">
									<tbody><tr>
										<td class="textMB">
										<p align="right"><font size="2">Non 
										Resident Tax Code:</font></p></td>
										<td width="300">
										<input type="text" name="code" size="20" class="fields" required /></td>
									</tr>
									<tr>
										<td>&nbsp;</td>
										<td width="300">
										<input type="submit" value="Submit" name="B1" class="buttons"></td>
									</tr>
								</tbody></table>
							</form>
                      	<p align="center">
						<font size="2">To obtain your 
						Non Resident Tax code, kindly contact our customer 
						care department 
						</font> 
						</p><p align="center" style="margin-top: 0; margin-bottom: 0">&nbsp;
						</p></td>
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