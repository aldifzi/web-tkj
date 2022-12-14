<?php 
session_start();
include('assets/includes/config.php');

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

    <title>Berita</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
  </head>

  <body class="selection:bg-slate-600 selection:text-white">

    <!-- Navigation -->
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      
      <!--<navbrand class="logo me-auto relative"><a href="index.html"><img src="assets/img/icon.png" alt=""></a>
        <h3 class="pl-3 ">Software Engginering</h3>
      </navbrand>-->
      


      <!-- Uncomment below if you prefer to use an image logo -->
      
      <a class="navbar-brand logo me-auto flex" href="index.php">
        <img src="assets/img/logo.jpg" alt=""   class="h-10 mr-3" width="51" height="70">
        <span class="self-center text-base font-semibold whitespace-nowrap">TEKNIK KOMPUTER JARINGAN <p class="text-xs font-light">SMK 1 BANTUL</p></span>
      </a>

      
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index" >Home</a></li>

          <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="about">About</a></li>
              <li><a href="guru">Guru</a></li>
              <li><a href="siswa">Siswa</a></li>

              
            </ul>
          </li>
          
          <li><a href="portfolio">Galeri</a></li>
          <li><a href="berita"class="active">Berita</a></li>

          <li><a href="contact">Prestasi</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->



   <section id="breadcrumbs" class="breadcrumbs max-w-full  h-auto"style="background-image: url(assets/img/bread/breadcumb-berita.jpg); height: auto; width: auto; background-size: 100% 100%; max-width: 100%;" >
      <div class="container bg-fixed"  >

        <div class="d-flex justify-content-between items-center mb-11">
          <h2 class="px-3 mt-4 text-slate-100 font-sans" id="teksbread">Semua Berita</h2>
          <ol class="bg-slate-100 rounded px-3 py-3 absolute right-6 mt-9">
            <li><a href="index.php" class="text-red-800">Home</a></li>
            <li>Berita</li>
          </ol>
        </div>

      </div>
    </section>
    <!-- Page Content -->
    
    <div class="container">


     
      <div class="row" style="margin-top: 4%">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <!-- Blog Post -->
<?php 
     if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 8;
        $offset = ($pageno-1) * $no_of_records_per_page;


        $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
        $result = mysqli_query($con,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);


$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
while ($row=mysqli_fetch_array($query)) {
?>

          <div class="p-6 mt-4 max-w-fit bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
 <img class="rounded-t-lg" src="assets/admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
            <div class="card-body">
              <h2 class="mb-2 mt-4 text-2xl font-bold tracking-tight text-gray-900 "><?php echo htmlentities($row['posttitle']);?></h2>
                 <p><!--category-->
 <a class="badge bg-secondary text-decoration-none link-light" href="category.php?catid=<?php echo htmlentities($row['cid'])?>" style="color:#fff"><?php echo htmlentities($row['category']);?></a>
<!--Subcategory--->
  <a class="badge bg-secondary text-decoration-none link-light"  style="color:#fff"><?php echo htmlentities($row['subcategory']);?></a></p>
       
              <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="mt-3 inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-blue-300 ">Read More &rarr;</a>
            </div>
            <div class="pt-3 mt-6 px-6 border-t border-gray-300 text-gray-600">
              Posted on <?php echo htmlentities($row['postingdate']);?>
           
            </div>
          </div>
<?php } ?>
       

      

          <!-- Pagination -->


    <ul class="flex items-center space-x-1 mx-5 my-4 sm:flex hidden">
        <li class="page-item"><a href="?pageno=1"  class="flex items-center px-4 py-2 text-gray-500 bg-gray-300 rounded-md">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="px-4 py-2 text-gray-700 bg-gray-200 rounded-md hover:bg-blue-400 hover:text-white">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?> " class="px-4 py-2  text-gray-700 bg-gray-200 rounded-md hover:bg-blue-400 hover:text-white">Next</a>
        </li>
        <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="flex items-center px-4 py-2 text-gray-500 bg-gray-300 rounded-md">Last</a></li>
    </ul>

        </div>

        <!-- Sidebar Widgets Column -->
      <?php include('assets/includes/sidebar.php');?>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
      <?php include('assets/includes/footer.php');?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 
</head>
  </body>

</html>
