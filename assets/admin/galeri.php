<?php
session_start();
include('includes/dbc.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
if( $_GET['disid'])
{
	$id=intval($_GET['disid']);
	$query=mysqli_query($con,"update tblcomments set status='0' where id='$id'");
	$msg="Comment unapprove ";
}
// Code for restore
if($_GET['appid'])
{
	$id=intval($_GET['appid']);
	$query=mysqli_query($con,"update tblcomments set status='1' where id='$id'");
	$msg="Comment approved";
}

// Code for deletion
if($_GET['action']=='del' && $_GET['rid'])
{
	$id=intval($_GET['rid']);
	$query=mysqli_query($con,"delete from  tblcomments  where id='$id'");
	$delmsg="Comment deleted forever";
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <title> | Manage Cooments</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
        <script src="assets/js/modernizr.min.js"></script>
        <link rel="stylesheet" href="css/foundation.css" />

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <?php include('includes/topheader.php');?>

            <!-- ========== Left Sidebar Start ========== -->
<?php include('includes/leftsidebar.php');?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                <div class="row">
                    <li><a href="upload-photo.php" data-reveal-id="uploadModal" data-reveal-ajax="true">Add Photo</a></li>
         <div class="large-12 columns">
            <?php
            if(isset($_GET['success'])) {
            if($_GET['success']=="yes"){?>
            <div class="row">
               <div class="small-6 large-6 columns">
                  <div data-alert class="alert-box success radius ">
                     Image "<?= $_GET['title']; ?>" uploaded successfully.
                     <a href="#" class="close">&times;</a>
                  </div>
               </div>
            </div>
            <?php } else {?>
             <div class="row">
               <div class="small-6 large-6 columns">
                  <div data-alert class="alert-box alert radius ">
                     There was a problem uploading the image.
                     <a href="#" class="close">&times;</a>
                  </div>
               </div>
            </div>
            <?php } }?>
            <div class="row">
            <ul class="col-lg-3 col-md-3 col-sm-3 col-xs-6 d-flex" data-clearing>
               <?php
               require 'includes/dbc.php';
               $stmt = $dbc->query("SELECT * FROM tbl_photos ORDER by img_id ASC");
               foreach ($stmt as $img) {
               ?>
               <li>
                  <a href="<?= $img['img_path']; ?>">
                  <img data-caption="<?= $img['img_title']; ?>" src="<?= $img['img_path']; ?>" class="img-responsive"></a>
               </li>
               <?php } ?>
            </ul>
            </div>
         </div>
      </div>

                </div> <!-- content -->
<?php include('includes/footer.php');?>
            </div>

        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
<?php } ?>