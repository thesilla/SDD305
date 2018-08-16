

<?php


// connect to db
include 'includes/sql/db_connect.php';

if ($dbc) {



	// reset all error indicators to FALSE
	$email_error = FALSE;
	$name_error = FALSE;
	$time_error = FALSE;




	$sql = "SELECT * FROM consents";

	if ($result = mysqli_query($dbc, $sql)){
			
		// change date to Unix time stamp for comparing
		$dateConv = strtotime($date);
		$timeConv = strtotime($time);
			
		while($row = mysqli_fetch_array($result)){



			// check to see if email already registered
			 if (strcmp($row['Email'], $email) ==0){


			 	$email_error = TRUE;
			 	$problem = TRUE;

			 	//print $row['email'] . " - " . $email;
			 	//print "email_error AFTER: " . $email_error;
			 	//print " --- " . strcmp($row['email'], $email);
			 	
			 } 


			 // check to see if name already registered
			 if (strcmp($row['ParticipantName'], $name) ==0){

			 	$name_error= TRUE;
			 	$problem = TRUE;
			 	//print $row['fullname'] . " " . $name;
			 }

			 // change date to Unix time stamp for comparing
			 $datevar =  strtotime($row['InterviewDate']);
			 
			 $timevar =  strtotime($row['InterviewTime']);
			 


			// print '<div>' . $timeConv . "</div>";
			// print '<div>' . $timevar . "</div>";


			 if ($datevar == $dateConv){


			 	if ($timevar == $timeConv){

			 		
			 		$time_error = TRUE;
			 		$problem = TRUE;

			 	}
			 }
		}

	

		if ($email_error){

			print  '<div class = "error"> EMAIL ALREADY REGISTERED. Please use a different email. </div>';
		}

		if ($name_error){

			print '<div class = "error">NAME ALREADY REGISTERED. Please pick a different name. </div>';
		}
			 
		if ($time_error){

			print '<div class = "error">  ERROR: Time slot already chosen for ' . $date . " @ " . $time . "</div>";
		}
		
	}


	mysqli_free_result($result);

	mysqli_close($dbc);


// if cannot connect to db, throw error
} else {

	print '<div class = "error"> COULD NOT CONNECT TO DATABASE </div>';

}


	?>