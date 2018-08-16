
<?php
			
	include('includes/sql/db_connect.php');

	if ($dbc){

		// create user timestamp
		$timestamp = date('Y-m-d G:i:s');
		// create status string variable
		$status = "REGISTERED";

		// Insert Data in db - write query
		$s = "INSERT INTO `consents`(`Email`, `InterviewDate`, `InterviewTime`, `ParticipantName`,`DateConsented`,`Phone`,`Status`) VALUES ('$email','$date','$time','$name', '$phone', '$status', '$timestamp')";

		// run query. Data will be entered into database
		mysqli_query($dbc, $s);

		// close dbc
		mysqli_close($dbc);


	


	} else {

		print '<div class = "error"> COULD NOT CONNECT TO DATABASE </div>';



	}


?>