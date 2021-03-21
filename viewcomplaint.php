<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
<style type="text/css">
.form-style-8{
	font-family: 'Open Sans Condensed', arial, sans;
	width: 500px;
	padding: 30px;
	background: #FFFFFF;
	margin: 50px auto;
	box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
	-moz-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
	-webkit-box-shadow:  0px 0px 15px rgba(0, 0, 0, 0.22);

}
.form-style-8 h2{
	background: #4D4D4D;
	text-transform: uppercase;
  letter-spacing: 2px;
	font-family: 'Open Sans Condensed', sans-serif;
	color: #797979;
	font-size: 18px;
	font-weight: 100;
	padding: 20px;
	margin: -30px -30px 30px -30px;
}
.form-style-8 input[type="text"],
.form-style-8 input[type="date"],
.form-style-8 input[type="email"],
.form-style-8 input[type="number"],
.form-style-8 input[type="tel"],
.form-style-8 input[type="url"],
.form-style-8 input[type="password"],
.form-style-8 textarea,
.form-style-8 select
{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	outline: none;
	display: block;
	width: 100%;
	padding: 7px;
	border: none;
	border-bottom: 1px solid #ddd;
	background: transparent;
	margin-bottom: 10px;
	font: 16px Arial, Helvetica, sans-serif;
	height: 45px;
}
.form-style-8 input[type="button"],
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
  </head>
  <body style="padding:0px;">
    <?php include("config.php");
$username="";
$password="";
$fullname="";
$address ="";
$email = "";
$phone="";
$degree="";
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}//& password='$pass'
if(!isset($_SESSION)) {
  session_start();
}
    if(session_id() != ''){
      $user = $_SESSION["username"];

      $sql = "select * from user_account where username= '$user' ";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          if($row = $result->fetch_assoc()) {
              $username=$row['username'];
              $password=$row["password"];
              $fullname = $row["fullname"];
              $address = $row["address"];
              $email = $row["email"];
              $phone= $row["phone"];
              $degree = $row["degree"];
            }
      }

}else {
  include'sessionerror.php';
}
 ?>
   
        <td style="padding-top: 0px;">
          <div class="form-style-8" style="padding-top:0px;">
            <h2>Add New Section Charge</h2>
            <form method="post" action="addUser.php">
              <input type="number" name="name" placeholder="Section ID" required />
            <input type="text" name="name" placeholder="Description" required />
            <input type="submit" value="Add" />
            </form>
          </div>
        </td>
  </body>
</html>
