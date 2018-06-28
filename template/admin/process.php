<?php
session_start();
?>

<?php require_once('../../Connections/DB.php'); ?>

<?php

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM admin WHERE username = '$username' AND password ='$password' ";
$result = $con->query($sql);


if ($result->num_rows > 0) {
   
   //capture session values
   
       while($row = $result->fetch_assoc()) {
		
		$_SESSION["username"] = $row["username"];
		$_SESSION["password"] = $row["password"];
		
	   }
   //Login user
		echo "<script>location.href='admin.php'</script>"; 
	}

else 
{
    echo "
	        <script>
			location.href='login_error.php'
			</script>
		";
}


$con->close();

?>

