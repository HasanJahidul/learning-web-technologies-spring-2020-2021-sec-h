<?php

 



if(isset($_POST['submit'])){
	$username= $_REQUEST['username'];
	$password=$_REQUEST['password'];


	$user_length= strlen($username);
	$password_length =strlen ($password);
 	if ($user_length<2)
   {
   	echo "Invalid username";
   }
   else
   {
	   	if($password_length<8)
	   		{
	   	echo "Password must be over 8 charecter";
	   }
	  
	   else
	   
	    {
		   	if(!preg_match('/[@#$%]/', $password))
		   {
		   	echo "Password must contains (@, #, $, %)";
		   }
	   	else { echo "Log In succesfull";}
	   }
   }
   
   
}

else{
    $username = "";
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    
    <form method="post" >
        
        <fieldset style="width:45%; margin:  0px auto;"  >
                        
                        <legend align= "left"><b>LOGIN</b></legend>
                        
                        User Name&nbsp;:&nbsp;<input type="text" name="username" placeholder=" Enter User Name"><br><br>
                        Password&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<input type="password" name="password" placeholder=" Enter Password">
                        <hr>
                        <input type="checkbox" name="remember_me" value="1"> <b>Remember Me</b><br><br>
                        <input type="submit" name="submit" value="Submit"> <a href="forgotPassword.php">Forgot Password?</a>

                    </fieldset>
        
        
    </form>
    
</body>
</html>