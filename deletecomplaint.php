<?php include("config.php");
$id = $_REQUEST['id'];
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}//& password='$pass'
$sql = "DELETE FROM complaint_registration WHERE Complaint_No='$id'";
if ($conn->query($sql) === TRUE) {
	session_start();
	$_SESSION['Success_Message'] = "Record Deleted Successfully!!!";
	header("Location: viewcomplaint.php");
} else {include 'sessionerror.php';
	echo "Error In Deleting Record!!! : " . $conn->error;
}

?>