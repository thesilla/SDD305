<!DOCTYPE html>

<html lang = "en">



<head>
	<title> Admin Login </title>
	<meta charset = "utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" >
    <link rel="stylesheet" href="../css/finalstyles.css"> 



	


<!-- do validation on this page, activate errors, and show page with errors enabled or not. Will be included -->

	
</head>


<body>

<?php

    // IF login page SUBMITTED validate form
// go through submissions and then turn on errors
// if at end no errors, show portal
// if errors, show form again with errors
  // if not submitted show login page

    // if not submitted

    // set default admin login
	//in expanded version of this we would scan database for existing admins
    $admin_login = "admin";
    $admin_pw = "admin";

    $nouser = FALSE;
    $wronguser = FALSE;

    $wrongpw = FALSE;
    $nopw = FALSE;


// TODO: MIGHT WANT TO DO ALL VALIDATION ON LOGIN PAGE

if ($_SERVER['REQUEST_METHOD'] == 'POST'){


    // save input into new variables
    // strip away HTML tags and trim whitespace for security purposes
    $admin_name = trim(htmlspecialchars($_POST['admin_name']));
    $pw = trim(htmlspecialchars($_POST['admin_pw']));
   
    

  
//***************NAME*****************    
    // validate username
    // if email submitted run further validation
    if (!empty($admin_name)){

            
        // if name is submitted doesnt match login
        if (strcmp($admin_name, $admin_login) != 0) {

            $wronguser = TRUE;


        } 


    } else {

        // include "email not submitted error"
        // for now, just print to screen
        $nouser = TRUE;


    }


// *********PASSWORD CHECK**********

    if (!empty($pw)){

        if (strcmp($pw, $admin_pw)!=0){

        	$wrongpw = TRUE;
        }
        	          

    } else {

       $nopw = TRUE;
    }


    if ($nouser || $wronguser || $nopw || $wrongpw ){


    	include('admin_form.php');


    }


    // if no issues, show admin portal
    if (($nouser == FALSE) && ($wronguser == FALSE) && ($nopw == FALSE) && ($wrongpw == FALSE)) {

        
       include('admin_portal.php');

       
        

    }





// ELSE form not processed yet at all, show form
} else {


    include('admin_form.php');

}



?>







</body>



</html>