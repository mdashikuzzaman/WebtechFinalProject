<?php
include("connection.php");
error_reporting(0); 


 
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Update Employees Information!</title>
</head>
<body style="background-color: coral;";>
	<form action="" method="GET">
		ID:<br>
		<input type="text" name="id" value="<?php echo $_GET['id']; ?>"><br>
		
		Username:<br>
		<input type="text" name="username" value="<?php echo $_GET['username']; ?>"><br>
		
		Email:<br>
		<input type="email" name="email" value="<?php echo $_GET['email']; ?>"><br>
		
		Contact No:<br>
		<input type="text" name="contactno" value="<?php echo $_GET['contactno']; ?>"><br>
		
		<input type="submit" name="submit" value="Update">
	</form>

<?php
	 
	if($_GET[ 'submit'])
	{
		$id = $_GET['id'];
		$username = $_GET['username'];
		$email = $_GET['email'];
		$contactno = $_GET['contactno'];
		$query = "UPDATE employees SET username='$username' , email='$email' , contactno='$contactno' WHERE id='$id' ";
		$data = mysqli_query($conn, $query);
		if($data)
		{
			echo "<font color='green'>Record Updeted Successfully.";
		}
		else
		{
			echo "<font color='red'> Record Not Update";
		
		}
	}
	else
	{
		echo "<font color='blue'> Click on update button to save the change!";
	}

	 
	 

?>	
<a href="viewemployees.php">Check Update Here</a>

</body>
</html>