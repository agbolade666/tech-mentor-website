<?php
session_start();
?>

<?php require_once('../Connections/DB.php'); ?>

<?php

$account = $_POST["account"];
$pin = $_POST["pin"];

$sql = "SELECT * FROM registration WHERE AccountNumber = '$account' AND PIN ='$pin' ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		$_SESSION["Name"] = $row["FirstName"];
		$_SESSION["AccountNumber"] = $row["AccountNumber"];
		$_SESSION["SortCode"] = $row["SortCode"];
		$_SESSION["Date"] = $row["dd"]."-".$row["mm"]."-".$row["yy"];
		
		$_SESSION["LastName"] = $row["LastName"];
		
		$_SESSION["Email"] = $row["Email"];
		$_SESSION["InitialDeposit"] = $row["InitialDeposit"];
		$_SESSION["PIN"] = $row["PIN"];
		
		$_SESSION["PassportPicture"] = $row["PassportPicture"];
		
		//Fields in my database --  id 	FirstName 	LastName 	Email 	AccountNumber 	SortCode 	InitialDeposit 	PIN 	dd 	mm 	yy 	PassportPicture
		 
	}
	echo "<script>location.href='customer_area.php_files/acclogin.php'</script>";
} else {
    echo "
	        <script>
			location.href='member_login_error.php'
			</script>
		";
}
$con->close();

?>

