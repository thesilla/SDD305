



<!DOCTYPE html>

<html lang = "en">





<head>

	<title> User Registration Form </title>
	<meta charset = "utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" >
    <link rel="stylesheet" href="css/styles.css">




</head>


<body>


<div>
<h1> Study Participant Application </h1>
<?php
// THIS PAGE IS THE MEAT OF IT ALL
// Pulls together all included files




if ($_SERVER['REQUEST_METHOD'] == 'POST'){


	// save input into new variables
	// strip away HTML tags and trim whitespace for security purposes
	$email = trim(htmlspecialchars($_POST['email']));
	$name = trim(htmlspecialchars($_POST['name']));
	$date = trim(htmlspecialchars($_POST['date']));
	$time = trim(htmlspecialchars($_POST['time']));

	// set error indicator to FALSE
	$problem = FALSE;



//****************EMAIL*****************	
	// validate email
	// if email submitted run further validation
	if (!empty($email)){

			
		// make sure email has only one '@' sign
		if (substr_count($email, '@') != 1) {

			//include "invalid email error"
			// for now, just print to screen
			print '<div class = "error"> ERROR: Email is invalid or contains invalid characters. Please try again. </div>';

			$problem = TRUE;

		}


	} else {

		// include "email not submitted error"
		// for now, just print to screen
		print '<div class = "error"> ERROR: Email not submitted. You must provide your email address </div>';

		// set error indicator to TRUE
		$problem = TRUE;

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

				// include "invalid characters" error
				// for now, just print to screen
				print '<div class = "error"> ERROR: Name contains invalid characters. Please try again </div>';

				$problem = TRUE;
				break;

				}
		}

	} else {

		// include "email not submitted error"
		// for now, just print to screen
		print '<div class = "error"> ERROR: Full name not submitted. You must provide your full name </div>';

		// set error indicator to TRUE
		$problem = TRUE;

	}


// *********DATE CHECK**********

	if (!empty($date)){

		$now = new DateTime();
		$datetime = new DateTime($date);
					
		// check to see if date is in the past
		// TODO: add functionality to limit the future	
		if ($datetime < $now){

			// include "" error
			// for now, just print to screen
			print '<div class = "error"> ERROR: The date is in the past. Please choose a day in the future. </div>';


			$problem = TRUE;
		}

	} else {

		// include "email not submitted error"
		// for now, just print to screen
		print '<div class = "error"> ERROR: Date not submitted. Please enter Date  </div>';

		// set error indicator to TRUE
		$problem = TRUE;
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
		print '<div class = "success"> Congratulations ' . $name . ', you have successfully registered for this study!';


		// TODO;
		//send email
		$message = "Hello $name thank you blah blah blah";
		mail($email, "Thank you for your participation!",$message, "maxegillman@gmail.com");



		// TODO - DELETE THIS
		// for experimental purposes only
		$filename = 'testfile.txt';
		file_put_contents($filename, $email  . PHP_EOL, FILE_APPEND | LOCK_EX);

		$file = file('testfile.txt');
		

	}



//str_split
//preg_match(
// use checkdate() for date validation. Can check to see if dates used in past etc.


//*******SHOW FORM ($PROBLEM = YES)*******************
	// also include form if there is an error (problem)
	// error message will appear above for
	// TODO: or with jscript?
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