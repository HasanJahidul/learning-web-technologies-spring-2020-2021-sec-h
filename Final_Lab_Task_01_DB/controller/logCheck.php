<?php
	session_start();
	$connect=mysqli_connect("localhost","root",'',"webtech");

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == "" || $password == ""){
			echo "null submission...";
		}else{
			$user = $_SESSION['current_user'];
			$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
			$result = mysqli_query($connect, $sql);
 			$row = mysqli_fetch_assoc($result);
			if(count($row) >0)
				{
				$_SESSION['flag'] = true;
				header('location: ../view/home.php');
			}else{
				echo "invalid user";
			}
		}

	}
	mysqli_close($connect)
?>


