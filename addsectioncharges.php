<?php include ("config.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $sectionid = $_POST["sectionid"];
  $crimetype = $_POST["crimetype"];
  

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}//password='$pass'
$sql = "INSERT INTO section_charges (Section_Id, Crime_Type) VALUES('$sectionid','$crimetype')";
if ($conn->query($sql) === TRUE) {
  include 'sectioncharges.php';
    echo "<h3 style='position: fixed; top:0;'> New Section Charge Added Successfully!!!</h3><br/>";
} else {include 'sectioncharges.php';
    echo "Error In Adding New Section Charge!!! : " . $conn->error;
}
}
?>

