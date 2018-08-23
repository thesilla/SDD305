

<?php

// TODO FINISH UP:
// -------------------------------------------------- 
// time and phone number validation plus errors
// get date and time limiter code from Rob
// get UI code from rob or randall. Use it if needed
// fix "between DATE and DATE"



// Silence warnings
error_reporting(E_ALL ^ E_WARNING);

?>

<!DOCTYPE html>

<html lang = "en">

<head>
	<title> User Registration Form </title>
	<?php

	include('includes/header.html');

	?>
	<link rel="stylesheet" href="css/finalstyles.css">
	<!-- css/styles.css -->
</head>


<body>


<div>
 <!--<h1> Study Participant Application </h1> -->
<?php
// THIS PAGE IS THE MEAT OF IT ALL
// Pulls together all included files

$noerror = " ";
$errorarray = array("noerror" => $noerror);
$error = 0;
$errorcodes = array("noerror" => 1, "emailchar" => 0, "noemail" => 0, "namechar" => 0, "noname" => 0, "pastdate" => 0, "nodate" => 0, "dbemail" => 0, "dbname" => 0, "dbdate" => 0, "nophone" => 0, "badphone" => 0);


if ($_SERVER['REQUEST_METHOD'] == 'POST'){


	// save input into new variables
	// strip away HTML tags and trim whitespace for security purposes
	$email = trim(htmlspecialchars($_POST['email']));
	$name = trim(htmlspecialchars($_POST['name']));
	$date = trim(htmlspecialchars($_POST['date']));
	$time = trim(htmlspecialchars($_POST['time']));
	$phone =  trim(htmlspecialchars($_POST['phone']));
	

	// set error indicator to FALSE
	$problem = FALSE;

	// create Error message variables
	$emailchar = '<div class = "error"> ERROR: Email is invalid or contains invalid characters. Please try again. </div>';
	$noemail = '<div class = "error"> This field is required </div>';

	$namechar = '<div class = "error"> ERROR: Name contains invalid characters. Please try again </div>';
	$noname = '<div class = "error"> This field is required </div>';

	$nodate = '<div class = "error"> This field is required </div>';
	$pastdate = '<div class = "error"> ERROR: The date is in the past. Please choose a day in the future. </div>';


	$dbemail = '<div class = "error"> EMAIL ALREADY REGISTERED. Please use a different email. </div>';

	$dbname = '<div class = "error">NAME ALREADY REGISTERED. Please pick a different name. </div>';

	$dbdate = '<div class = "error">  ERROR: Time slot already chosen for ' . $date . " @ " . $time . "</div>";

	$nophone = '<div class = "error"> This field is required </div>';
	$badphone = '<div class = "error"> Invalid Phone Number </div>';




	$errorarray += ["emailchar" => $emailchar];
	$errorarray += ["noemail" => $noemail];
	$errorarray += ["namechar" => $namechar];
	$errorarray += ["noname" => $noname];
	$errorarray += ["pastdate" => $pastdate];
	$errorarray += ["nodate" => $nodate];
	$errorarray += ["dbemail" => $dbemail];
	$errorarray += ["dbdate" =>$dbdate];
	$errorarray += ["dbname" => $dbname];

	$errorarray += ["badphone" => $badphone];
	$errorarray += ["nophone" => $nophone];




	// set to access 'no error' designation by default
	


//****************EMAIL*****************	
	// validate email
	// if email submitted run further validation
	if (!empty($email)){

			
		// make sure email has only one '@' sign
		if (substr_count($email, '@') != 1) {
			
			// set error indicators for TRUE
			
			$problem = TRUE;
			$error = 1;
			$errorcodes['emailchar'] = 1;
			$errorcodes['noerror'] = 0;

		}


	} else {


		// set error indicator to TRUE
		$problem = TRUE;
		$errorcodes['noemail'] = 1;
		$errorcodes['noerror'] = 0;

	}


//****************NAME*****************	
	// validate email
	// if email submitted run further validation

	if (!empty($name)){


		//convert string to array,
		$charArray = str_split($name);
		// if ord(letter) is not one of the specified, throw error
		// Allow dash, space, period, apostrophes, all upper case, all lower case. ASCII reference conditional
		// iterate over string
		foreach ($charArray as $char){

			if (!(
				((ord($char) >= 65) && (ord($char) <=90))  
				|| ((ord($char) >= 97) && (ord($char) <=122)) || 
				(ord($char) == 39) || (ord($char) == 32) ||
				( (ord($char) >= 44) && (ord($char) <=46) )
				)){

				$problem = TRUE;
				$errorcodes['namechar'] = 1;
				$errorcodes['noerror'] = 0;
				break;

				}
		}

	} else {

		// Name not submitted
		$problem = TRUE;
		$errorcodes['noname'] = 1;
		$errorcodes['noerror'] = 0;

	}


// *********DATE CHECK**********

	if (!empty($date)){

		$now = new DateTime();
		$datetime = new DateTime($date);
					
		// check to see if date is in the past
		// TODO: add functionality to limit the future	
		if ($datetime < $now){

			$problem = TRUE;
			$errorcodes['pastdate'] = 1;
			$errorcodes['noerror'] = 0;
		}

	} else {

		// include "email not submitted error"
		// for now, just print to screen
		//print '<div class = "error"> ERROR: Date not submitted. Please enter Date  </div>';

		// set error indicator to TRUE
		//$nodate = TRUE;
		//$error = 6;
		$problem = TRUE;
		$errorcodes['nodate'] = 1;
		$errorcodes['noerror'] = 0;
	}


	if (!empty($phone)){

					
		// check to see if date is in the past
		if (!is_numeric($phone)){

			$problem = TRUE;
			$errorcodes['badphone'] = 1;
			$errorcodes['noerror'] = 0;
		}

	} else {

		// set error indicator to TRUE
		$problem = TRUE;
		$errorcodes['nophone'] = 1;
		$errorcodes['noerror'] = 0;
	}



//***************DATABASE STUFFZ********************

	// INCLUDE SQL connect files for security purposes
	//include('includes/sql/db_connect.php'); DELETE THIS

	include ('includes/sql/db_validation.php');

	// if no issues, add to database, send email, send message
	if (!$problem) {

		// Write user info to database
		include('includes/sql/db_write.php');

		// inform user they have been added to study
		
	
		
		// 
		print "<div class = 'admin-master'><div class = 'admin-inside'> <h1> SUCCESS! </h1> <br/> Congratulations " . $name . ", you have successfully registered for this study! Your appointment is scheduled for " . $date . " @ " . $time . ". If you need to change or cancel your appointment for any reason, please do not hesitate to contact our office. <br/> <br/> Kindly keep this page for your records. Thank you so much for your participation! </div></div>";


	
		// create message and send email
		$message = "Congratulations " . $name . ", you have successfully registered for this study! Your appointment is scheduled for " . $date . " @ " . $time . ". If you need to change or cancel your appointment for any reason, please do not hesitate to contact our office. <br/> <br/> Kindly keep this page for your records. Thank you so much for your participation!";
		mail($email, "Thank you for your participation!",$message, "maxegillman@gmail.com");
		

	}



//*******SHOW FORM ($PROBLEM = YES)*******************
	// also include form if there is an error (problem)
	// error message will appear below input box

	if ($problem) {

		include('includes/user_form.php');


	}	


// ELSE form not processed yet at all, show form
} else {


	include('includes/user_form.php');

}



?>









</div>

</body>



</html>