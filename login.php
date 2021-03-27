<?php include("config.php");
// to be completed
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$uname = $_POST["uname"];
	$pass = $_POST["psw"];

//require 'dbcon.php';

	$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}//& password='$pass'

	$sql = "select * from user_registration where User_Fname= '$uname' ";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		if($row = $result->fetch_assoc()) {
			$type=$row['User_Type'];
			$x=$row["Password"];
			$userid = $row["User_Id"];
			if($x == $pass){
				if($type=='officer'){
					$sql = "INSERT INTO Log (User_Id,User,User_Type)VALUES ('$userid','$uname','$type')";
					if ($conn->query($sql) === TRUE) {
						session_start();

// Storing session data
						$_SESSION["User_Fname"] = $uname;
						$_SESSION["User_Type"] = "officer";
						include 'admin.php';
					}
				}elseif ($type=='civil') {
					// code...date_default_timezone_set("Asia/Calcutta"); $datew="hour minute : ";

					$sql = "INSERT INTO Log (User_Id,User,User_Type)VALUES ('$userid','$uname','$type')";
					if (mysqli_query($conn, $sql)) {
						session_start();

						// Storing session data
						$_SESSION["User_Fname"] = $uname;
						$_SESSION["User_Type"] = "civil";
						include'user.php';
					} else {
						echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}
				}
			}
			else{
				include'index.php';
				echo'<div class="footer"> Password incorrect </div>';
			}
		}
	}
	else{
		include'index.php';
		echo'<div class="footer">   <strong>    Error!    </strong>    invalid password     </div>';
	}

	mysqli_close($conn);

}
?>
