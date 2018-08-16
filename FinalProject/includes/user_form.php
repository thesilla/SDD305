<div = "form">
		<form action = "index.php" method = "post">
			<div class = "input">
				<p>Enter Email: </p>
				<input type = "email" name = "email" placeholder = "Enter Email:">
				<br/>
			</div>

			<div class = "input">
				<p>Enter Full Name (First Middle Last): </p>
				<input type = "text" name = "name" placeholder = "Enter Full Name:">
				<br/>
			</div>

			
			<div class = "input">
				<p>Enter Date: </p>
				<input type = "date" name = "date" placeholder = "MM/DD/YYYY">
				<br/>
			</div>
			
			<div class = "input">
				<p>Enter Time: </p>

				<!-- 
					TODO:

					Make drop down menu with times
					connects to DB and adjusts times on drop down shown as they are taken

					Times must be between 8 AM and 6 PM

				-->

				<input type = "text" name = "time" placeholder = "hh:mm">
				<br/>
			</div>
			<br/>
			<input type = "submit" name = "submit" value = "Consent to Participate in Study">
		</form>

		<div id = "adminLink"><a href = "admin_area/admin_portal.php"> Admin Login</a> </div>


	</div>