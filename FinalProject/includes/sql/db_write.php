
<?php
			
	include('includes/sql/db_connect.php');

	if ($dbc){

		// Insert Data in db -  write query
		$s = "INSERT INTO `participants`(`email`, `fullname`, `date_entered`, `time_entered`) VALUES ('$email','$name','$date','$time')";

		// run query. Data will be entered into database
		mysqli_query($dbc, $s);

		// close dbc
		mysqli_close($dbc);


	


	} else {

		print '<div class = "error"> COULD NOT CONNECT TO DATABASE </div>';



	}


?>