<?php  

include"menu.php";

?>

<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Lets get in touch. Send us a message: feel ok to tell us what your concern</p>
  <div style="margin-top:48px">
    <!-- <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> EYIT ,Mbarara former Standard Chartered bank building</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +256752343423</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> <a href="http://info@yitug.org">send us an email</a/p> -->
       
    <br>
    <div class="col-sm-6">
    <form action="sendmsg.php" method="POST">



      <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="name"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Contact" required name="contact"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="subject"></p>
      <p><textarea  class="w3-input w3-border" type="text" style="width: 550px; height: 100px;" placeholder="message" required name="message"></textarea></p>
      <p>
        <button class="btn btn-success" name="sendmessage" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
    </div>
    <!-- Image of location/map -->
   
  </div>
</div>
