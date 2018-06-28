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
                <TD class=titlemain height=25 width="34%">
                  <h3>Welcome,&nbsp;Admin </h3></TD>
                <TD class=titlemain height=25 width="66%">
													
													<?php
												include("nav.php")
												?>
                                                
													</TD></TR>
              <TR>
                <TD colspan="2">
				<IMG height=4 alt="Design Spacer" 
                  src="spacer.gif" width=354></TD></TR>
              <TR>
                <TD colspan="2">
				<img border="0" src="title_line_pr.gif" width="496" height="4"></TD></TR></TBODY></TABLE></TD></TR>
        <TR>
          <TD class=content>
					<table border="0" width="102%" id="table17" height="195" cellspacing="0">
						<tr>
							<td class="textMenuBar">
	<table border="0" width="96%" height="90">
		<tr>
			<td>
					<table border="1" width="100%" id="table19" height="199" cellspacing="0" bordercolor="#2F2573">
						<tr>
																																			<td height="18" bgcolor="#2F2573">
																																			<font size="2" color="#FFFFFF"><b>Add New Client</b></font></td>
																																		</tr>
						<tr>
																																			<td height="167">
							
	<font size="2">&nbsp;</font><FORM name="form" action="insert_new_client.php" method="POST" enctype="multipart/form-data">
                            
                  <TABLE border=0 cellPadding=2 cellSpacing=0 width="100%" id="table18">
                    <TBODY>
                    <TR>
                      <TD colSpan=2 class="textMB">
						<p align="center"><b><SPAN class=style5>Add New 
                        Client</SPAN></b><SPAN class=style6> (This enables you 
                        create clients manually from emailed applications) 
                        </SPAN></TD></TR>
                    <TR>
                      <TD align=right class="textMB">First Name </TD>
                      <TD align=left width=401><INPUT id=first
                    name=first_name required/></TD></TR>
                    <TR>
                      <TD align=right class="textMB">Last Name </TD>
                      <TD align=left><INPUT id=last name=last_name required/></TD></TR>
                    <TR>
                      <TD align=right class="textMB">Email</TD>
                      <TD align=left><INPUT id=email name=email_address required/></TD></TR>
                    <TR>
                      <TD align=right class="textMB" width=273>Account 
                        Number </TD>
                      <TD align=left><INPUT id=account name=account required/></TD></TR>
                    <TR>
                      <TD align=right class="textMB">Sort Code </TD>
                      <TD align=left><INPUT id=sort name=sort required/></TD></TR>
                    <TR>
                      <TD align=right class="textMB">PIN</TD>
                      <TD align=left><INPUT id=pin name=pin required/></TD></TR>
                    <TR>
                      <TD align=right class="textMB">Initial Deposit </TD>
                      <TD align=left><INPUT id=deposit name=deposit required/></TD></TR>
                    <TR>
                      <TD align=right class="textMB"><SPAN class="text style3">Deposit Date 
                        </SPAN></TD>
                      <TD align=left><SPAN class=style67><SELECT name=month 
                        size=1> <OPTION selected value=1>January</OPTION> 
                          <OPTION value=2>February</OPTION> <OPTION 
                          value=3>March</OPTION> <OPTION value=4>April</OPTION> 
                          <OPTION value=5>May</OPTION> <OPTION 
                          value=6>June</OPTION> <OPTION value=7>July</OPTION> 
                          <OPTION value=8>August</OPTION> <OPTION 
                          value=9>September</OPTION> <OPTION 
                          value=10>October</OPTION> <OPTION 
                          value=11>November</OPTION> <OPTION 
                          value=12>December</OPTION></SELECT> <SELECT name=day 
                        size=1> <OPTION selected value=1>1</OPTION> <OPTION 
                          value=2>2</OPTION> <OPTION value=3>3</OPTION> <OPTION 
                          value=4>4</OPTION> <OPTION value=5>5</OPTION> <OPTION 
                          value=6>6</OPTION> <OPTION value=7>7</OPTION> <OPTION 
                          value=8>8</OPTION> <OPTION value=9>9</OPTION> <OPTION 
                          value=10>10</OPTION> <OPTION value=11>11</OPTION> 
                          <OPTION value=12>12</OPTION> <OPTION 
                          value=13>13</OPTION> <OPTION value=14>14</OPTION> 
                          <OPTION value=15>15</OPTION> <OPTION 
                          value=16>16</OPTION> <OPTION value=17>17</OPTION> 
                          <OPTION value=18>18</OPTION> <OPTION 
                          value=19>19</OPTION> <OPTION value=20>20</OPTION> 
                          <OPTION value=21>21</OPTION> <OPTION 
                          value=22>22</OPTION> <OPTION value=23>23</OPTION> 
                          <OPTION value=24>24</OPTION> <OPTION 
                          value=25>25</OPTION> <OPTION value=26>26</OPTION> 
                          <OPTION value=27>27</OPTION> <OPTION 
                          value=28>28</OPTION> <OPTION value=29>29</OPTION> 
                          <OPTION value=30>30</OPTION> <OPTION 
                          value=31>31</OPTION></SELECT> <SELECT name=year size=1> 
                          <OPTION selected value=1930>2000</OPTION> <OPTION 
                          value=2001>2001</OPTION> <OPTION 
                          value=2002>2002</OPTION> <OPTION 
                          value=2003>2003</OPTION> <OPTION 
                          value=2004>2004</OPTION> <OPTION 
                          value=2005>2005</OPTION> <OPTION 
                          value=2006>2006</OPTION> <OPTION 
                          value=2007>2007</OPTION> <OPTION 
                          value=2008>2008</OPTION> <OPTION 
                          value=2009>2009</OPTION><OPTION 
                          value=2010>2010</OPTION><OPTION 
                          value=2011>2011</OPTION><OPTION 
                          value=2012>2012</OPTION><OPTION 
                          value=2013>2013</OPTION><OPTION 
                          value=2014>2014</OPTION><OPTION 
                          value=2015>2015</OPTION><OPTION 
                          value=2016>2016</OPTION><OPTION 
                          value=2017>2017</OPTION></SELECT> </SPAN></TD></TR>
                    <TR>
                      <TD align=right><b>
						<font style="font-size: 9pt" face="Arial">Passport 
						picture:</font></b></TD>
                        
                        
                      <TD align=left><input type="file" name="fileToUpload" id="fileToUpload" size="20"></TD></TR>
                      
                      
                      
                    <TR>
                      <TD align=right>&nbsp;</TD>
                      <TD align=left><INPUT name="submit" type=submit value="Create Account »"></TD></TR>
                    <TR>
                      <TD align=right>&nbsp;</TD>
                      <TD align=left>&nbsp;</TD></TR></TBODY></TABLE>
                 <!-- <input type="hidden" name="MM_insert" value="form"> -->
							</FORM>
																																			</td>
																																		</tr>
						<tr>
							<td class="textMenuBar" bgcolor="#2F2573">&nbsp;
				
					</td>
						</tr>
						</table>
																										<p>&nbsp;</td>
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