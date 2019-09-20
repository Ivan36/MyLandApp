<?php
include "function/config.php";

$Name = $_POST['name'];
$Contact = $_POST['contact'];
$Subject = $_POST['subject'];
$Message = $_POST['message'];

$sql = $conn->query(" INSERT INTO sendmessage (name,contact,subject,message) values ('$Name','$Contact','$Subject','$Message')");
	?>
<script type="text/javascript">
    window.alert("Thanks for contacting us ,Give you feedback soon");
    window.location.href = "contactus.php";
</script>
<?php
// header('location:../contactus.php');
?>