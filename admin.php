<?php
session_start();
if(isset($_SESSION)){
//echo 'Welcome, ' . $_SESSION["username"];
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <link rel = "icon" type = "image/png" href = "images/logo.png" />
        <title>Police</title>
    </head>
<body>
<?php
include("top.php");
include("bottom.php");
}else{
  require 'sessionerror.php';
}

?>
</body>
</html>
