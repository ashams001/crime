<?php include("config.php");

define('MYSQL_ASSOC',MYSQLI_ASSOC);

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
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
    <p><a href="top.php"></a></p>
<h2>FIR</h2>

<table width="100%" border="4" style="border-collapse:collapse;">
<head>
    <style>
        form-style-8 input[type="button"],
.form-style-8 input[type="submit"]{
	-moz-box-shadow: inset 0px 1px 0px 0px #45D6D6;
	-webkit-box-shadow: inset 0px 1px 0px 0px #45D6D6;
	box-shadow: inset 0px 1px 0px 0px #45D6D6;
	background-color: #2CBBBB;
	border: 1px solid #27A0A0;
	display: inline-block;
	cursor: pointer;
	color: #FFFFFF;
	font-family: 'Open Sans Condensed', sans-serif;
	font-size: 14px;
	padding: 8px 18px;
	text-decoration: none;
	text-transform: uppercase;
}
.form-style-8 input[type="button"]:hover,
.form-style-8 input[type="submit"]:hover {
	background:linear-gradient(to bottom, #34CACA 5%, #30C9C9 100%);
	background-color:#34CACA;
}
    </style>
<tr>
<th><strong>Count</strong></th>
<th><strong>FIR No</strong></th>
<th><strong>Complaint No</strong></th>
<th><strong>User Id</strong></th>
<th><strong>Incident Date</strong></th>
<th><strong>Incident Time</strong></th>
<th><strong>Crime Type</strong></th>
<th><strong>Place Of Occurence</strong></th>
<th><strong>Victim Name</strong></th>
<th><strong>Witmess Name</strong></th>
<th><strong>Suspect Name</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>

    
</head>
<body>
    
<?php
$count=1;
$sel_query="SELECT * FROM fir_registration ORDER BY FIR_No";

$result = mysqli_query($conn,$sel_query) or die( mysqli_error($conn));
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) { ?>

<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["FIR_No"]; ?></td>
<td align="center"><?php echo $row["Complaint_No"]; ?></td>
<td align="center"><?php echo $row["User_Id"]; ?></td>
<td align="center"><?php echo $row["Incident_Date"]; ?></td>
<td align="center"><?php echo $row["Incident_Time"]; ?></td>
<td align="center"><?php echo $row["Crime_Type"]; ?></td>
<td align="center"><?php echo $row["Place_Of_Occurence"]; ?></td>
<td align="center"><?php echo $row["Victim_Name"]; ?></td>
<td align="center"><?php echo $row["Witness_Name"]; ?></td>
<td align="center"><?php echo $row["Accused_Name"]; ?></td>
<td align="center">
<a href="editfir.php? id=<?php echo $row["FIR_No"]; ?>">Edit</a>
    </td>    
<td align="center">
<a href="deletefir.php? id=<?php echo $row["FIR_No"]; ?>">Delete</a>
    </td>
                                 
<?php $count++; } ?>
    </body>
    </table>
    </div>
    </body>
</html>