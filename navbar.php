
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap-3.4.0.min.css">
<link href="css/responsive.css" rel="Stylesheet">
<link href="css/client.css" rel="Stylesheet">
<!-- Custom fonts for this template-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap-3.4.0.min.js"></script>
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/form-validation.js"></script>
<link rel="stylesheet" href="css/w3.css">

<style>
/* Remove the navbar's default margin-bottom and rounded borders */ 
.navbar {
  margin: 1% 1%;
  margin-bottom: 0;
  border-radius: 5px;
}

/* Add a gray background color and some padding to the footer */
footer {
  background-color: #f2f2f2;
  padding: 25px;
  border-radius: 5px;
}
</style>
<div class="head2">
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#" style="color: green;">Menu</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="home.php"> <i class="fa fa-fw fa-home"></i> Home</a></li>
      
         <li><a href="reglawyer.php"><i class="fa fa-fw fa-user"></i>View Lawyers </a></li>
          <li><a href="contactus.php"><i class="fa fa-fw fa-user"></i>View Land Owners</a></li>
          <li><a href="reglawyer.php"><i class="fa fa-fw fa-user"></i>Register Lawyers</a></li>
          <li class = "dropdown">
            <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown"><i class="fas fa-fw fa-list"></i> More Pages<b class = "caret"></b></a>

            <ul class = "dropdown-menu">
              <li><a href = "farmer.php">Administrator</a></li>
              <li><a href = "vendors.php">Marketeer</a></li>
              <li><a href = "#spare.php">Researcher</a></li>
              <li><a href = "Admindashbod.php">Software Developer</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <!-- <li><a href="home.php"><i class="fa fa-fw fa-user" style="margin-left:12px;margin-top:10%;"></i></a></li>     -->
          
          <li><a href="logout.php" onclick="are you sure you want to leave" style="color: gold;"><i class="fas fa-fw fa-power-off"></i> Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <hr>
</div>
