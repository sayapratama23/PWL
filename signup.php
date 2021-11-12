<?php 
session_start();

	include("koneksi.php");
	include("fungsion.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into login (user_id,username,password) values ('$user_id','$username','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="login.css">
	<script src="https://kit.fontawesome.com/bb10be3136.js" crossorigin="anonymous"></script>
	<title>Login</title>
	
</head>
<body>


	<div class="container">
		<br>
		<h4 class="text-center">SIGN UP</h4>
		<hr>
		
		<form method="post">
			<div class="form-group">
				<label>Username</label>

				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="fas fa-users"></i></div>
					</div>
					<input type="text" name="username" class="form-control" placeholder="Masukkan Username Anda">
				</div>
			</div>

			<div class="form-group">
				<label>Password</label>

				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
					</div>
					<input type="password" name="password" class="form-control" placeholder="Masukkan Pasword Anda">
				</div>
			</div>
			<br>
			<button type="submit" class="btn btn-primary">SIGN UP</button>
			<button type="reset" class="btn btn-danger">RESET</button>
			<br>
			<br>
			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>