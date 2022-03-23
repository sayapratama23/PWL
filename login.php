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
		
		<form action="aksi.php" method="post">
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
					<svg xmlns="http://www.w3.org/2000/svg" width="35" height="30" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>
					</div>
					<input type="text" name="username" class="form-control" placeholder="Masukkan Username Anda">
				</div>
			</div>
			<br>
			<div class="form-group">
				
				<div class="input-group">
					<div class="input-group-prepend">
					<svg xmlns="http://www.w3.org/2000/svg" width="35" height="30" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
  <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
</svg>						
					</div>
					<input type="password" name="password" class="form-control" placeholder="Masukkan Pasword Anda">
				</div>

			
			</div>
			<center><td><input type="submit" class="tombol_login" value="login"></td></center>
			<a href="signup.php">Click to Signup</a>
		</form>
	</div>
</body>
</html>