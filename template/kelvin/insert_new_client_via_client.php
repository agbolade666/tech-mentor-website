<?php require_once('../Connections/DB.php'); ?>

<?php
	
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email_address = $_POST["email_address"];
$account = $_POST["account"];
$sort = $_POST["sort"];
$pin = $_POST["pin"];
$deposit = $_POST["deposit"];
$month = $_POST["month"];
$day = $_POST["day"];
$year = $_POST["year"];
$picture = $_POST["picture"];

$sql = "INSERT INTO client_registration (id,FirstName,LastName,Email,AccountNumber,SortCode,PIN,InitialDeposit,dd,mm,yy,PassportPicture)
VALUES (NULL,'$first_name','$last_name','$email_address','$account','$sort','$pin','$deposit','$month','$day','$year','$picture')";

if ($con->query($sql) === TRUE) {
    echo "
	           <script> 
			           alert('New record created. Cotact Admin for details');
					   location.href = 'index.html';
			  </script>
	     ";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();

?>