<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" )
{
    session_start();
}
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "crimesystem";
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM complaint_registration WHERE Complaint_No=Complaint_No";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
