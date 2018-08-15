<!DOCTYPE html>

<html lang = "en">

<head>
	<meta charset = "utf-8">
	<meta http-equiv="X-UA-Compatible" content = "IE=edge, chrome=1">
	<meta name="viewport" content = "width=device-width, initial-scale=1.0">
	<meta name= "HandheldFriendly" content = "True">
	<title> Week 3 Lab </title>
	<link rel="stylesheet" type = "text/css" media = "screen" href = "css/week3labMG.css" />

</head>



<body>

<div>
<?php
	
	

	

	//GENERAL check to see if form was submitted at all
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){


		//declare variables

		//validation "switch"
		$ok = true;
		
		// Field variables
		$email = $_POST['email'];
		$sal = $_POST['salutation'];
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];

		// email variables
		$subject = "Thank you for registering!";
		$body = "Hello $sal $firstName $lastName" . "! \n Thanks so much for registering. We look forward to seeing more of you soon! \n Sincerely, Max";


		// handle the form
		// Validate to ensure correct input
		

		// if saluation is empty, add error message to array
		if (empty($_POST['salutation'])) {

			// add error type to array
			$error[] = "Salutation";
			$ok = false;

		}
		
		if (empty($_POST['firstName'])) {

			// add error type to array
			$error[] = "First Name";
			$ok = false;
		}

		if (empty($_POST['lastName']))   {

			// add error type to array
			$error[] = "Last Name";
			$ok = false;

		}


		// display error messages
		// if an error was found (aka NOT $ok)...
		if (!$ok){

			print '<div class = "error"> ERROR: Please make sure you provide values for the following fields: <br/>';

			// print out all error messages
			foreach($error as $alert){

				print "$alert  <br/>" ;

			}




			print '</div>';

		}



		if ($ok) {

			print "<div class = 'success'> LOGIN SUCESSFUL! Validation email has been sent to $email </div>";
			mail($email, $subject, $body,'From: username@localhost');

		}


		

	} else {

	// if form not completed/submitted, show form


		// Create salutations array
		$salutation = ["Mr.", "Mrs.", "Ms.", "Dr.", "Rev"];

		// Sort Salutations array to fill alphabetical requirement
		sort($salutation);

		// print first part of form
		print '<div class = "form"> <h1> Submit Contact Information </h1><form action = "week3labMG.php" method = "post"><div class = "rl">*Required Field</div> <div class = "select"> Salutation:  <select name = "salutation">';
		
		// print salutations select list
		foreach($salutation as $var1){
		
			print "<option value =$var1> $var1  </option>";

		}

		// finish form out
		print '

		</select><span class = "required">*</span></div>  <br/>
		Enter your Last Name:  <input type = "text" name = "lastName" placeholder = "Last Name"> <span class = "required"> * </span><br/> 
		Enter your First Name: <input type = "text" name = "firstName" placeholder="First Name"> <span class = "required"> * </span><br/> 
		Enter your Email:
		<input type = "text" name = "email"> <br/>
		<input type = "submit" name = "submit" value = "Validate"></form>';


	}



?>
</div>


</body>

</html>