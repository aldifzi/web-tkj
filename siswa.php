<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Siswa</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

<!-- Favicons -->
<link href="assets/img/logo.jpg" rel="icon">

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
          <li><a href="index.php" >Home</a></li>

          <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="about.html">About</a></li>
              <li><a href="guru.html">Guru</a></li>
              <li><a href="siswa.php" class="active">Siswa</a></li>

              
            </ul>
          </li>
          
          <li><a href="portfolio.html">Galeri</a></li>
          <li><a href="berita.php">Berita</a></li>

          <li><a href="contact.html">Prestasi</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs max-w-full h-auto"style="background-image: url(assets/img/prestasi.png);  background-size: 100% 100%;">
      <div class="container bg-fixed"  >

        <div class="d-flex justify-content-between items-center mb-11">
          <h2 class="px-3 mt-4 text-slate-100">Siswa</h2>
          <ol class="bg-slate-100 rounded px-3 py-3 absolute right-6 mt-9">
            <li><a href="index.html" class="text-red-800">Home</a></li>
            <li>Siswa</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Tabel ======= -->

    <form action="" method="get" class="form mt-4 ml-3">
 <input type="text" name="cari" placeholder="Cari Siswa..." class="bg-gray-100 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-red-500">
 <button class="button-62 ml-4">Cari</button>
</form>
 
<?php 
if(isset($_GET['cari'])){
 $cari = $_GET['cari'];
}
?>


    <div class="container my-5">
    <table class="table table-auto align-middle mb-0 bg-white">
 <thead class="bg-light">
  <tr>
    <th></th>
    <th>NIS</th>
    <TH>Nama</TH>
    <TH>Kelas</TH>
    <th>Alamat</th>
  </tr>
 </thead>
<tbody>
    <?php
 
    
 require('koneksi.php');
 $query1= mysqli_query($connection,"SELECT * FROM user");

 if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}

if(isset($_GET['cari'])){
  $cari = $_GET['cari'];
  $query1 = mysqli_query($connection,"SELECT * FROM user where name like '%".$cari."%'");    
 }else{
  $query1 = mysqli_query($connection,"SELECT * FROM user");  
 }
   
 while($row=mysqli_fetch_array($query1))
 {
    ?>
</tbody>
    <tr class=" hover:bg-gray-200">
    <td><img src="assets/img/icon.png" alt="" width="80px" class="rounded ml-2"></td>
      <td><?php echo  $row['NIS'];?></td>
      <td><?php echo  $row['name'];?></td>
      <td><?php echo  $row['kelas'];?></td>
      <td><?php echo  $row['alamat'];?></td>
    </tr>
    <?php }  ?>
</tbody>

        </table>
 </div>
 </div>
      
    <!-- End tabel Section -->

    

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