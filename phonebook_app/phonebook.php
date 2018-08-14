<?php

# I'm going to silence warnings for you... you will gerate a ton of them.
# If you are having problem with your code, comment this line out so you can see the warnings.
error_reporting(E_ALL ^ E_WARNING);

# 1.) Open the file for reading

$file = file('phonebook.dat');



?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>My Phone Book</title>
    </head> 
    <body>
    	<h1>Phone book</h1>
        <?php
        
        # 2.) Loop over each line of the file
        foreach ($file as $entry) {


		# 3.) unserialize the data from that line
            $uns = unserialize($entry);

        # 4.) print it out below
        ?>
        


        <table border="0" width="">
            <tr>
                <td>Name:</td>
                <td>
                    <?php 
                        
                        $name = $uns['Name'];
                        echo "<i> $name </i>"; 

                    ?>
                </td>
            </tr>
            

            <tr>
                <td>Street:</td>
                <td>
                    <?php 
                        
                        $street = $uns['Address']['Street'];
                        echo "<i> $street </i>"; 
                    ?>
                </td>
            </tr>
            <tr>
                <td>City:</td>
                <td> <?php 
                        
                        $city = $uns['Address']['City'];
                        echo "<i> $city </i>"; 
                    ?></td>
            </tr>
            <tr>
                <td>State:</td>
                <td><?php 
                        ;
                        $state = $uns['Address']['State'];
                        echo "<i> $state </i>"; 
                    ?></td>
            </tr>
            <tr>
                <td>Zip:</td>
                <td> <?php 
                        
                        $zip = $uns['Address']['Zip'];
                        echo "<i> $zip </i>"; 
                    ?></td>
            </tr>
            <tr>
                <td>Phone:</td>
                <td><?php 
                        
                        $phone = $uns['Phone'];
                        echo "<i> $phone </i>"; 
                    ?> </td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><?php 
                        
                        $email = $uns['Email'];
                        echo "<i> $email </i>"; 
                    ?></td>
            </tr>
        </table>
        <hr>
        

        <?php
        
        # 5.) Now you can end your loop and close the file
        } // <---- end of loop bracket
        
        ?>



    </body> 
</html> 