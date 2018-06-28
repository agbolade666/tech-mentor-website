<?php 
session_start();
require_once('../Connections/DB.php'); ?>

<?php
$oldpin = $_POST["oldpin"];
$newpin = $_POST["newpin"];
$newpin1 = $_POST["newpin1"];

if($newpin != $newpin1)
{
	echo "Passwords do not match";
	echo "<script>location.href='user_profile.php';</script>";
}

$accno = $_SESSION["AccountNumber"];

$sql = "SELECT * FROM registration WHERE PIN = '$oldpin' AND AccountNumber = '$accno' ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
$sql2 = "UPDATE registration SET PIN = '$newpin' WHERE AccountNumber = '$accno' ";
$result2 = $con->query($sql2);
echo "PIN has been changed successfully";
echo "<script>location.href = 'user_profile.php'</script>";

} else {
    echo "0 results";
}
$con->close();
?>

