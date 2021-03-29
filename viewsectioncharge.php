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
	<?php include("top.php");
	session_start();
	if(isset($_SESSION['Success_Message'])){
		echo "<h3 class='success_message'>".$_SESSION['Success_Message']."</h3>";
	}
	$_SESSION['Success_Message']=null;
	?>
<h2>User Complaints</h2>

<table width="100%" border="4" style="border-collapse:collapse;">
<tr>
<th><strong>Count</strong></th>
<th><strong>Section Id</strong></th>
<th><strong>Crime Type</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>

<?php
$count=1;
$sel_query="SELECT * FROM section_charges ORDER BY Section_Id";

$result = mysqli_query($conn,$sel_query) or die( mysqli_error($conn));
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) { ?>

<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["Section_Id"]; ?></td>
<td align="center"><?php echo $row["Crime_Type"]; ?></td>

<td align="center">
<a href="editsectionform.php?id=<?php echo $row["Section_Id"]; ?>">Edit</a>
    </td>    
<td align="center">
<a href="deletesection.php?id=<?php echo $row["Section_Id"]; ?>">Delete</a>
    </td>
                                 
<?php $count++; } ?>
    </tr>
    </table>
    </div>
    </body>
</html>
