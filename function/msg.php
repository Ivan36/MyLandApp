<?php
include "config.php";
session_start(); 
$msg = $_POST['msg'];
$sd  =  $_POST['senderid'];
$rd  = $_POST['receiverid'];

$path_upload = "";


  if($_FILES['uploaded_file']['name'] != null)
  {
    $path = "../uploads/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);
    $path_upload = "uploads/" . basename( $_FILES['uploaded_file']['name']);

    $destination = "uploads/" . basename($_FILES['uploaded_file']['name']);
   if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }

  $sql = "INSERT INTO messages (msg,senderid,receiverid,file_upload) VALUES ('$msg', '$sd','$rd','$path_upload')";


 
if (mysqli_query($conn, $sql)) {
?>
<script>document.location='../message.php?userid=<?php echo $rd;  ?>'</script>
<?php
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 
mysqli_close($conn);
?>