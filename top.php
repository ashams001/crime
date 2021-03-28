<?php include("config.php"); ?>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <ul>
            <li><a class="active" href="admin.php" target="_self" >HOME</a></li>
            <li><a href="viewcomplaint.php" target="_self" >User Complaint</a></li>
            <li><a href="FIR.php" target="_self">FIR</a></li>
            <li><a href="criminal.php" target="_self">Criminals</a></li>
            <li><a href="sectioncharges.php" target="_self">Section Charges</a></li>
            <li style="float: right;"><div class="dropdown" style="height:700px;">
                        <button class="dropbtn"><b style="letter-spacing: 3px;">Hello,

                     <?php
                     if(!isset($_SESSION)) {
                       session_start();
                     } 
                      echo $_SESSION["User_Fname"];
                      ?>

                    </b></button>
                        <div class="dropdown-content"style="height:700px;">
                    <a href="logout.php" class="redcolor" target="_parent">Log out</a>
                </div>
                </div>
            </li>
        </ul>
    </body>
</html>
