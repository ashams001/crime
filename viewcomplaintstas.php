<?php include("config.php");
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
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
        #search{
  width: 30%;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('../images/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
}
#search:focus {
  border: 3px solid #555;
  width: 50%;
}
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

<th><strong>Complaint No</strong></th>
<th><strong>User Id</strong></th>
<th><strong>Victim Name</strong></th>
 <th><strong>Victim Age</strong></th>
 <th><strong>Witness Name</strong></th>
 <th><strong>Suspect Name</strong></th>
 <th><strong>Status</strong></th>

</tr>
</head>
<body>
<?php
$count=1;
$sel_query="Select * from complaint_registration ORDER BY Complaint_No";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>

<td align="center"><?php echo $row["Complaint_No"]; ?></td>
<td align="center"><?php echo $row["User_Id"]; ?></td>
<td align="center"><?php echo $row["Victim_Name"]; ?></td>
<td align="center"><?php echo $row["Victime_Age"]; ?></td>
<td align="center"><?php echo $row["Witness_Name"]; ?></td>
<td align="center"><?php echo $row["Suspect_Name"]; ?></td>
                                      
<?php $count++; } ?>
    </body>
    </table>
    </div>
    </body>
    </body>
</html>