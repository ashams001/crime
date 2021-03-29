<?php include("config.php");
$id = $_REQUEST['id'];
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
$query="SELECT * FROM fir_registration WHERE FIR_No='$id'";
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
		$Complaint_No=$_REQUEST['Complaint_No'];
        $User_Id=$_REQUEST['User_Id'];
        $Incident_Date=$_REQUEST['Incident_Date'];
        $Incident_Time=$_REQUEST['Incident_Time'];
        $Crime_Type=$_REQUEST['Crime_Type'];
        $Place_Of_Occurence=$_REQUEST['Place_Of_Occurence'];
        $Victim_Name=$_REQUEST['Victim_Name'];
        $Witness_Name=$_REQUEST['Witness_Name'];
        $Suspect_Name=$_REQUEST['Suspect_Name'];
		$update="update fir_registration
        SET FIR_No='".$id."',
        Complaint_No='".$Complaint_No."', User_Id='".$User_Id."', Incident_Date='".$Incident_Date."', Incident_Time='".$Incident_Time."', Crime_Type='".$Crime_Type."', Place_Of_Occurence='".$Place_Of_Occurence."', Victim_Name='".$Victim_Name."', Witness_Name='".$Witness_Name."', Suspect_Name='".$Suspect_Name."' WHERE FIR_No='".$id."'";
//		mysqli_query($conn,$update) or die(mysqli_error());
		if ($conn->query($update) === TRUE) {
			session_start();
			$_SESSION['Success_Message'] = "FIR Updated Successfully!!!";
			header("Location: viewsectioncharge.php");
		}
	}else{
	?>
		<form name = "form" method="post" action="">
			<input type="hidden" name="new" value="1" />
			<input name="id" type="number" value="<?php echo $row['FIR_No'];?>" />
			<input name="Complaint_No" type="number" placeholder="Enter Complaint No" value="<?php echo $row['Complaint_No'];?>"/>
            <input name="Incident_Date" type="date" placeholder="Enter Incident Date" value="<?php echo $row['Incident_Date'];?>"/>
            <input name="Incident_Time" type="time" placeholder="Enter Incident Time" value="<?php echo $row['Incident_Time'];?>"/>
            <input name="Crime_Type" type="text" placeholder="Enter Crime Type" value="<?php echo $row['Crime_Type'];?>"/>
            <input name="Place_Of_Occurence" type="text" placeholder="Enter Place Of Occurence" value="<?php echo $row['Place_Of_Occurence'];?>"/>
            <input name="Victim_Name" type="text" placeholder="Enter Victim Name" value="<?php echo $row['Victim_Name'];?>"/>
            <input name="Witness_Name" type="text" placeholder="Enter Witness Name" value="<?php echo $row['Witness_Name'];?>"/>
            <input name="Suspect_Name" type="text" placeholder="Enter Suspect Name" value="<?php echo $row['Suspect_Name'];?>"/>
			<p><input name="submit" type="submit" value="Update" /></p>
		</form>
		<?php
	}
	?>
</div>
</body>
</html>
