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

			//read from database
			$query = "select * from login where username = '$username' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: user.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
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
		<h4 class="text-center">FORM LOGIN</h4>
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
			<button type="submit" class="btn btn-primary">LOGIN</button>
			<button type="reset" class="btn btn-danger">RESET</button>
			<br>
			<br>
			<a href="signup.php">Click to Signup</a>
		</form>
	</div>
</body>
</html>