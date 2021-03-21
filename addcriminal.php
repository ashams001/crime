<?php include("config.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $criminalno = $_POST["cnumber"];
  $cfname = $_POST["cfname"];
  $clname = $_POST["clname"];
  $gender = $_POST["gender"];
  $age = $_POST["age"];
  $firno = $_POST["firno"];
  

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}//& password='$pass'
$sql = "INSERT INTO Criminals (Criminal_No, Criminal_Fname, Criminal_Lname, Gender, Age, FIR_No) VALUES('$criminalno','$cfname','$clname','$gender','$age','$firno')";
if ($conn->query($sql) === TRUE) {
  include 'criminal.php';
    echo "<h3 style='position: fixed; top:0;'> New Criminal Added Successfully!!!</h3><br/>";
} else {include 'sessionerror.php';
    echo "Error In Adding Criminalr!!! : " . $conn->error;
}
}
?>

