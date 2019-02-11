<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
	<link rel="stylesheet" type="text/css" href="style/style.scss">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<title>Document</title>
</head>
<body>
	<?php
		session_start();
	?>
	<div class="header">
		<div class = "container">
			<div class="logo">
				<a href="index.php"><img src="imagini/Capture.PNG"></a>
			</div>
			
			<div class="nav">
				<ul>
					<li><a href="index.php">Home</a></li>
					<?php
						if(!isset($_SESSION['username'])){
							echo '<li><a href="signup.php">Sign up</a></li>';
						}
					?>
					
				</ul>
			</div>
		</div>
	</div>
	<?php
		if(isset($_SESSION['username'])){
			//echo '<p style="text-align: center; font-family: Lato; font-size: 25px;">Bine ai venit</h1>, '. $_SESSION['name'];
			echo '<div class="login">
					<div class="container">
					<p style="text-align: center; font-family: Lato; font-size: 25px;">Bine ai venit</h1>, '. $_SESSION['name'].'
						<form method="POST" action="includes/logout.inc.php">
							<input class="buton" type="submit" value="Log Out"><br>
						</form>	
					</div>
				</div>';
		}else{
			echo '<div class="login">
					<div class="container">
						<h1>Bine ai venit</h1>
						<form method="POST" action="includes/login.inc.php">
							<input type="text" name="username" placeholder="Username"><br><br>
							<input type="password" name="password" placeholder="Password"><br><br>
							<input class="buton" type="submit" value="Log In"><br>
						</form>	
					</div>
				</div>';}
	?>
</body>
</html>