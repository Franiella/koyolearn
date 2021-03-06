<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="icon" type="image/x-icon" href="img/favicon.png" />
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
			integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		/>
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700;800&display=swap"
			rel="stylesheet"
		/>
		<link rel="stylesheet" href="css/style.css" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>Koyo/Sign Up</title>
	</head>
	<body>
		<header class="position">
			<div class="logo">
				<a href="#"> <img src="/img/koyo-logo.png" alt="Koyo-Logo" /></a>
			</div>

			<nav class="nav">
				<a href="index.html">Home</a>
				<a class="blue" href="signup.html">Register</a>
				<a href="faq.html">FAQs</a>
				<a href="#">Forum</a>
			</nav>
			

			<!--Hamburger menu-->
			<div class="hamburger-menu" onclick="checkMenu(this);toggleMenu();">
				<div class="bar1"></div>
				<div class="bar2"></div>
				<div class="bar3"></div>
			</div>

			<div class="menu">
				<a class="menuLink" href="index.html">Home</a>
				<a class="menuLink" href="signup.html">Register</a> <br />
				<a class="menuLink" href="faq.html">FAQs</a>
				<a class="menulink" href="">Forum</a>
			</div>
		</header>


		
		<main class="main1">
			<div class="form-container">
				<h1><strong>Hi,</strong></h1>
				<span id="resume">Let's get you started</span>
				<br /><br />
				<form class="form1" action="workserver.php" method="post">

			
					<label>
						<span>Full Name</span>
						<input type="text" name="fullname" placeholder="John Doe" required />
					</label>
					<label>
						<span>Username</span>
						<input type="text" name="username" placeholder="JorhnieD" required />
					</label>
					<label>
						<span>Email</span>
						<input type="email" name="email" placeholder="johndoe@example.com" required />
					</label>
					<label>
						<span>Password</span>
						<input
							type="password"
							name="password"
							id="password"
							
							placeholder="input password"
							required
						/>
					</label>
					
					<label>
						<span>Country </span>
						<select id="country" name="country">
							<option>Select your country</option>
							<option>Nigeria</option>
							<option>Ghana</option>
							<option>Kenya</option>
							<option>Liberia</option>
							<option>Others</option>
						</select>
					</label>
					<label id="radbtn">
						<input type="radio" value="student" name="rad" required />
						<span>Student</span>
					</label>
					<label id="radbtn">
						<input type="radio" name="rad" value="tutor" required />
						<span>Tutor</span>
					</label>
					<label id="radbtn">
						<input type="radio" name="rad" value="developer" required />
						<span>Content Developer</span>
					</label>
					<button class="button" type="submit" name="create">Sign Up</button>
					<br />
					<h3 id="signin-up">
						Already have an account?<a href="login.html"> Login</a>
					</h3>
				</form>
			</div>
			<div class="signupimg">
				<img src="/img/hello.jpg" />
			</div>

			
		</main>
		<div class="feet">
			<section class="sect9">
				<p>Contact</p>
				<p class="contact">
					<a href="mailto:koyolearn@education.com">koyolearn@education.com</a>
				</p>
			</section>
	
			<section class="sect10">
				<a href=""><i class="fab fa-facebook-square"></i> </a>
				<a href=""><i class="fab fa-twitter-square"></i></a>
				<a href=""><i class="fab fa-linkedin"></i></a>
				<a href=""><i class="fab fa-instagram"></i></a>
				<a href=""><i class="fab fa-whatsapp-square"></i></a>
			</section>
	
			<section class="sect11">
				<p>
					<span class="orange">KOYO</span> uses best-in-class educators, media
					materials and technology solutions to provide students with
					high-quality, affordable and accessible education. We've created a
					website that allows students to maximize their academic
					accomplishments and prepare for an experience that is rich in content,
					scope, interactivity and effectiveness.
				</p>
				<p>
					<span class="orange">KOYO</span> offers tertiary admission seekers an
					integrated learning experience in Mathematics, English Language,
					Sciences, Arts and Commercial topics, computing, local and some
					international languages, as well as preparation for national and
					regional examinations.
				</p>
			</section>
	
		<div class="policy">
			<p>
				By using this website you agree to our cookie policy.
				<button class="dismiss" id="miss" href="" onclick="dismiss()" >Dismiss</button>
			</p>
		</div>
	</div>
		<footer>
			<p>&copy; 2021 KoyoLearn Nigeria Ltd. - All Rights Reserved.</p>
		</footer>
		
		
	<script src="js/index.js"></script>
	</body>
</html>
