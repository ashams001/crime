<?php include ("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $userid = $_POST["userid"];
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $userty = $_POST["userty"];
  $pass = $_POST["pass"];
  $address = $_POST["address"];
  $city = $_POST["city"];
  $state = $_POST["state"];
  $zipcode = $_POST["zipcode"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}//password='$pass'
$sql = "INSERT INTO user_registration (User_Id, User_Fname, User_Lname, User_Type, Password, Address, City, State, Zipcode, Phone, Email) VALUES('$userid','$fname','$lname', '$userty','$pass', '$address','$city','$state','$zipcode','$phone','$email')";
if ($conn->query($sql) === TRUE) {
  include 'userregistration.php';
    echo "<h3 style='position: fixed; top:0;'> New User Registered Successfully!!!</h3><br/>";
} else {include 'admin.php';
    echo "Error In Registering The New User!!! : " . $conn->error;
}
}
?>

