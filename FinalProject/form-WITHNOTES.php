<!DOCTYPE html>

<html lang = "en">



<head>

	<title> Customize </title>
	<meta charset = "utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" >
    <link rel="stylesheet" href="css/styles.css">





</head>


<body>



<div class = "form">
	<form action = "index.php" method = "post">
		

<div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

		<div class = "input">
			Phone number:  
			<input type = "text" name = "phone" placeholder="Enter Phone Number">
		</div>


		<div class = "input">
			Date: 
			<input type = "date" name = "date1" >
		</div>


		<div class = "input">
			Select Appointment Time:
			<select name = "time">
				<option> Print available times </option>
				<option> 1:00 PM </option>
				<option> 2:00 PM </option>

			</select>
		</div>



		<div class = "input">
			Full Name (first middle last): 
			<input type = "text" name = "fullname" placeholder="Enter Full Name">
		</div>

		


		



		<!--NOTE:
			forms should be sticky
		-->


		<!--TODO: Develop date app 
			 - Develop calander display function
			 - otherwise create arrays for each month and 
			 print them under HTML
		--> 
	


		<!--TODO: Develop time app 
			 -save all available times into database/array
		--> 


		<div class = "submit">
			<input type = "submit" name = "submit">
		</div>
	</form>
</div>


</body>



</html>