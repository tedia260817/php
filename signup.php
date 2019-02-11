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
	<div class="header">
		<div class = "container">
			<div class="logo">
				<a href="index.php"><img src="imagini/Capture.PNG"></a>
			</div>
			
			<div class="nav">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="signup.php">Sign up</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="login">
		<div class="container">
			<h1>Sign up</h1>
			<form method="POST" action="includes/signup.inc.php">
			<input type="text" name="nume" placeholder="Name"><br><br>
			<input type="text" name="prenume" placeholder="Surname"><br><br>
			<input type="text" name="username" placeholder="Username"><br><br>
			<input type="password" name="password" placeholder="Password"><br><br>
			<input class="buton" type="submit" value="Sign Up"><br>
			</form>
			<?php
				if(isset($_GET['info']) && $_GET['info'] == 'ok'){
					echo '<p style="text-align: center; color: green; font-size: 20;">Contul a fost creat!</p>';
				}else if(isset($_GET['info']) && $_GET['info'] == 'eroare'){
					echo '<p style="text-align: center; color: red; font-size: 20;">Va rugam sa completati toate datele!</p>';
				}else if(isset($_GET['info']) && $_GET['info'] == 'exista'){
					echo '<p style="text-align: center; color: red; font-size: 20;">Va rugam sa alegeti un alt username!</p>';
			    }
			?>
		</div>
	</div>
</body>
</html>