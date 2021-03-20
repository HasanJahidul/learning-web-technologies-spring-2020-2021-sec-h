<?php
	$title= "User list Page";
	include('header.php');
	
?>

	<div id="page_title">
		<h1>User List</h1>
	</div>

	<div id='nav_bar'>
		<a href="home.php"> Back</a> |
		<a href="../controller/logout.php"> logout</a>	
	</div>

	<div id="main_content">
		<table border="1">
			<tr>
				
				<td>Username</td>
				<td>Password</td>
				<td>EMAIL</td>
			</tr>
			<?php 
				$connect=mysqli_connect("localhost","root",'',"webtech");
				$sql = "select * from users";
			    $result = mysqli_query($connect, $sql);
				while($row = mysqli_fetch_assoc($result)){
        
				        echo "<tr>
				        <td>".$row['username']."</td>
				        <td>".$row['password']."</td>
				        <td>".$row['email']."</td>
				       
				        <td><a href=updateUsers.php?msg=".$row['username'].">Edit</a></td>
				        <td><a href=../controller/deleteUsers.php?msg=".$row['username'].">Delete</a></td>
				        </tr>";
				        
				    }
			 ?>
			
			
		</table>
	</div>

<?php include('footer.php'); ?>