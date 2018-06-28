<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_DB = "localhost";
$database_DB = "techment_banking";
$username_DB = "techment_root2";
$password_DB = "Root@007*#";

$con = mysqli_connect("$hostname_DB","$username_DB","$password_DB","$database_DB");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
?>