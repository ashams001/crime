<?php include('config.php');
$complaint_no = $_POST['pn'];
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}//& password='$pass'

//$sql = "SELECT * FROM complaint_registration where Complaint_No =".$complaint_no;
$sql="SELECT * FROM complaint_registration  INNER JOIN complaint_status ON complaint_registration.Complaint_No=complaint_status.Complaint_No where complaint_registration.Complaint_No = ".$complaint_no;
$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>View Records</title>
	<style>
	</style>
</head>
<body>
<?php include("Usertop.php");?>
<form method="post" action="view.php">
	<input id="complaint_no" type="text" name="pn" placeholder="Search by complaint number">
	<input type="submit" name="search" style="" value="search">
</form>
<link rel="stylesheet" href="css/style.css" />
<div class="form">
	<h2>User Complaints</h2>
	<table width="100%" border="4" style="border-collapse:collapse;">
		<thead>
		<tr>
			<th><strong>Count</strong></th>
			<th><strong>Complaint No</strong></th>
			<th><strong>User Id</strong></th>
			<th><strong>Date</strong></th>
			<th><strong>Victim Name</strong></th>
			<th><strong>Victim Age</strong></th>
			<th><strong>Victim Address</strong></th>
			<th><strong>Attack Description</strong></th>
			<th><strong>Suspect Name</strong></th>
			<th><strong>Witness Name</strong></th>
			<th><strong>Status</strong></th>

		</tr>
		</thead>
		<?php
		$count=1;
		while($row = mysqli_fetch_assoc($result)) { ?>


		<tr><td align="center"><?php echo $count; ?></td>
			<td align="center"><?php echo $row["Complaint_No"]; ?></td>
			<td align="center"><?php echo $row["User_Id"]; ?></td>
			<td align="center"><?php echo $row["Date"]; ?></td>
			<td align="center"><?php echo $row["Victim_Name"]; ?></td>
			<td align="center"><?php echo $row["Victime_Age"]; ?></td>
			<td align="center"><?php echo $row["Victim_Address"]; ?></td>
			<td align="center"><?php echo $row["Attack_Description"]; ?></td>
			<td align="center"><?php echo $row["Suspect_Name"]; ?></td>
			<td align="center"><?php echo $row["Witness_Name"]; ?></td>
			<td align="center"><?php echo $row["Status"]; ?></td>

			<?php $count++; } ?>
	</table>
</div>
</body>
</html>