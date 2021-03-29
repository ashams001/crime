<?php include("config.php");
$id = $_REQUEST['id'];
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
$query="SELECT * FROM section_charges WHERE Section_Id='$id'";
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
		$Crime_Type=$_REQUEST['Crime_Type'];
		$update="update section_charges
        SET Section_Id='".$id."',
        Crime_Type='".$Crime_Type."' WHERE Section_Id='".$id."'";
//		mysqli_query($conn,$update) or die(mysqli_error());
		if ($conn->query($update) === TRUE) {
			session_start();
			$_SESSION['Success_Message'] = "Section charge Updated Successfully!!!";
			header("Location: viewsectioncharge.php");
		}
	}else{
	?>
		<form name = "form" method="post" action="">
			<input type="hidden" name="new" value="1" />
			<input name="id" type="number" value="<?php echo $row['Section_Id'];?>" />
			<input name="Crime_Type" type="text" placeholder="Enter Crime Type" value="<?php echo $row['Crime_Type'];?>"/>
			<p><input name="submit" type="submit" value="Update" /></p>
		</form>
		<?php
	}
	?>
</div>
</body>
</html>
