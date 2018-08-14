<!DOCTYPE html> 
<?php include '../includes/db.inc.php';?>
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
    <title>ADMIN AREA</title></title>
</head>
<body>
<div class="wrapper">
<div class="row" id="toprow">
 <div class="col-12" >  ADMIN AREA<BR></div>
</div>
<div class="row" id="middlerow">

    <div class="col-2" id="leftcolumn">test</div>
    <div class="col-8"  id="middlecolumn">    
        <h1 align="center" >Do you have the authority to view this?</h1><br>
        
<?php
//start of the form
echo "<form action=\"loadAllUsers.php\" method=\"post\" id=\"userform\">";
echo " <input type=\"submit\"  name=\"viewall\" id=\"viewall\"value=\"Yes, I Do\">";
echo " </form><br>";
//end of the form 

?>

    </div>



    </div>
</div>
</body>
</html>