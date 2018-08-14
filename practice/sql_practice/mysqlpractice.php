<!DOCTYPE html>
<html lang = "en">

<head>
	<meta charset = "utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

</head>


<body>


	<?php



	// IF form submitted, handle and validate
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){


		$problem = FALSE;


		if (!empty($_POST['title']) && !empty($_POST['entry'])){

			$title = trim(strip_tags($_POST['title']));
			$entry = trim(strip_tags($_POST['entry']));


		} else {

			print '<div style = "color: red"> Please fill out both fields! </div>';
			include('sqlform.html');
			
			$problem = TRUE;


		}

	
		// If everything from form is good to go, do database stuffz	
		if (!$problem) {

			$servername = "localhost";
			$username = "max";
			$password = "Bunnys11";
			$dbName = "maxDB";


			// Create connection
			$dbc = mysqli_connect($servername, $username, $password, $dbName);

				// Check connection
				// if valid execute rest of queries etc
				if ($dbc) {
				    

					echo "Connected successfully <br/>";




			
		//	Create database if its not already created
	//	***************************************************************If database already created comment this out*************************************************************
	/*
			
					$sql = "CREATE DATABASE maxDB";


					if (mysqli_query($dbc, $sql)) {
					    echo "Database created successfully <br/>";
					} else {
					    echo "Error creating database: " . mysqli_error($dbc) . "<br/>";
					}
				



				// Select target database
	// 	***************************************************************comment this out if database is already selected by connection function******************************************
				// THIS IS NOT TAUGHT IN BOOK FOR SOME REASON

					mysqli_select_db($dbc,  "maxDB");

				



				// Create table query string if its not already created
	//	***************************************************************If already created comment this out***************************************************************************

					$createTable = "CREATE TABLE entries (
					id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
					title VARCHAR(100) NOT NULL,
					entry text NOT NULL,
					date_entered DATETIME NOT NULL) CHARACTER SET utf8";

					// if tables successfully created
					if (mysqli_query($dbc, $createTable)){
						
						print "table sucessfully created <br/>";

					// if error with Table creation
					} else {

						print '<div style="color:red"> Could not create table because: ' . mysqli_error($dbc) . "</div>";

					}

					*/

	//	*******************************************************************************************************************************************************************





					// insert data to table
					
					// Define query string into variable
					$insertQuery = "INSERT INTO entries (id, title, entry, date_entered) VALUES (0, '$title', '$entry',NOW())";

					// Execute the Query
					if (@mysqli_query($dbc, $insertQuery)){

						print '<p>The blog entry has been added! </p>';

					} else {

						print "Could not add entry because: <br/>" . mysqli_error($dbc);

					}



				//close the connection
				mysqli_close($dbc);



			} else {

				die("Connection failed: " . mysqli_connect_error());

			}

		}




	} else { 


		include('sqlform.html');


	}


?>

</body>

</html>


