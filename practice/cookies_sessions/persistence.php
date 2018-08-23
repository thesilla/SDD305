<?php

# I'm going to silence warnings for you... you will gerate a ton of them.
# If you are having problem with your code, comment this line out so you can see the warnings.
error_reporting(E_ALL ^ E_WARNING);

# First thing you need to do it start the session, this should alwasy be done first.
session_start();

# Next, get whatever is currently in the session so you can spit out on the page
$session_data = $_SESSION;

# Next, get whatever is currently in the cookies so you can spit out on the page
$cookie_data = $_COOKIE;

# Next, you need to see if the form has posted data to this page
if(!empty($_POST)){ 
	
    if (!empty($_POST['save_in_session'])){
    # Now you need to check to see if the check boxes are checked
        if($_POST['save_in_session'] == 1){
        	# If you got this far, then you need to save the rest of the form data into the session
            if (isset($_POST['name'])){
               $_SESSION['name'] = $_POST['name']; 
            }

            if (isset($_POST['street'])){
               $_SESSION['street'] = $_POST['street'];  
            }

            if (isset($_POST['city'])){
               $_SESSION['city'] = $_POST['city'];  
            }

            if (isset($_POST['state'])){
               $_SESSION['state'] = $_POST['state'];  
            }

            if (isset($_POST['zip'])){
               $_SESSION['zip'] = $_POST['zip']; 
            }

            if (isset($_POST['phone'])){
               $_SESSION['phone'] = $_POST['phone']; 
            }

            if (isset($_POST['email'])){
               $_SESSION['email'] = $_POST['email'];  
            }
        
        }
    } 


    if (!empty($_POST['save_cookie'])){
        if($_POST['save_cookie'] == 1){
        	# If you got this far, then you need to save the rest of the form data into cookies
            if (isset($_POST['name'])){
               setcookie('name',$_POST['name']); 
            }

            if (isset($_POST['street'])){
               setcookie('street',$_POST['street']); 
            }

            if (isset($_POST['city'])){
               setcookie('city',$_POST['city']); 
            }

            if (isset($_POST['state'])){
               setcookie('state',$_POST['state']); 
            }

            if (isset($_POST['zip'])){
               setcookie('zip',$_POST['zip']); 
            }

            if (isset($_POST['phone'])){
               setcookie('phone',$_POST['phone']); 
            }

            if (isset($_POST['email'])){
               setcookie('email',$_POST['email']); 
            }


        }
        
    }    

}
# Now that you have saved what you needed to, spit it out on the session and cookie data below. 
# There are already placeholders for the data.

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>My Phone Book</title>
    </head> 
    <body>
    	<h1>Data persistence with Sessions and Cookies</h1>
        <hr>
        <div>
            <h2>Enter new information</h2>
            <form action='#' method="post">
                <table border="0" width="">
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="name"></td>
                    </tr>
                    <tr>
                        <td>Street:</td>
                        <td><input type="text" name="street"></td>
                    </tr>
                    <tr>
                        <td>City:</td>
                        <td><input type="text" name="city"></td>
                    </tr>
                    <tr>
                        <td>State:</td>
                        <td><input type="text" name="state"></td>
                    </tr>
                    <tr>
                        <td>Zip:</td>
                        <td><input type="text" name="zip"></td>
                    </tr>
                    <tr>
                        <td>Phone:</td>
                        <td><input type="text" name="phone"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email"></td>
                    </tr>
                </table>
                <label>Save in Session: <input name="save_in_session" type="checkbox" value="1"></label>
                <br>
                <label>Save Cookie: <input name="save_cookie" type="checkbox" value="1"></label>
                <br>
                <input type="submit" value="submit"/>
            </form>
        </div> 
        <hr>
        <div id="" class="" style="float:left; width:50%;">
            <h2>Information in Session</h2>
            <table border="0" width="">
                <tr>
                    <td>Name:</td>
                    <td><?php if (!empty($session_data['name'])){ print $session_data['name'];}  ?></td>
                </tr>
                <tr>
                    <td>Street:</td>
                    <td><?php if (!empty($session_data['street'])){ print $session_data['street'];}  ?></td>
                </tr>
                <tr>
                    <td>City:</td>
                    <td><?php if (!empty($session_data['city'])){ print $session_data['city'];}  ?>;</td>
                </tr>
                <tr>
                    <td>State:</td>
                    <td><?php if (!empty($session_data['state'])){ print $session_data['state'];}  ?></td>
                </tr>
                <tr>
                    <td>Zip:</td>
                    <td><?php if (!empty($session_data['zip'])){ print $session_data['zip'];}  ?></td>
                </tr>
                <tr>
                    <td>Phone:</td>
                    <td><?php if (!empty($session_data['phone'])){ print $session_data['phone'];}  ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?php if (!empty($session_data['email'])){ print $session_data['email'];}  ?></td>
                </tr>
            </table>
        </div> 
		<div id="" class="" style="float:left; width:50%;">
            <h2>Information in Cookies</h2>
            <table border="0" width="">
                <tr>
                    <td>Name:</td>
                    <td><?php if (!empty($cookie_data['name'])){ print $cookie_data['name'];}  ?></td>
                </tr>
                <tr>
                    <td>Street:</td>
                    <td><?php if (!empty($cookie_data['street'])){ print $cookie_data['street'];}  ?></td>
                </tr>
                <tr>
                    <td>City:</td>
                    <td><?php if (!empty($cookie_data['city'])){ print $cookie_data['city'];}  ?>;</td>
                </tr>
                <tr>
                    <td>State:</td>
                    <td><?php if (!empty($cookie_data['state'])){ print $cookie_data['state'];}  ?></td>
                </tr>
                <tr>
                    <td>Zip:</td>
                    <td><?php if (!empty($cookie_data['zip'])){ print $cookie_data['zip'];}  ?></td>
                </tr>
                <tr>
                    <td>Phone:</td>
                    <td><?php if (!empty($cookie_data['phone'])){ print $cookie_data['phone'];}  ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?php if (!empty($cookie_data['email'])){ print $cookie_data['email'];}  ?></td>
                </tr>
            </table>
        </div>
        <div style="clear:both"></div>
       
    </body> 
</html> 