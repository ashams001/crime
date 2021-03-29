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
            <h2>Add New Section Charge</h2>
            <form method="post" action="addsectioncharges.php">
              <input type="number" name="sectionid" placeholder="Section ID" required />
            <input type="text" name="crimetype" placeholder="Crime Type" required />
            <input type="submit" value="Add" />
            </form>
              <form method="post" action="viewsectioncharge.php">
                <input type="submit" value="View" /></form>
          </div>
        </td>
      
    
  </body>
</html>
