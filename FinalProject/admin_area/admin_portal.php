
<div class = "admin-master">
    
    <div class = "largetext"> Admin Dashboard </div>

    <div class = "admin-inside">
        <?php print "Welcome, " . $admin_name . "!" ?>
    </div>

    <div class = "admin-inside">


    <?php

    include ('loadAllUsers.php');


    ?>



    </div>
    <div class = "logout">
        <a href = "../index.php"> Log Out </a>
    </div>
</div>







