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

            <h2>Add New Criminal</h2>
            <form method="post" action="addcriminal.php">
              <input type="number" name="cnumber" placeholder="Criminal No" required />
            <input type="text" name="cfname" placeholder="Criminal First Name" required />             
            <input type="text" name="clname" placeholder="Criminal Last Name" required />
            <input type="text" name="gender" placeholder="Gender" required />             
            <input type="number" name="age" placeholder="Age" required />
           <input type="number" name="firno" placeholder="FIR Number" required />
            <input type="submit" value="Add" />
            </form>
          </div>
        </td>
  </body>
</html>
