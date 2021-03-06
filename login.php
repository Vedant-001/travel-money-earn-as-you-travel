<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="styles/indexstyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
	
	<script src="https://kit.fontawesome.com/a076d05399.js" ></script>


</head>
<body>
	<nav>
		<input type="checkbox" id="check">
		<label for="check">
			<i class="fas fa-bars" id="btn"></i>
			<i class="fas fa-times" id="cancel"></i>
		</label>
		<h2>Travel Money</h2>
		<ul>
			<li>
				<a href="index.php">Home</a>
			</li>
			<li>
				<a href="index.php">Signup</a>
			</li>
			<li>
				<a href="about.php">About</a>
			</li>
		</ul>
	</nav>

<!-- 	<div>
		<h1>Login</h1>
		<form action="index.php" method="POST">
 			<label for="inputUsername">Username</label>
 			<input type="email" id="inputUsername" name="username" placeholder="username...">

 			<label for="inputPassword">Password</label>
 			<input type="password" id="inputPassword" name="password" placeholder="password...">

 			<input type="submit" name="submit" value="submit">
		</form> 	
	</div> -->

	<div class="wrapper">
		<section class="form signup">
			<header>Login</header>
			<form action="login.php" method="POST" class="form">
				<div class="error-txt">
					This is the error message
				</div>

				<div class="login-details">
				
					<div class="field input">
						<label>Email Address</label>
						<input type="email" name="email" placeholder="Email Address..">
					</div>
					<div class="field input">
						<label>Password</label>
						<input type="password" name="pwd" placeholder="Password..">
						<i class="fas fa-eye"></i>
					</div>
				</div>

				<div class="field select-field">
					<label for="typeofUser">Traveller or Customer?</label>

					<select name="type" id="typeOfUser">
					  <option value="traveller">Traveller</option>
					  <option value="customer">Customer</option>
					</select>
				</div>

				<div class="field submit-btn">
					<input type="submit" name="submit_signup" value="Login" >
				</div>
				<div class="link">
					Don't have an account? <a href="index.php">Register here</a>
				</div>

				
			</form>
		</section>
	</div>

<footer>
		Made by Neel Choksi 19BCE0990 , Vedant Karale 19BCE2050
	</footer>

	<script src="javascript/password-show-hide.js"></script>
	<script src="javascript/signin.js"></script>
</body>
</html>
