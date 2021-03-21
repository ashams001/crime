<?php include("config.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firno = $_POST["firno"];
  $complaintno = $_POST["complaintno"];
  $officerid = $_POST["officerid"];
  $incidentdate = $_POST["incidentdate"];
  $incidenttime = $_POST["incidenttime"];
  $crimetype = $_POST["crimetype"];
  $placeofoccurence = $_POST["placeofoccurence"];
  $victimname = $_POST["victimname"];
  $witnessname = $_POST["witnessname"];
  $accusedname = $_POST["accusedname"];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}//& password='$pass'
$sql = "INSERT INTO fir_registration (FIR_No, Complaint_No, User_Id, Incident_Date, Incident_Time, Crime_Type, Place_Of_Occurence, Victim_Name, Witness_Name, Accused_Name) VALUES('$firno','$complaintno','$officerid','$incidentdate','$incidenttime','$crimetype','$placeofoccurence','$victimname','$witnessname', '$accusedname' )";
if ($conn->query($sql) === TRUE) {
  include 'FIR.php';
    echo "<h3 style='position: fixed; top:0;'>FIR Registered Successfully!!!</h3><br/>";
} else {include 'FIR.php';
    echo "Error in Registering FIR!!! : " . $conn->error;
}
}
?>

