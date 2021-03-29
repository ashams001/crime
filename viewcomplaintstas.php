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
  <?php include("Usertop.php");?>
    <form method="post" action="view.php">
      <input id="complaint_no" type="text" name="pn" placeholder="Search by complaint number">
    <input type="submit" name="search" style="" value="search">
    </form>
    </body>
</html>