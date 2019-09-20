<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>my land system login page</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Triple Forms Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<!-- <link href="css/font-awesome.min.css" rel="stylesheet"> -->
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<link rel="stylesheet" href="css/bootstrap.min.css" >
	<link rel="stylesheet" href="css/client.css" >
	<link rel="stylesheet" href="css/fonts-all.css" >
	<link rel="stylesheet" href="fontawesome/css/all.min.css">
	<!-- web-fonts -->
	<!-- <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext"
		rel="stylesheet"> -->
		<!-- //web-fonts -->
	</head>

	<body>
		<div class="main-bg">
			<!-- title -->
			<h1 class="hd">MY LAND WEB ASSISTANT APPLICATION</h1>
			<!-- //title -->
			<div class="sub-main-w3">
				<div class="image-style">

				</div>
				<!-- vertical tabs -->
				<div class="vertical-tab">
					<div id="section1" class="section-w3ls">
						<input type="radio" name="sections" id="option1" checked>
						<label for="option1" class="icon-left-w3pvt"><span class="fa fa-user-circle" aria-hidden="true"></span>Login</label>
						<article>
							<form action="login.php" method="post" autocomplete="off">
								<h3 class="legend">Login Here</h3>
								<div class="input">
									<span class="fa fa-user" aria-hidden="true"></span>
									<input type="email" id="email" name="email" class="form-control" placeholder="User Email address" required="required" autofocus="autofocus" autocomplete="off">
								</div>
								<div class="input">
									<span class="fa fa-key" aria-hidden="true"></span>
									<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="required" autocomplete="off">
								</div>
								<button type="submit" name="login" class="btn submit">Login</button>
								<a href="#" class="bottom-text-w3ls">Forgot Password?</a>
							</form>
						</article>
					</div>
					<div id="section2" class="section-w3ls">
						<input type="radio" name="sections" id="option2">
						<label for="option2" class="icon-left-w3pvt"><span class="fa fa-pen-square" aria-hidden="true"></span>Register</label>
						<article>
							<form action="function/conn.php" method="post">
								<h3 class="legend">Register Here</h3>
								<div class="input">
									<span class="fa fa-user" aria-hidden="true"></span>
									<input class="login-input" placeholder="Enter Full Names" type="text" name="fullname" required />
								</div>
								<div class="input">
									<span class="fa fa-user-circle" aria-hidden="true"></span>
									<input class="login-input" type="text" name="gender" placeholder="Enter gender" required />
								</div>
								<div class="input">
									<span class="fa fa-pen-square" aria-hidden="true"></span>
									<input type="text" name="Hdistrict" placeholder="Enter District" required />
								</div>
								<div class="input">
									<span class="fa fa-pen-square" aria-hidden="true"></span>
									<input type="email" name="email" placeholder="Enter Email address" required />
								</div>
								<div class="input">
									<span class="fa fa-pen-square" aria-hidden="true"></span>
									<input type="number" name="phoneNO" placeholder="Enter phone NO" required />
								</div>
								<div class="input">
									<span class="fa fa-key" aria-hidden="true"></span>
									<input type="password" name="password" placeholder="Enter Password" required />
								</div>
								<div class="form-group">
									<input type="hidden" value="client" name="usertype" class="form-control" required>
								</div>
								<button type="submit" class="btn submit">Register</button>
							</form>
						</article>
					</div>
					<div id="section3" class="section-w3ls">
						<input type="radio" name="sections" id="option3">
						<label for="option3" class="icon-left-w3pvt"><span class="fa fa-lock" aria-hidden="true"></span>Forgot Password?</label>
						<article>
							<form action="#" method="post">
								<h3 class="legend last">Reset Password</h3>
								<p class="para-style">Enter your email address below and we'll send you an email with instructions.</p>
								<p class="para-style-2"><strong>Need Help?</strong> Learn more about how to <a href="#">retrieve an existing
								account.</a></p>
								<div class="input">
									<span class="fa fa-envelope-o" aria-hidden="true"></span>
									<input type="email" placeholder="Email" name="email" required />
								</div>
								<button type="submit" class="btn submit last-btn">Reset</button>
							</form>
						</article>
					</div>
				</div>
				<!-- //vertical tabs -->
				<div class="clear"></div>
			</div>
			<!-- copyright -->
			<div class="copyright">
				<h2>&copy; 2019 land management system | Design by 
					<a href="http://w3layouts.com" target="_blank">myland team</a>
				</h2>
			</div>
			<!-- //copyright -->
		</div>

	</body>

	</html>
