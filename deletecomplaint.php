<<<<<<< HEAD
<?php include("config.php");
  $id = $_REQUEST['id'];
 $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}//& password='$pass'
$sql = "DELETE FROM complaint_registration WHERE Complaint_No='$id'";
=======
<?php (include "config.php");


$conn = mysqli_connect($servername, $username, $password, $dbname);

$Complaint_No=$_REQUEST['Complaint_No'];
// Check connection
    
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM complaint_registration WHERE Complaint_No="."$Complaint_No";

>>>>>>> 7f5e95c949b1c509f388b36b3dd60a4db2e31e27
if ($conn->query($sql) === TRUE) {
  include 'viewcomplaint.php';
    echo "<h3 style='position: fixed; top:0;'>Record Deleted Successfully!!!</h3><br/>";
} else {include 'sessionerror.php';
    echo "Error In Deleting Record!!! : " . $conn->error;
}

?>

 