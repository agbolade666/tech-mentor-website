<?php require_once('../../Connections/DB.php'); ?>



<?php

include("image_script2.php");
	
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
$picture = $_FILES["fileToUpload"]["name"];  

$sql = "INSERT INTO registration (FirstName,LastName,Email,AccountNumber,SortCode,PIN,InitialDeposit,dd,mm,yy,PassportPicture)
VALUES ('$first_name','$last_name','$email_address','$account','$sort','$pin','$deposit','$month','$day','$year','$picture')";

if ($con->query($sql) === TRUE) {
	    
    echo "
	           <script> 
			           alert('New record created successfully');
					   location.href = 'index.php';
			  </script>
	     ";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();

?>