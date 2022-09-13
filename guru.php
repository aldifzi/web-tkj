<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Guru</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body class="selection:bg-slate-600 selection:text-white">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      
      <!--<navbrand class="logo me-auto relative"><a href="index.html"><img src="assets/img/icon.png" alt=""></a>
        <h3 class="pl-3 ">Software Engginering</h3>
      </navbrand>-->
      


      <!-- Uncomment below if you prefer to use an image logo -->
      
      <a class="navbar-brand logo me-auto flex" href="#">
        <img src="assets/img/logo.jpg" alt=""   class="h-10 mr-3" width="51" height="70">
        <span class="self-center text-base font-semibold whitespace-nowrap">TEKNIK KOMPUTER JARINGAN <p class="text-xs font-light">SMK 1 BANTUL</p></span>
      </a>

      
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index" >Home</a></li>

          <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="about">About</a></li>
              <li><a href="guru" class="active">Guru</a></li>
              <li><a href="siswa">Siswa</a></li>

              
            </ul>
          </li>
          
          <li><a href="portfolio">Galeri</a></li>
          <li><a href="berita">Berita</a></li>

          <li><a href="contact">Prestasi</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs max-w-full h-auto"style="background-image: url(assets/img/batik.png);  background-size: 100% 100%;">
    <div class="container bg-fixed"  >

      <div class="d-flex justify-content-between items-center mb-11">
        <h2 class="px-3 mt-4 text-slate-900">Guru</h2>
        <ol class="bg-slate-100 rounded px-3 py-3 absolute right-6 mt-9">
          <li><a href="index.php" class="text-red-800">Home</a></li>
          <li>Guru</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->
  <?php
			include_once("koneksi.php");
			$sql = "SELECT id, nama, alamay, nohp FROM guru";
			$resultset = mysqli_query($connection, $sql) or die("database error:". mysqli_error($connection));			
			while( $record = mysqli_fetch_assoc($resultset) ) {
			?>
            
		
    <!-- ======= Team Section ======= -->
    <section id="team" class="team ">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4><?php echo $record['nama']; ?></h4>
                <span>Chief Executive Officer</span>
                <p><?php echo $record['nohp']; ?></p>
                <div class="social">
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
         

        

          

        </div>

      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

        

          

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Sailor</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">...</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>