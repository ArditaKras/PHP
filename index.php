<!DOCTYPE php>
<php>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Live a healthier, happier, more well-rested life with Crystalized Mind">
	<meta name="keywords" content="meditation">
	<title>CrystalizedMind | Welcome</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<header>
				<a href="index.php" class="header-logo">Crystalized<span class="highlight">Mind</span></a>
			<nav>
				<ul class="navbar">
					<li class="current"><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li onclick="document.getElementById('id').style.display='block'">Sign Up</li>
					
						<div id="id" class="mod">
							<form class="mod-content animate" action="/action_page.png" method="post">
								<div class="imgcontainer01">
									<span onclick="document.getElementById('id').style.display='none'" class="close" title="Close">&times;</span>
									<img src="./images/avatar.jpg" alt="Avatar" class="avatar">
								</div>

								<div class="container01">
									<label for="name"><b>Name</b></label>
									<input type="text" placeholder="Enter Name" name="name" required>

									<label for="sname"><b>Surname</b></label>
									<input type="text" placeholder="Enter Surname" name="sname" required>

									<label for="uname"><b>Username</b></label>
									<input type="text" placeholder="Enter Username" name="uname" required>

									<label for="eml"><b>E-mail</b></label>
									<input type="email" placeholder="Enter e-mail" name="eml" required>

									<label for="psw"><b>Password</b></label>
									<input type="password" placeholder="Enter Password" name="psw" required>

									<label for="psw"><b>Re-Enter Password</b></label>
									<input type="password" placeholder="Re-Enter Password" name="psw" required>

									<button class="btn" type="submit">Sign Up</button>
								</div>
							</form>
						</div>
					<li onclick="document.getElementById('id01').style.display='block'">Log In</li>
						<div id="id01" class="modal">
							<form class="modal-content animate" action="/action_page.png" method="post">
								<div class="imgcontainer">
									<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span>
									<img src="./images/avatar.jpg" alt="Avatar" class="avatar">
								</div>

								<div class="container">
									<label for="uname"><b>Username</b></label>
									<input type="text" placeholder="Enter Username" name="uname" required>

									<label for="psw"><b>Password</b></label>
									<input type="password" placeholder="Enter Password" name="psw" required>

									<button class="btn" type="submit">Log In</button>
									<label class="rmm">
										<input type="checkbox" checked="checked" name="remember">Remember me
									</label>
								</div>
							</form>
						</div>
				</ul>
			</nav>
	</header>

	<section>
		<div class="slideshow-container">

			<div class="mySlides fade">
  			<div class="numbertext">1 / 5</div>
  			<img src="./images/imag1.jpg" style="width:100%">
  			<div class="text">
  				<h1>Your Guide to health and happiness</h1>
					<p>Hundreds of themed sessions on everything from stress and sleep to focus and anxiety.<br>
						Bite-sized guided meditations for busy schedules.<br>SOS exercises in case of sudden meltdowns.</p>
  			</div>
			</div>

			<div class="mySlides fade">
  			<div class="numbertext">2 / 5</div>
  			<img src="./images/imag2.jpg" style="width:100%">
  			<div class="text">
  				<h1>Your Guide to health and happiness</h1>
					<p>Hundreds of themed sessions on everything from stress and sleep to focus and anxiety.<br>
						Bite-sized guided meditations for busy schedules.<br>SOS exercises in case of sudden meltdowns.</p>
  			</div>
			</div>

			<div class="mySlides fade">
  			<div class="numbertext">3 / 5</div>
  			<img src="./images/imag3.jpg" style="width:100%">
  			<div class="text">
  				<h1>Your Guide to health and happiness</h1>
					<p>Hundreds of themed sessions on everything from stress and sleep to focus and anxiety.<br>
						Bite-sized guided meditations for busy schedules.<br>SOS exercises in case of sudden meltdowns.</p>
  			</div>
			</div>

			<div class="mySlides fade">
  			<div class="numbertext">4 / 5</div>
  			<img src="./images/imag4.jpg" style="width:100%">
  			<div class="text">
  				<h1>Your Guide to health and happiness</h1>
					<p>Hundreds of themed sessions on everything from stress and sleep to focus and anxiety.<br>
						Bite-sized guided meditations for busy schedules.<br>SOS exercises in case of sudden meltdowns.</p>
  			</div>
			</div>

			<div class="mySlides fade">
  			<div class="numbertext">5 / 5</div>
  			<img src="./images/showcase.jpg" style="width:100%">
  			<div class="text">
  				<h1>Your Guide to health and happiness</h1>
					<p>Hundreds of themed sessions on everything from stress and sleep to focus and anxiety.<br>
						Bite-sized guided meditations for busy schedules.<br>SOS exercises in case of sudden meltdowns.</p></div>
			</div>

	</section>

	<section id="newsletter">
		<div class="klasa1">
			<h1>Subscribe to our newsletter</h1>
			<form>
				<input type="email" placeholder="Enter Email...">
				<button type="submit" class="button_1">Subscribe</button>
			</form>
		</div>
	</section>

	<section id="intro">
		<div class="intro-vid">
			<video loop controls autoplay muted><source src="./videos/intro.mp4" type="video/mp4"></video>
		</div>
		<div class="guidance">
			<p>If you want to learn more about meditation and meditation skills please click on the button to follow our guidance.</p>
			<button onclick="guideFunction()" id="myBtn">Guidance</button>
		</div>
    </section>

	<section id="boxes">
		<table>
			<tr id="box1">
				<td class="cell1"><a href="watch.php"><img src="./images/listen.png"></a></td>
				<td class="cell2">
					<h3>Listen & Watch</h3>
					<p><em>As you listen to our meditation audios you will be guided step by step,<br> allowing you to experience meditation directly.<br> Click on the icon to see more!</em></p></td>
			</tr>
			<tr id="box2">
				<td class="cell3">
					<h3>Read</h3>
					<p><em>Visit our reading pages to learn more about meditation.<br>They can help prepare you for the experience of meditation<br> and support you in your practice.<br>Click on the icon to see more!</em></p>
				</td>
				<td class="cell4"><a href="services.php"><img src="./images/product.png"></a></td>
			</tr>
			<tr id="box3">
				<td class="cell5"><a href="https://choosemuse.com"><img src="./images/prod.png"></a></td>
				<td class="cell6">
					<h3>Products</h3>
					<p><em>Our guided meditations and music are available as Cds and MP3 Downloads.<br>View our Cds and Mp3 Downloads or look for Crystalized Mind on Amazon or Apple iTunes...</em></p>
				</td>
			</tr>
		</table>
	</section>
	<footer>
		<p>Crystalized Mind, Copyright &copy; 2019</p>
	</footer>
	<script type="text/javascript" src="./javascript.js"></script>
</body>
</php>