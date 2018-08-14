<?php

// CREATE DATABASE AND TABLES, IF NEEDED


//	Create database if its not already created on your local web server
	//	***********************If database already created comment this out****************
	
			
					$sql = "CREATE DATABASE surveyDB";


					if (mysqli_query($dbc, $sql)) {
					    echo "Database created successfully <br/>";
					} else {
					    echo "Error creating database: " . mysqli_error($dbc) . "<br/>";
					}
				



				// Select target database
	// 	*******comment this out if database is already selected by connection function******
				

					mysqli_select_db($dbc,  "surveyDB");

				



				// Create table PARTICIPANTS query string if its not already created
	//	******************If already created comment this out**********************************

					$createTable1 = "CREATE TABLE participants (
					id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
					email VARCHAR(100) NOT NULL,
					fullname VARCHAR(100) NOT NULL,
					date_entered DATE NOT NULL,
					time_entered TIME NOT NULL

					) CHARACTER SET utf8";

					// if tables successfully created
					if (mysqli_query($dbc, $createTable1)){
						
						print "table sucessfully created <br/>";

					// if error with Table creation
					} else {

						print '<div style="color:red"> Could not create table because: ' . mysqli_error($dbc) . "</div>";

					}

					

				// Create table ADMINS query string if its not already created
	//	******************If already created comment this out**********************************


					$createTable2 = "CREATE TABLE admins (
					id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
					email VARCHAR(100) NOT NULL,
 					password VARCHAR(100) NOT NULL,
					) CHARACTER SET utf8";

					// if tables successfully created
					if (mysqli_query($dbc, $createTable2)){
						
						print "table sucessfully created <br/>";

					// if error with Table creation
					} else {

						print '<div style="color:red"> Could not create table because: ' . mysqli_error($dbc) . "</div>";

					}





					?>