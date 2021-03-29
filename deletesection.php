<?php include("config.php");
$id = $_REQUEST['id'];
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}//& password='$pass'
$sql = "DELETE FROM section_charges WHERE Section_Id='$id'";
if ($conn->query($sql) === TRUE) {
	session_start();
	$_SESSION['Success_Message'] = "Section Charge Deleted Successfully!!!";
	header("Location: viewsectioncharge.php");
} else {include 'sessionerror.php';
	echo "Error In Deleting Section Charge!!! : " . $conn->error;
}

?>