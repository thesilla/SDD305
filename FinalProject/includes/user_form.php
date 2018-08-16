

<form class="base-form" action = "index.php" method = "post">
      <div class="form-title">Study Participant Application</div>

      <div class="form-row">
        <div class="form-label">Enter EMAIL</div>
        <div class="form-control">
          <input class = "form-input" type = "email" name = "email" placeholder = "email@domain.com">
           <!-- <div class="form-error">email is required</div> -->
        </div>
      </div>

      <div class="form-row">
        <div class="form-label">Enter FULL NAME</div>
        <div class="form-control">
          <input class = "form-input" type = "text" name = "name" placeholder = "First Middle Last">
        </div>
      </div>

      <div class="form-row">
        <div class="form-label">Appointment Date</div>
        <div class="form-control">
          <input class = "form-input" type = "date" name = "date" placeholder = "MM/DD/YYYY">
        </div>
      </div>

      <div class="form-row">
        <div class="form-label">Appointment Time</div>
        <div class="form-control">
          <input name = "time" class="form-input" type="time" placeholder="Appointment time" min = "8:00" max = "18:00">
        </div>
      </div>

      <div class="form-row">
        <div class="form-label">Enter Phone Number</div>
        <div class="form-control">
          <input class = "form-input" type = "tel" name = "phone" placeholder = "Enter Phone Number">
        </div>
      </div>

 

      <div class="form-row form-actions">
        <div class="form-label">
          <a class="form-link" href = "admin_area/admin_portal.php"> Admin login</a>
        </div>


        <div class="form-control">
          <input class = "form-button" type = "submit" name = "submit" value = "Consent to Participate in Study">
        </div>
      </div>
    </from>





<!-- MAX original html
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

				

				<input type = "time" name = "time" placeholder = "hh:mm" min ="8:00" max = "18:00">
				<br/>
			</div>
			<br/>
			<input type = "submit" name = "submit" value = "Consent to Participate in Study">
		</form>

		<div id = "adminLink"><a href = "admin_area/admin_portal.php"> Admin Login</a> </div>


	</div> -->