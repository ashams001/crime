<?php include("config.php");
$id=$_REQUEST['id'];
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query="SELECT * FROM complaint_registration WHERE Complaint_No='$id'";
$result= mysqli_query($conn,$query) or die (mysqli_error());
$row= mysqli_fetch_assoc($result)
?>

<html lang="en" dir="ltr">>
    <head>
        <meta charset="utf-8">
        <title> Update Status</title>
        <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    
        <div class="form">
        <a href="top.php"> </a>
        <h1>Update User Complaint</h1>
        <?ph
    if(isset($_POST['new'])&&['new']==1)
    {
        $id=$_REQUEST['Complaint_No'];
        $User_Id=$_REQUEST['User_Id'];
        $Status=$_REQUEST['Status'];
        $submittedby=$_SESSION["User_FName"];
        $update="update complaint_registration t1 JOIN complaint_status t2 ON (t1.Complaint_No=t2.Complaint_No)
        SET t1.Complaint_No='".$Complaint_No."',
        t2.Status='".$Status."' WHERE t1.Complaint_No='".$id."'";
        mysqli_query($conn,$update) or die(mysqli_error());
        
    } 
else
{
			?>
        
    
          
          <div>
            
              <form name = "form" method="post" action="">
                <input type="hidden" name="new" value="1" />
                <input name="id" type="number" value="<?php echo $row['Complaint_No'];?>" />
                <input name="Status" type="text" placeholder="Enter Status" value="<?php echo $row['Status'];?>"/>
                <p><input name="submit" type="submit" value="Update" /></p>
                 </form>
              
              <?php}
?>
            </div> 
        </div>
    </body>
</html>
              