
<form class="base-form" action = "admin_login.php" method = "post">
      <div class="form-title">Admin Login</div>

      <div class="form-row">
       <!--  <div class="form-label">Enter Admin Login Username: </div> -->

        Username:
        <!-- Sticky Control -->
        <div class="form-control">
          <input class = "form-input" type = "text" name = "admin_name" placeholder = <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'){ print "\"" . $_POST['admin_name'] . "\"";} else { print "\"Enter Admin Username\"";} ?>>
           <!-- <div class="form-error">email is required</div> -->
          
          
        </div>
      </div>
      <?php 
          if ($nouser){
            print '<div class = "error">User name is required. </div>';

          }

          if ($wronguser){

            print '<div class = "error">User name incorrect.</div>';
          }

          ?>

      <div class="form-row">
        <!-- <div class="form-label">Enter Password: </div> -->


        Password: 
        <div class="form-control">
          <input class = "form-input" type = "password" name = "admin_pw" placeholder = "Enter Password">

        </div>
      </div>
       <?php 
          if ($nopw){
            print '<div class = "error">Password is required.';

          }

          if ($wrongpw){

            print '<div class = "error">Incorrect password. </div>';
          }

          ?>
 
      <div class="form-row form-actions">
     

        <div class="form-control">
          <input class = "form-button" type = "submit" name = "submit" value = "LOG IN">
        </div>
      </div>
      <div id = "backbutton"><a href = "../index.php"> Back </a></div>
    </form>
