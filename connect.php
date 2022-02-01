<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="bikayi";

// Create connection
$conn = new mysqli("localhost", "root","" ,"bikayi" );

$CustomerName = $_POST['CustomerName'];
$Email = $_POST['Email'];
$MobileNumber = $_POST['MobileNumber'];
$City = $_POST['City'];
$CustomerID = $_POST['CustomerID'];


$sql = "INSERT INTO `customer` (`CustomerName`, `Email`, `MobileNumber`, `City`, `CustomerID`) VALUES ('$CustomerName', '$Email', '$MobileNumber', '$City', '$CustomerID')";

// insert in database
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Details Inserted";
}

?>

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
