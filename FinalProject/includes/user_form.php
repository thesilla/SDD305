<form class="base-form" action = "index.php" method = "post">
      <div class="form-title">Study Participant Application</div>

      <div class = 'inner' style="color:purple;margin:30px;"> You are being asked to be in a research study to find out what factors attracted women to IT careers, what kinds of experiences they encounter upon entry, what influenced their persistence, and what advice would they offer to other women pursuing careers in IT. Please review the <a style="color:red;"href = 'Participant Consent Form.pdf' target="_blank" >Partipant Consent Form</a> for more details about this study and then complete and submit your information below to consent to particiapte in the study. 
Your information will remain confidential and would not be shared with anyone else.<br><br> The study will take place <strong> September 10th-14th,</strong> continuously between the hours of <strong>8AM and 6PM</strong>.
</div> 

<div class="form-row">
       <!-- <div class="form-label">Enter FULL NAME: </div> -->
       <div class = "required"> *All fields are required* </div>
        
        Full Name:
        <div class="form-control">
          <input class = "form-input" type = "text" name = "name" placeholder =  <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'){ print "\"" . $_POST['name'] . "\"";} else { print "\"Enter Full Name\"";} ?>>

        </div>
      </div>
                <?php // Make this more asteically pleasing, errors should appear in "less random" spots
          if ($errorcodes['noname'] == 1){ 
          print $errorarray['noname'];
          }
          if ($errorcodes['namechar'] == 1){ 
          print $errorarray['namechar'];
          } 
          if ($errorcodes['dbname'] == 1){ 
          print $errorarray['dbname'];
          } 

          ?>




        <div class="form-row"> 
      <!--  <div class="form-label">Enter EMAIL: </div>-->

       <div> Enter Email: </div>
        
        <!-- Sticky controls -->
        <div class="form-control">
          <input class = "form-input" type = "email" name = "email" placeholder = <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'){ print "\"" . $_POST['email'] . "\"";} else { print "\"Enter Email\"";} ?>>
           
          
        </div>
     <!--  --></div>
       <?php 
          if ($errorcodes['noemail'] == 1){ 
          print $errorarray['noemail'];
          }
          if ($errorcodes['emailchar'] == 1){ 
          print $errorarray['emailchar'];
          } 
          if ($errorcodes['dbemail'] == 1){ 
          print $errorarray['dbemail'];
          } 

          ?>



      <div class="form-row">
        <!-- <div class="form-label">Enter Phone Number: </div> -->
        Phone:
        <div class="form-control">
          <input class = "form-input" type = "tel" name = "phone" placeholder = "Enter Phone Number">
        </div>
      </div>
      <?php 
          if ($errorcodes['nophone'] == 1){ 
          print $errorarray['nophone'];
          }
          if ($errorcodes['badphone'] == 1){ 
          print $errorarray['badphone'];
          } 

          ?>
      

      <div class="form-row">
        <!--<div class="form-label">Appointment Date: </div> -->
        
        <?php 
            $min = new DateTime();
            $min->modify("+18 days");
            $max = new DateTime();
            $max->modify("+22 days");
          ?>
        Date:
        <div class="form-control">

  <input class = "form-input"type="date" value="<?php echo date("Y-m-d"); ?>" min=<?= $min->format("Y-m-d") ?> max=<?= $max->format("Y-m-d") ?> name="date" placeholder = "MM/DD/YYYY">

      
        </div>
      </div>
          <?php 
          if ($errorcodes['pastdate'] == 1){ 
          print $errorarray['pastdate'];
          }
          if ($errorcodes['nodate'] == 1){ 
          print $errorarray['nodate'];
          } 

          ?>
      <div class="form-row">
       <!-- <div class="form-label">Appointment Time (8AM-6PM): </div> -->

        Time (8AM-6PM):
        <div class="form-control">
          <input name = "time" class="form-input" type="time" placeholder="Appointment time" min = "08:00" max = "18:00">

        </div>
      </div>
          <?php 
          if ($errorcodes['dbdate'] == 1){ 
          print $errorarray['dbdate'];
          }
      

          ?>

      <div class="form-row form-actions">
        
        <div class="form-control">
          <input class = "form-button" type = "submit" name = "submit" value = "Consent to Participate in Study">
        </div>
     
        <div class="form-label2">
          <a class="admin" href = "admin_area/admin_login.php"> Admin Login </a>
        </div>
      </div>
    </form>
