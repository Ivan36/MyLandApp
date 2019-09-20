<?php 
include"menu.php";

include("config.php");
$selected = mysqli_query($conn, "SELECT * FROM lawyers");
 ?>
 <link rel="stylesheet" type="text/css" href="css/w3.css">
 
<div class="w3-container" style="padding:128px 16px" id="lawyer">
  <h3 class="w3-center">LEGAL EXPERTS</h3>
  <p class="w3-center w3-large">Contact the foolowing </p>
  <div class="w3-row-padding w3-grayscale" style="margin-top:54px">
    <?php
           while ($personrow = mysqli_fetch_array($selected)) {
            $personid = $personrow['LandOwnersID'];
            $FirstName = $personrow['FirstName'];
            $LastName = $personrow['LastName'];
            $EmailAddress = $personrow['EmalAddress'];
            $PhoneNo = $personrow['PhoneNo'];
            $District = $personrow['District'];
            ?>
    <div class="w3-col l3 m6 w3-margin-bottom">
         
      <div class="w3-card">
        <img src="/w3images/team2.jpg" alt="Alex" style="width:20%">
        <div class="w3-container">
          <h3><?php echo "$FirstName" ." ". "$LastName"; ?></h3>
          <p class="w3-opacity">B.Laws(MAK)</p>
          <p>Has handled a number of cases <br> Location: <?php echo "$District";  ?>
          expert in LAW</p><br>
          <p>Contact/Phone No: <?php echo "$PhoneNo"; ?></p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact: <?php echo "$EmailAddress";  ?></button></p>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>

</div>
