<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" >
    <link rel="stylesheet" href="../style/style.css">
    <style>
    #userform{
        margin-left: 200px; 
    }
    </style>
    <title>CONSENT FORM</title></title>
</head>
<body>
<div class="wrapper">
<div class="row" id="toprow">
 <div class="col-12">   USER CONSENT FORM</div>
</div>
<div class="row" id="middlerow">

    <div class="col-2" id="leftcolumn">test</div>
    <div class="col-8"  id="middlecolumn">    
        <h1 align="center" >NOTICE:</h1><br>
        <h6>The user consents to give any and all information requested without hesitation including but not limited to the following items:<br> <br>Social Security Number, Bank Account and/or Routing Numbers, Date of Birth, Phone Number, Address, Blood Type, Astrological Sign, Favorite Food, and anything else we deem appropriate.<br><br>
        <h2> Do you like cookies?<br>
       If you click the button, you could have a cookie.<br> I bet you like cookies<br> It makes me sad when people don't click the button<br> You don't want to make me sad, do you?  <br>Don't you want a cookie?</h2> <br><h6>Clicking below means you agree to these terms forever and can never, under any condition, back out. Muahaha!!!</h6><br>
<?php
//start of the form
echo "<form action=\"../default.php\" method=\"post\" id=\"userform\">";
echo " <input type=\"submit\"  name=\"consentbutton\" id=\"consentbutton\"value=\"I Agree\"></td></tr>";
echo " </form><br>";
//end of the form 
?>

    </div>



    </div>
</div>
</body>
</html>