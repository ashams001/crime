<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <link rel="stylesheet" href="css/style.css" />

  </head>
  <body style="padding:0px;">
  <?php include("top.php");?>
     <td style="padding-top: 0px;">
          <div class="form-style-8" style="padding-top:0px;">
            <h2>Add New FIR</h2>
            <form method="post" action="addFIR.php" value=>
              <input type="number" name="firno" placeholder="FIR No" required />
              <input type="number" name="complaintno" placeholder="Complaint No" required />
              <input type="number" name="officerid" placeholder="Officer Id" required />
              <input type="date" name="incidentdate" placeholder="Inciden Date" required />
              <input type="time" name="incidenttime" placeholder="Incident Time" required />
              <input type="text" name="crimetype" placeholder="Crime Type" required />
              <input type="text" name="placeofoccurence" placeholder="Place Of Occurence" required />
              <input type="text" name="victimname" placeholder="Victim Name" required />
              <input type="text" name="witnessname" placeholder="Witness Name" required />
              <input type="text" name="accusedname" placeholder="Accused Name" required />
              <input type="submit" value="Add" />
            </form>
              <form method="post" action="viewfir.php">
                <input type="submit" value="View" /></form>
          </div>
        </td>
  </body>
</html>

