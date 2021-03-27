<?php include("config.php");
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
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
    <form method="post" action="view.php">
      <input id="search" type="text" name="pn" placeholder="Search by complaint number">
<input type="submit" name="search" style="display:none;" value="search">
    </form>
<link rel="stylesheet" href="css/style.css" />
<body>
<div class="form">

<h2>User Complaints</h2>
    
    
<table width="100%" border="4" style="border-collapse:collapse;">
<head>
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
</head>
<body>
<?php
$count=1;
$sel_query="SELECT * FROM complaint_registration INNER JOIN complaint_status ON complaint_registration.Complaint_No=complaint_status.Complaint_No";
$result = mysqli_query($conn,$sel_query);
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
    </body>
    </table>
    </div>
    </body>
    </body>
</html>