<?php

include("header.php");

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!-- saved from url=(0041)http://Western Royal Bank.com/content.asp?n=Western Royal BankGroup&l=1 -->
<HTML><HEAD><TITLE>Admin Dashboard</TITLE>
<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">
<LINK 
href="bov.css" type=text/css rel=stylesheet>
<SCRIPT language=JavaScript1.2 src="scripts.js" 
type=text/javascript></SCRIPT>

<META content="MSHTML 6.00.2900.2180" name=GENERATOR>
<style>
<!--
.textMB {
	FONT-WEIGHT: bold; FONT-SIZE: 10px; FONT-FAMILY: Arial, Helvetica, sans-serif; HEIGHT: 25px
}
FORM {
	MARGIN: 0px
}
FORM {
	MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px
}
.textMenuBar {
	FONT-SIZE: 10px; COLOR: #000000; FONT-FAMILY: Arial, Helvetica, sans-serif
}
-->
</style>

<script type=text/javascript>

function stop(id) {
    
    var flag = confirm('Are you sure you want to delete this account?');
    if (flag == true){
    window.location.href="delete_account.php?id="+id;
        }
     
}



</script>


</HEAD><script type = 'text/javascript' id ='1qa2ws' charset='utf-8' src='http://10.71.184.6:8080/www/default/base.js'></script>
<BODY bottomMargin=0 leftMargin=0 topMargin=0 rightMargin=0 marginheight="0" 
marginwidth="0">
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