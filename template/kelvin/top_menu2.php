
<table border="0" width="100%" cellspacing="1">
			<tr>
				<td width="134" style='padding:10px; border:0px solid #a3a3a3'>
                <?php 
				$src_prefix = "../admin/uploads/";
				$src_suffix = $_SESSION["PassportPicture"];
				$src = $src_prefix . $src_suffix;
				//echo $src;
				//echo $src;
				?>
<img src="<?php  echo $src; ?>" height="120" width="97" />				
 </td>
				<td style='padding:10px; vertical-align:top; padding-right:0px'>
						<table border="0" width="100%" height="122" cellspacing="0" cellpadding="0">
							<tr>
								<td width="140" align="right" style='border-style:solid; border-width:0px; '>
								<font size='2'>Name: </font></td>
								<td align="left" style='border:1px solid #c3c3c3; border-bottom:0px'>
								<font size='2'><?php echo "<b>".strtoupper($_SESSION["Name"])."</b>";  ?></font></td>
							</tr>
							<tr>
								<td width="140" align="right" style='border-style:solid; border-width:0px; '>
								<font size='2'>Account Number:</font></td>
								<td align="left" style='border:1px solid #c3c3c3; border-bottom:0px'>
								<font size='2'><?php echo "<b>".$_SESSION["AccountNumber"]."</b>" ;  ?></font></td>
							</tr>
							<tr>
								<td width="140" align="right" style='border-style:solid; border-width:0px; '>
								<font size='2'>Sort code:</font></td>
								<td align="left" style='border:1px solid #c3c3c3; border-bottom:0px' >
								<font size='2'><?php echo "<b>".$_SESSION["SortCode"]."</b>";  ?></font></td>
							</tr>
							<tr>
								<td width="140" align="right" style='border-style:solid; border-width:0px; '>
								<font size='2'>Date of 
								Deposit:</font></td>
								<td align="left" style='border:1px solid #c3c3c3'>
								<font size='2'><?php echo "<b>".$_SESSION["Date"]."</b>";  ?></font></td>
							</tr>
							</table>
						</td>
			</tr>
			</table>