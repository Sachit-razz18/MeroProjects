<!DOCTYPE html>
<html>
	<link rel="stylesheet" type="text/css" href="css123.css">
	<head>
		<meta charset="utf-8">
		<title>Contact Sachit</title>
	</head>
	<body>
		<nav>
			<div class="logo-cont">
				<p class="logo">SACHIT</p>
			</div>
			<div class="links">
				<ul class="nav-link">
					<li> <a class="links" href="index.html">Home</a></li>
					<li> <a class="links" href="contact.php">Contact Me</a></li>
					<li> <a class="links" href="aboutme.html">About Me</a></li>
					<li> <a class="links" href="projects.html">Projects</a></li>
				</ul>
			</div>
			<div class="burger">
				
				<div class="line1"></div>
				<div class="line2"></div>
				<div class="line3"></div>
			</div>
		</nav>
		<div class="container">
			<div class="contact-box">
				<div class ="left">
				</div>
				<div class="right">
					<h2 class="contactme">Contact Me</h2>
					<form class="contact-form" action="userinfo.php" method="post">
						<input type="text" name="name"class="field" placeholder ="Full Name">
						<input type="email" name="email"class="field" placeholder ="Email">
						<input type="text" name="mobile"class="field" placeholder ="Mobile">
						<textarea class="field" name="message" placeholder="Message"></textarea>
						<button type="submit" name ="submit" class="btn">Send</button>
					</form>
				</div>
			</div>
			
		</div>
		<script src='app.js'></script>
	</body>
</html>