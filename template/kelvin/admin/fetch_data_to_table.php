<?php require_once('../../Connections/DB.php'); ?>

<?php

$sql = "SELECT * FROM registration";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
//		FirstName,LastName,Email,AccountNumber,SortCode,PIN,InitialDeposit,dd,mm,yy,PassportPicture
        echo "<tr/><font size='-1'><td>" .$row["id"]. "</td></font>";
		echo "<td><font size='-1'>" .$row["FirstName"]. "</td></font>";
		echo "<td><font size='-1'>" .$row["LastName"]. "</td></font>";
		echo "<td><font size='-1'>" .$row["Email"]. "</td>";
		echo "<td><font size='-1'>" .$row["AccountNumber"]. "</td></font>";
		echo "<td><font size='-1'>" .$row["SortCode"]. "</td></font>";
		echo "<td><font size='-1'>" .$row["PIN"]. "</td></font>";
		echo "<td><font size='-1'>" .$row["InitialDeposit"]. "</td></font>";
		echo "<td><font size='-1'>" .$row["dd"]."-".$row["mm"]."-".$row["yy"]. "</td></font></tr>";
	}
} else {
    echo "0 results";
}
$con->close();

?>

