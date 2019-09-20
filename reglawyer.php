<?php 

include"menu.php";

 ?>


<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<!-- <link href="css/font-awesome.min.css" rel="stylesheet"> -->
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<!-- <link rel="stylesheet" href="css/bootstrap.min.css" > -->
	<link rel="stylesheet" href="css/client.css" >
	<link rel="stylesheet" href="css/fonts-all.css" >
	<link rel="stylesheet" href="fontawesome/css/all.min.css">
	<!-- web-fonts -->
<div class="col-md-4"></div>
<div class="cont">
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