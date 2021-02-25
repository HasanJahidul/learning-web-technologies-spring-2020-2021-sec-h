<?php 

if(isset($_POST['submit'])){
	session_start();
	$cpassword=$_POST['cpassword'];
	$nassword=$_POST['npassword'];
	$rassword=$_POST['rnpassword'];
	
   if($npassword == $cpassword)
   {
   	echo "Old password and new Password can not be same";
   }
   else
   {
	   	if($npassword!=$rpassword)
	   		{
	   	echo "New password and Confirm password must have to be same";
	   }
	  
	   else
	   
	    {
		   		//$npassword=$POST['npassword'];
			$_SESSION['password']=$npassword;
	   }
   }
   
}


?>