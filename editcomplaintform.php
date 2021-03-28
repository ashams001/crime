<?php include("config.php");
$id = $_REQUEST['id'];
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
$query="SELECT * FROM complaint_registration WHERE Complaint_No='$id'";
$result= mysqli_query($conn,$query) or die (mysqli_error());
$row= mysqli_fetch_assoc($result)
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Update Status</title>
	<!--        <link rel="stylesheet" href="css/style.css" />-->
</head>
<body>
<div class="form">
	<?php
	if(($_REQUEST['submit']) == NULL || $_REQUEST['submit'] != 'Update' ){
		include("top.php");
	}?>
	<h1>Update User Complaint</h1>
	<?php
	if(isset($_POST['new'])&&$_POST['new']==1)
	{
		$id=$_REQUEST['id'];
		$Status=$_REQUEST['Status'];
		$update="update complaint_registration t1 JOIN complaint_status t2 ON (t1.Complaint_No=t2.Complaint_No)
        SET t1.Complaint_No='".$id."',
        t2.Status='".$Status."' WHERE t1.Complaint_No='".$id."'";
//		mysqli_query($conn,$update) or die(mysqli_error());
		if ($conn->query($update) === TRUE) {
			session_start();
			$_SESSION['Success_Message'] = "Record Updated Successfully!!!";
			header("Location: viewcomplaint.php");
		}
	}else{
	?>
		<form name = "form" method="post" action="">
			<input type="hidden" name="new" value="1" />
			<input name="id" type="number" value="<?php echo $row['Complaint_No'];?>" />
			<input name="Status" type="text" placeholder="Enter Status" value="<?php echo $row['Status'];?>"/>
			<p><input name="submit" type="submit" value="Update" /></p>
		</form>
		<?php
	}
	?>
</div>
</body>
</html>
