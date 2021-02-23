<?php

 $current_Password=$_POST['currentPassword'];
 $new_Password=$_POST['newPassword'];
 $renew_Password=$_POST['renewPassword'];



if(isset($_POST['submit'])){
   if($new_Password == $current_Password)
   {
   	echo "Old password and new Password can not be same";
   }
   else
   {
	   	if($new_Password!=$renew_Password)
	   		{
	   	echo "New password and Confirm password must have to be same";
	   }
	  
	   else
	   
	    {
		   	echo "Password Changed";
	   }
   }
   
   
}

else{
    
}

?>




<!DOCTYPE html>
<html>
<head>
	<title>CHANGE PASSWORD</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset style="width: 380px;">
			<legend> <b>Change Password</b></legend>
				<table>
				<tr>
					<td>Current Password: </td>
					<td> <input type="text" name="currentPassword"/> 
					<br/> </td>
				</tr>

				<tr>
					<td> New Password: </td>
					<td> <input type="text" name="newPassword"/> <br/></td>
				</tr>

				<tr>
					<td>Retype New Password: </td>
					<td> <input type="text" name="renewPassword"/> <br/></td>
				</tr>
			</table>
			<hr>
			<input type="submit" name="Submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>