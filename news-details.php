<?php 
session_start();
include('assets/includes/config.php');
//Genrating CSRF Token
if (empty($_SESSION['token'])) {
 $_SESSION['token'] = bin2hex(random_bytes(32));
}

if(isset($_POST['submit']))
{
  //Verifying CSRF Token
if (!empty($_POST['csrftoken'])) {
    if (hash_equals($_SESSION['token'], $_POST['csrftoken'])) {
$name=$_POST['name'];
$email=$_POST['email'];
$comment=$_POST['comment'];
$postid=intval($_GET['nid']);
$st1='0';
$query=mysqli_query($con,"insert into tblcomments(postId,name,email,comment,status) values('$postid','$name','$email','$comment','$st1')");
if($query):
  echo "<script>alert('comment successfully submit. Comment will be display after admin review ');</script>";
  unset($_SESSION['token']);
else :
 echo "<script>alert('Something went wrong. Please try again.');</script>";  

endif;

}
}
}
$postid=intval($_GET['nid']);

    $sql = "SELECT viewCounter FROM tblposts WHERE id = '$postid'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $visits = $row["viewCounter"];
            $sql = "UPDATE tblposts SET viewCounter = $visits+1 WHERE id ='$postid'";
    $con->query($sql);

        }
    } else {
        echo "no results";
    }
    


?>

<!DOCTYPE html>
<html lang="en">

  <head>
 <!-- Favicons -->
    <link href="assets/img/logo.jpg" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php
          $pid=intval($_GET['nid']);
          $currenturl="http://".$_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];;
          $query=mysqli_query($con,"select tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url,tblposts.postedBy,tblposts.lastUpdatedBy,tblposts.UpdationDate from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.id='$pid'");
          while ($row=mysqli_fetch_array($query)) {
          ?>
    <title><?php echo htmlentities($row['posttitle']);?></title>
    <?php } ?>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    

  </head>

  <body class="selection:bg-slate-400 selection:text-white">

    <!-- Navigation -->
   <?php include('assets/includes/header.php');?>
   <br>
   <!--breadcumbs-->

   <section id="breadcrumbs" class="breadcrumbs max-w-full  h-auto"style="background-image: url(assets/img/bread/breadcumb-berita.jpg); height: auto; width: 33cm; background-size: 100% 100%; max-width: 100%;" >
      <div class="container bg-fixed"  >

        <div class="d-flex justify-content-between items-center mb-11">
          <h2 class="px-3 mt-4 text-slate-100 font-sans" id="teksbread">Detail Berita</h2>
          <ol class="bg-slate-100 rounded px-3 py-3 absolute right-6 mt-9">
            <li><a href="index.php" class="text-red-800">Home</a></li>
            <li>Berita</li>
          </ol>
        </div>

      </div>
    </section>
<!--end breadcumbs-->



    <!-- Page Content -->
    <div class="container">


     
      <div class="row" style="margin-top: 4%">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
  
          <!-- Blog Post -->
          <?php
          $pid=intval($_GET['nid']);
          $currenturl="http://".$_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];;
          $query=mysqli_query($con,"select tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url,tblposts.postedBy,tblposts.lastUpdatedBy,tblposts.UpdationDate from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.id='$pid'");
          while ($row=mysqli_fetch_array($query)) {
          ?>

          <div class="p-6 mt-4 max-w-full font-sans bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
      
            <div class="card-body">
              <h2 class="text-red-700 text-center font-bold font-sans text-xl"><?php echo htmlentities($row['posttitle']);?></h2>
        <!--category-->
        <a class="badge bg-secondary text-decoration-none link-light" href="category.php?catid=<?php echo htmlentities($row['cid'])?>" style="color:#fff"><?php echo htmlentities($row['category']);?></a>
       


<p>
             <div class="text-slate-500 text-xs mx-52">
           <?php echo htmlentities($row['postedBy']);?> on </b><?php echo htmlentities($row['postingdate']);?>
          <?php if($row['lastUpdatedBy']!=''):?></div>
        <?php endif;?>
        
                <div class=" float-right flex">
                <p class="font-semibold font-sans mr-3">Bagikan</p>
                 <a href="http://www.facebook.com/share.php?u=<?php echo $currenturl;?>" target="_blank"><img src="assets/img/fb.png" alt=""  width="22px" class="mx-1"></a> 
<a  href="https://twitter.com/share?url=<?php echo $currenturl;?>" target="_blank"> <img src="assets/img/twitter.png" alt="" width="22px"></a> 
<a href="https://web.whatsapp.com/send?text=<?php echo $currenturl;?>" target="_blank"><img src="assets/img/wa.png" alt="" width="23px" class="
mx-1"></a> 

</div> 
                <hr />

 <img class="img-fluid rounded mt-5" src="assets/admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
  
              <p class="card-text mt-4"><?php 
$pt=$row['postdetails'];
              echo  (substr($pt,0));?></p>
             
            </div>
            <div class="card-footer text-muted">
             
           
            </div>
          </div>
<?php } ?>
       

      

     

        </div>

        <!-- Sidebar Widgets Column -->
      <?php include('assets/includes/sidebar.php');?>
      </div>
      <!-- /.row -->
<!---Comment Section --->

          <div class="row left-1" style="margin-top: -8%">
            <div class="col-md-8">
            <div class=" my-4">
                        <h5 class="font-bold">Komentar</h5>
                        <div class="mt-2">
                          <form name="Comment" method="post">
                  <input type="hidden" name="csrftoken" value="<?php echo htmlentities($_SESSION['token']); ?>" />
                <div class="form-group">
                <input type="text" name="name" class="bg-white max-w-full border-2 border-gray-400 rounded py-2 px-44  text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-red-500" placeholder="Nama.." required>
                </div>

                <div class="form-group mt-3">
                <input type="email" name="email" class="bg-white border-2 border-gray-400 rounded py-2 px-44 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-red-500" placeholder="Email.." required>
                </div>


                  <div class="form-group mt-3">
                    <textarea class="bg-white border-2 border-gray-400 rounded py-2 px-44 text-gray-700  focus:outline-none focus:bg-white focus:border-red-500" name="Komentar" rows="3" placeholder="Comment" required></textarea>
                  </div>
                  <button type="submit" class=" bg-red-500 mt-2 text-white font-bold py-1 px-4 rounded-full cursor-pointer hover:bg-red-900" name="submit">Kirim</button>
                </form>
              </div>
            </div>
<!---End Comment Section --->
 
  

  <!---Comment Display Section --->

  <?php 
 $sts=1;
 $query=mysqli_query($con,"select name,comment,postingDate from  tblcomments where postId='$pid' and status='$sts'");
while ($row=mysqli_fetch_array($query)) {
?>
    <!-- This is an example component -->
<div class=" p-4 mb-8 border rounded-lg bg-white shadow-lg">
    <div class="relative flex gap-4">
        <img src="assets/img/icon.png" class="relative rounded-lg -top-8 -mb-4 bg-white border h-20 w-20" alt="" loading="lazy">
        <div class="flex flex-col w-full">
            <div class="flex flex-row justify-between">
                <p class="relative text-xl whitespace-nowrap truncate overflow-hidden"><?php echo htmlentities($row['name']);?></p>
                <a class="text-gray-500 text-xl" href="#"><i class="fa-solid fa-trash"></i></a>
            </div>
            <p class="text-gray-400 text-sm"><?php echo htmlentities($row['postingDate']);?></p>
        </div>
    </div>
    <p class="-mt-4 text-gray-500"><?php echo htmlentities($row['comment']);?> </p>
    <?php } ?>
</div>

    <!--footer-->
  
      

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

  </body>

</html>
