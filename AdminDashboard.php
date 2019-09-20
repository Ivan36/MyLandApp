<?php 
include"navbar.php";
 ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<!-- Bootstrap core CSS-->
<link href="css/bootstrap-3.4.0.min.css" rel="stylesheet">

<!-- Custom fonts for this template-->
<link href="fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
<link href="css/client.css" rel="stylesheet" type="text/css">

<link type="text/css" href="vendor/datatable/css/jquery.dataTables.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="vendor/datatable/css/buttons.dataTables.min.css">
<script type="text/javascript" src="vendor/datatable/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="vendor/datatable/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="vendor/datatable/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="vendor/datatable/js/buttons.print.min.js"></script>

<script type="text/javascript" src="vendor/datatable/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="vendor/datatable/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="vendor/datatable/js/jszip.min.js"></script>
<script type="text/javascript" src="vendor/datatable/js/pdfmake.min.js"></script>
<script type="text/javascript" src="vendor/datatable/js/vfs_fonts.js"></script>
<!-- Custom styles for this template-->
  <!-- <link href="css/sb-admin.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script> -->
    <title>System users</title>
    <style>
      .m_buttons{
        float:right;
        margin-left:20px;
        padding:10px 20px;
      }
    </style>

    <script type="text/javascript">
      $(document).ready(function () {

        $("#btn-view").hide();

        $("#btn-add").click(function () {
          $(".content-loader").fadeOut('slow', function ()
          {
            $(".content-loader").fadeIn('slow');
            $(".content-loader").load('registeruser.php');
            $("#btn-add").hide();
            $("#btn-view").show();
          });
        });

        $("#btn-view").click(function () {

          $("body").fadeOut('slow', function ()
          {
            $("body").load('AdminDashboard.php');
            $("body").fadeIn('slow');
            window.location.href = "AdminDashboard.php";
          });
        });

      });
    </script>

  </head>
   <div class="row" style="font-family: Georgia, Times New Roman, serif;">
  <div class="col-sm-1"></div>
 <div class="col-sm-10" style="margin-top: 2%;">

  <div class="content" >
   <!-- <a href="dashboard.php"><button type="button" class="btn btn-success">Notifications</button></a> -->
   <div class="row">

    <div class="col-md-6" ><br>
     <div class="b-container">
 <!--  <div class="jumbotron bg-success">
    <p style="color: #00cc99;"><strong> Realise the fastest communication With Westtalk </strong></p>
     <p style="margin-left: 5%;font-family: Georgia, Times New Roman, serif;"> <strong>SEND SMS REQUEST TO ANY ONLINE SURVEYOR FOR YOUR LAND DETAILS</strong> </p>
   </div> -->

   <div class="row">
    <div class="b-container">
      <h2 class="form-signin-heading" style = "color:green;text-align: center;">CURRENT SYSTEM USERS</h2><hr />
      <button class="btn btn-info" type="button" id="btn-add" onclick="href="register.php""><i class="fas fa-fw fa-plus-circle"></i> &nbsp; ADD USERS</button>
      <button class="btn btn-info" type="button" id="btn-view"> <i class="fas fa-fw fa-eye"></i> &nbsp; VIEW USERS</button>
      <hr />

      <div class="content-loader">
        <table cellspacing="0" width="100%" id="example" class="display nowrap table table-striped table-bordered table-hover table-responsive">
          <thead>
            <tr>
              <td>ID</td>
              <td>Full Name</td>
              <td>Gender</td>
              <td>District</td>
              <td>Contact</td>
              <td>Email</td>
              <td>Status</td>
              <td>Account status</td>
              <td>Action</td>
            </tr>
          </thead>
          <tbody>
            <?php
            require_once 'function/pdoconfig.php';

            $stmt = $DB_con->prepare("SELECT * FROM user ORDER BY id");
            $stmt->execute();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
              ?>
              <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['fullname']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['Hdistrict']; ?></td>
                <td><?php echo $row['phoneNO']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['status']; ?></td>
                <td><?php echo $row['active']; ?></td>
                <td align="center">
                  <a class="btn btn-sm btn-default" style="color: green;" href="activate.php?edit_id=<?php echo $row['id']; ?>" title="click to activate" onclick="return confirm('sure to activate account = <?php echo $row['id']; ?> ?')">
                    <i class="fas fa-fw fa-edit"></i>
                  Activate</a>
                  &nbsp;
                  <a class="btn btn-sm btn-default" style="color: red;" name="inactive" href="deleteuser.php?delete_id=<?php echo $row['id']; ?>" title="click for Deactivate" onclick="return confirm('sure to Deactivate account = <?php echo $row['id']; ?> ?')">
                    <i class="fas fa-fw fa-trash"></i>
                  Deactivate </a>
                </td>
              </tr>
              <?php
            }
            ?>
          </tbody>
          <tfoot>
            <tr>
              <td>ID</td>
              <td>Full Name</td>
              <td>Gender</td>
              <td>District</td>
              <td>Contact</td>
              <td>Email</td>
              <td>Status</td>
              <td>User Type</td>
              <td>Action</td>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
    <script type="text/javascript" charset="utf-8">
                  // $(document).ready(function () {
                  //   $('#employee_data').DataTable();

                  //   $('#example')
                  //   .removeClass('display')
                  //   .addClass('table table-bordered');
                  // });

//                 $(document).ready(function() {
//     $('#example').DataTable( {
//         dom: 'Bfrtip',
//         buttons: [
//             {
//                 extend: 'print',
//                 customize: function ( win ) {
//                     $(win.document.body)
//                         .css( 'font-size', '10pt' )
//                         .prepend(
//                             '<img src="http://datatables.net/media/images/logo-fade.png" style="position:absolute; top:0; left:0;" />'
//                         );

//                     $(win.document.body).find( 'table' )
//                         .addClass( 'compact' )
//                         .css( 'font-size', 'inherit' );
//                 }
//             }
//         ]
//      } );
// } );
$(document).ready(function() {
  $('#example').DataTable( {
    dom: 'Bfrtip',
    buttons: [
    'copy', 'csv', 'excel', 'pdf', 'print'
    ]
  } );
} );          
</script>            
</div>
</div>
</div>
</div>
</div>
</div>
</div>

