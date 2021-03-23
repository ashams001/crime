<?php
require_once('config.php');
 
$sql = "SELECT Complaint_No, User_Id, Victim_Name FROM complaint_registration";
$result = $conn->query($sql);
$arr_users = [];
if ($result->num_rows > 0) {
    $arr_users = $result->fetch_all(MYSQLI_ASSOC);
}
?>