<?php include("config.php");
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$Complaint_No=$_REQUEST['Complaint_No'];
$query = "SELECT * from complaint_registration where Complaint_No="."$Complaint_No";
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class=".form-style-8">
<h1>Update Complaint</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$Complaint_No=$_REQUEST['Complaint_No'];

$Victim_Name =$_REQUEST['name'];
$Victim_Age =$_REQUEST['age'];
$update="update  set ";
mysqli_query($conn, $update) or die(mysqli_error());
$status = "Record Updated Successfully.";
echo '</br></br><a href = \'viewcomplaint.php\'> </a><p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action="View.php"> 
<input name="Complaint_No" type="number" value="<?php echo $row['Complaint_No'];?>" />
<p><input type="text" name="name" placeholder="Enter Name" 
required value="<?php echo $row['name'];?>" /></p>
<p><input type="text" name="age" placeholder="Enter Age" 
required value="<?php echo $row['age'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>

<?php } ?>
</div>
</div>
</body>
</html>
