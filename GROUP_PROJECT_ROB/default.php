<!DOCTYPE html>
<?php
include 'includes/db.inc.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" >
    <link rel="stylesheet" href="style/style.css">

    <!-- -->
    <title>Study Sign-Up Sheet</title>
</head>
<body>
<div class="wrapper">
<div class="row" id="toprow">
 <div class="col-12">   USER REGISTRATION FORM</div>
</div>
<div class="row" id="middlerow">

    <div class="col-2" id="leftcolumn">TEST 1</div>
    <div class="col-8"  id="middlecolumn">    
<?php
//start of the form
echo "<form action=" . ($_SERVER["PHP_SELF"]) . " method=\"post\" id=\"userform\">";
echo "<table><tr><td>First Name:  </td><td><input type=\"text\" name=\"first_name\"   /></td></tr>";
echo "<tr><td>Last Name:  </td><td><input type=\"text\" name=\"last_name\"   /></td></tr>";
echo " <tr><td>Email Address:  </td><td><input type=\"email\" name=\"email\"   ></td></tr>";
echo "<tr><td>Desired Interview Date/Time: </td><td><select name=\"time\" >";
echo "<option>Please Select A Date/Time</option><option></option>";
echo "</select></td></tr>";
echo "<tr><td colspan='2' align='center'><input type=\"submit\"  name=\"submit\" id=\"submit\"value=\"Check Availability\"></td></tr>";
echo " </table></form><br>";
//end of the form 
?>

    </div>



    </div>
</div>
</body>
</html>