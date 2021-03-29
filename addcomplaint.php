<?php include("config.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $complaintno = $_POST["complaintno"];
  $userid = $_POST["userid"];
  $date = $_POST["date"];
  $vname = $_POST["vname"];
  $vage = $_POST["vage"];
  $vaddress = $_POST["vaddress"];
  $attackdescription = $_POST["attackdescription"];
  $sname = $_POST["sname"]; 
  $wname = $_POST["wname"];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}//& password='$pass'
$sql = "INSERT INTO complaint_registration(Complaint_No, User_Id, Date, Victim_Name, Victime_Age, Victim_Address, Attack_Description, Suspect_Name, Witness_Name) VALUES('$complaintno','$userid','$date','$vname','$vage','$vaddress','$attackdescription','$sname','$wname')";
if ($conn->query($sql) === TRUE) {
  $sql = "INSERT INTO complaint_status(Complaint_No, Status) VALUES('$complaintno','Open')";
  if ($conn->query($sql) === TRUE) {
    include 'criminal.php';
    echo "<h3 style='position: fixed; top:0;'> New Criminal Added Successfully!!!</h3><br/>";
  }
} else {include 'sessionerror.php';
    echo "Error In Adding Criminalr!!! : " . $conn->error;
}
}
?>

  