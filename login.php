

<?php
require_once('function/dbconfig.php');

if (isset($_POST)){
	//check to see if the user exists, compare passwords, redirect to landing page if errors
	// $_SESSION['error']['login'] = [];
	// $notMatch = false;
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$query = "SELECT * FROM user where email = '{$email}'";
	$result = mysqli_query($con, $query);
	if ($row = mysqli_fetch_assoc($result)) {
		if ($row['password'] == $password ) {
			$_SESSION['fullname'] = $row['fullname'];
			$_SESSION['id'] = $row['id'];
			
		
			// header('Location: dashboard.php');
if ($row['usertype'] == 'client') {
// header("location:home.php");
	$query = $con->query("UPDATE user SET status ='online' WHERE email='{$email}' AND password = '{$password}'");
		?>
<script type="text/javascript">
    window.alert("login successful as Land owner go ahead and user our system");
    window.location.href = "home.php";
</script>
<?php
} elseif ($row['usertype'] == 'admin') {
// header("location:staff/manager/index.php");
	$query = $con->query("UPDATE user SET status ='online' WHERE email='{$email}' AND password = '{$password}'");
		?>
<script type="text/javascript">
    window.alert("login successful as Administrator go ahead and user our system");
    window.location.href = "AdminDashboard.php";
</script>
<?php
}
else{
		?>
<script type="text/javascript">
    window.alert("wrong password or username");
    window.location.href = "index.php";
</script>
<?php
// 	echo"wrong password or username";
// header("location:index.php"); 	

}

		}
		else {
			$notMatch = true;
		}
	}
	else {
		?>
<script type="text/javascript">
    window.alert("Hey User your username or password is incorrect please try again");
    window.location.href = "index.php";
</script>
<?php
	}
	if ($notMatch) {
		?>
<script type="text/javascript">
    window.alert("Hey User your Account is not activated and you dont permision to use the system try again later");
    window.location.href = "index.php";
</script>
<?php
	}
}

?>