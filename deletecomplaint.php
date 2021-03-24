<?php (include config.php);


$conn = mysqli_connect($servername, $username, $password, $dbname);

$Complaint_No=$_Request['Complaint_No']
// Check connection
    
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM complaint_registration WHERE Complaint_No=$Complaint_No";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
