<?php include("config.php");
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
$query2 = "SELECT report_type, count(*) as number FROM patient_record_header WHERE date = CURDATE() GROUP BY report_type";
$resultchart = mysqli_query($conn, $query2);?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<link rel = "icon" type = "image/png" href = "images/logo.png" />
<title>Police</title>
<script type="text/javascript" src="pie.js"></script>
<script type="text/javascript">
       
       </script>
</head>
  <body background="officer3.jpg" style="background-size: cover;background-repeat: no-repeat;">
    
  </body>
</html>
