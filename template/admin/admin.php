<?php

include("header.php");

?>

<div align="center">
<TABLE cellSpacing=0 cellPadding=0 width=734 border=0>
  <TBODY>
  <TR>
        <TD vAlign=top width=726>
      <TABLE cellSpacing=15 cellPadding=0 width=729 border=0>
        <TBODY>
        <TR>
          <TD>
            <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
              <TBODY>
              <TR>
                <TD class=titlemain height=25 width="23%">
                  <h3>Welcome,&nbsp;Admin </h3></TD>
                <TD class=titlemain height=25 width="77%">
												
												<?php
												include("nav.php")
												?>
													
              <TR>
                <TD colspan="2">
			  <img border="0" src="title_line_pr.gif" width="496" height="4"></TD></TR></TBODY></TABLE></TD></TR>
        <font size="1">
        <TR>
          <TD class=content>
          <font size = "-1">
					<table border="0" width="102%" id="table17" height="195" cellspacing="0">
						<tr>
							<td class="textMenuBar">
																															<table border="0" width="100%" height="228" cellspacing="1">
																																<tr>
																																	<td>
				
																																	<table border="0" width="100%" id="table14" cellspacing="1">
																																		<tr>
																																			<td colspan="3" height="18" bgcolor="#74064C">
																																			<b><font size="2" color="#FFFFFF">Below are all the customer accounts you have created</font></b></td>
																																		</tr>
																																		<tr>
																																			<td colspan="3" height="167">
							
							<font size="2">&nbsp;<TABLE border=1 cellPadding=2 cellSpacing=0 width="100%"><tr><td><h5><STRONG>ID</STRONG></h5></td><td><h5><STRONG>First Name</STRONG></h5></td><td><h5><STRONG>Last Name</STRONG></h5></td><td><h5><STRONG>Email</STRONG></h5></td><td><h5><STRONG>Sort Code</STRONG></h5></td><td><h5><STRONG>Pin</STRONG></h5></td>
							<td><h5><STRONG>Account No.</STRONG></h5></td><td><h5><STRONG><font size="2">Initial Deposit</font></STRONG></h5></td><td><h5><STRONG>DATE</STRONG></h5></td>
                            

<?php
include("fetch_data_to_table.php");
?>
                            

</tr></TABLE></font></td>
																																		</tr>
																																		<tr>
																																			<td width="37%">&nbsp;</td>
																																			<td width="23%" bgcolor="#EEEEEE">
																																			<p align="center">&nbsp;</td>
																																			<td width="38%">&nbsp;</td>
																																		</tr>
																																	</table>
																																	</td>
																																</tr>
																																<tr>
                      <TD align=left class=normaltext height=9 
                      style="BORDER-TOP: 1px solid" width="100%" bgcolor="#FFFFFF">&nbsp;</TD>
																																</tr>
																																<tr>
																																	<td width="150" height="17"></td>
																																	<td height="17"></td>
																																</tr>
																															</table>
																															<table border="0" width="100%">
																																<tr>
																																			<td width="37%">&nbsp;</td>
																																			<td width="23%" bgcolor="#74064C">
																																			<p align="center">&nbsp;</td>
																																			<td width="38%">&nbsp;</td>
																																		</tr>
																																<tr>
																																	<td>
																																	<p>&nbsp;</td>
																																</tr>
																															</table>
							</td>
						</tr>
						</table>
				</TD></TR></TABLE></TD>
    <TD vAlign=top>&nbsp;
      </TD></TR>
  <TR>
    <TD vAlign=top width=726>&nbsp;
      </TD>
    <TD vAlign=top width=4>&nbsp;
      </TD>
    <TD vAlign=top>&nbsp;
      </TD></TR></TBODY></TABLE></div>

</BODY></HTML>