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
  <header id="header" class="fixed-top d-flex align-items-center shadow-sm ">
    <div class="container d-flex align-items-center ">
      
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
              <li><a href="guru">Guru</a></li>
              <li><a href="siswa" class="active">Siswa</a></li>

              
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
          <h2 class="px-3 mt-4 text-slate-900">Daftar Siswa</h2>
          <ol class="bg-slate-100 rounded px-3 py-3 absolute right-6 mt-9">
            <li><a href="index.html" class="text-red-800">Home</a></li>
            <li>Siswa</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Tabel ======= -->

    <form action="" method="get" class="form mt-4 ml-3">
 <input type="text" name="cari" placeholder="Cari Siswa..." class="bg-gray-50 appearance-none border-2 border-gray-400 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-red-500">
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
  <tr class="font-sans">
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
   
// menyimpan url halaman saat ini dengan fungsi get
                    // misalnya kalian akan melihat ?halaman= 3 pada url di atas, maka 3 akan disimpan ke dalam var halaman
                    $halaman        = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
    
                    // jika nilai halaman lebih besar dari 1 maka halaman awal adalah halaman dikali 10 - 10
                    // jika nilai halaman lebih kecil dari 1 maka halaman awal adalah 0
                    $halaman_awal   = ($halaman > 1) ? ($halaman * 10) - 10 : 0;
    
                    // membuat koneksi ke database
                    $koneksi        = mysqli_connect("localhost", "root", "", "tkj");
    
                    // jika kembali dikurangi 1 dan jika setelahnya ditambah 1
                    $sebelum        = $halaman - 1;
                    $setelah        = $halaman + 1;
    
                    // mengambil data dari tabel pegawai untuk ditotal
                    $datas           = mysqli_query($koneksi, "select * from user");
    
                    // jumlah data pegawai ditotal
                    $jumlah_data    = mysqli_num_rows($datas);
    
                    // ceil adalah fungsi pembulatan pada php
                    $total_halaman  = ceil($jumlah_data / 10);
    
                    // yang ini mengambil data pengawai untuk ditampilkan dengan fungsi limit
                    // satu halaman akan ditampilkan paling banyak 10 atau limit 10
                    $query1   = mysqli_query($koneksi, "select * from user limit $halaman_awal, 10");
    
                    // nomor digunakan untuk penomoran pada kolom no
                    // karena index dimulai dari angka 0 maka perlu ditambah 1
                    $nomor          = $halaman_awal + 1;
 
 while($row=mysqli_fetch_array($query1))
 {
    ?>
</tbody>
    <tr class=" hover:bg-gray-200 font-sans">
    <td><img src="assets/img/icon.png" alt="" width="80px" class="rounded ml-2 tablet:w-10"></td>
      <td><?php echo  $row['NIS'];?></td>
      <td><?php echo  $row['name'];?></td>
      <td><?php echo  $row['kelas'];?></td>
      <td><?php echo  $row['alamat'];?></td>
    </tr>
    <?php }  ?>
</tbody>

        </table>
 </div>
 <nav aria-label="Page navigation example">
                <ul class="inline-flex -space-x-px pb-4 ml-5">
                    <li class="page-item">
                        <a class="px-4 py-2 font-bold text-gray-500 bg-slate-100 rounded-md hover:bg-red-600 border-2 border-red-600 hover:text-white " <?php if($halaman > 1){ echo "href='?halaman=$sebelum'"; } ?>>Previous</a>
                    </li>
                    <?php 
                        for($x = 1; $x <= $total_halaman; $x++){
                    ?> 
                    <li class="page-item"><a class="px-4 py-2 ml-1 text-gray-700 bg-gray-200 rounded-md hover:bg-red-400 hover:text-white" href="?halaman=<?php echo $x ?>"> <?php echo $x; ?></a></li>
                    <?php
                        }
                    ?> 
                    <li class="page-item">
                        <a  class="px-4 py-2 font-bold text-gray-500 bg-slate-100 rounded-md hover:bg-red-600 border-2 border-red-600 hover:text-white " <?php  if($halaman < $total_halaman) { echo "href='?halaman=$setelah'"; } ?>>Next</a>
                    </li>
                </ul>
            </nav>
 </div>
      
    <!-- End tabel Section -->

    

  </main><!-- End #main -->

  <!-- ====== Footer Section Start -->
<footer class="bg-red-700 pt-5 lg:pt-[120px] sm:pt-[150px] mt-4 pb-0 lg:pb-20 relative z-10">
  <div class="bg-yellow-400 pt-4 lg:pt-[110px] pb-0 lg:pb-0 relative z-10">
  <div class="bg-slate-800 pt-9 lg:pt-[120px] pb-5 lg:pb-20 relative z-10">
   <div class="container">
      <div class="flex flex-wrap -mx-4">
         <div class="w-full sm:w-2/3 lg:w-3/12 px-4">
            <div class="w-full mb-10">
               <a
                  href="javascript:void(0)"
                  class="inline-block max-w-[160px] mb-6"
                  >
               <img
                  src="assets/img/logo.jpg"
                  alt="logo"
                  class="w-20"
                  />
               </a>
               <p class="text-white text-body-color mb-7">
               Jl. Parangtritis No.KM.11, Dukuh, Sabdodadi, Kec. Bantul, Kabupaten Bantul
Daerah Istimewa Yogyakarta 55715
               </p>
               <p class="flex items-center text-sm text-white font-medium">
                  <span class="text-primary mr-3">
                     <i class="fa-solid fa-phone"></i>
                  </span>
                  <span>+012 (345) 678 99</span>
               </p>
               <p class="flex items-center mt-2 text-sm text-white font-medium">
                  <span class="text-primary mr-3">
                  <i class="fa-solid fa-envelope"></i>
                  </span>
                  <span>smeanbtl@yahoo.com</span>
               </p>
            </div>
         </div>
        
         <div class="w-full sm:w-1/2 lg:w-2/12 px-4 ml-12">
            <div class="w-full mb-10">
               <h4 class="text-white text-lg font-semibold mb-9">Company</h4>
               <ul>
                  <li>
                     <a
                        href="javascript:void(0)"
                        class="
                        inline-block
                        text-base text-white
                        hover:text-red-800
                        leading-loose
                        mb-2
                        "
                        >
                     About TailGrids
                     </a>
                  </li>
                  <li>
                     <a
                        href="javascript:void(0)"
                        class="
                        inline-block
                        text-base text-white
                        hover:text-red-800
                        leading-loose
                        mb-2
                        "
                        >
                     Contact & Support
                     </a>
                  </li>
                  <li>
                     <a
                        href="javascript:void(0)"
                        class="
                        inline-block
                        text-base text-white
                        hover:text-red-800
                        leading-loose
                        mb-2
                        "
                        >
                     Success History
                     </a>
                  </li>
                  <li>
                     <a
                        href="javascript:void(0)"
                        class="
                        inline-block
                        text-base text-white
                        hover:text-red-800
                        leading-loose
                        mb-2
                        "
                        >
                     Setting & Privacy
                     </a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="w-full sm:w-1/2 lg:w-2/12 px-4 ml-8">
            <div class="w-full mb-10">
               <h4 class="text-white text-lg font-semibold mb-9">Quick Links</h4>
               <ul>
                  <li>
                     <a
                        href="javascript:void(0)"
                        class="
                        inline-block
                        text-base text-white
                        hover:text-red-800
                        leading-loose
                        mb-2
                        "
                        >
                     Premium Support
                     </a>
                  </li>
                  <li>
                     <a
                        href="javascript:void(0)"
                        class="
                        inline-block
                        text-base text-white
                        hover:text-red-800
                        leading-loose
                        mb-2
                        "
                        >
                     Our Services
                     </a>
                  </li>
                  <li>
                     <a
                        href="javascript:void(0)"
                        class="
                        inline-block
                        text-base text-white
                        hover:text-red-800
                        leading-loose
                        mb-2
                        "
                        >
                     Know Our Team
                     </a>
                  </li>
                  <li>
                     <a
                        href="javascript:void(0)"
                        class="
                        inline-block
                        text-base text-white
                        hover:text-red-800
                        leading-loose
                        mb-2
                        "
                        >
                     Download App
                     </a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="w-full sm:w-1/2 lg:w-3/12 px-4 ml-8">
            <div class="w-full mb-10">
               <h4 class="text-white text-lg font-semibold mb-9">Follow Us On</h4>
               <div class="flex items-center mb-6">
                  <a
                     href="javascript:void(0)"
                     class="
                     w-8
                     h-8
                     flex
                     items-center
                     justify-center
                     rounded-full
                     border border-[#E5E5E5]
                     text-white
                     hover:text-white hover:bg-primary hover:border-primary
                     mr-3
                     sm:mr-4
                     lg:mr-3
                     xl:mr-4
                     "
                     >
                     <svg
                        width="8"
                        height="16"
                        viewBox="0 0 8 16"
                        class="fill-current"
                        >
                        <path
                           d="M7.43902 6.4H6.19918H5.75639V5.88387V4.28387V3.76774H6.19918H7.12906C7.3726 3.76774 7.57186 3.56129 7.57186 3.25161V0.516129C7.57186 0.232258 7.39474 0 7.12906 0H5.51285C3.76379 0 2.54609 1.44516 2.54609 3.5871V5.83226V6.34839H2.10329H0.597778C0.287819 6.34839 0 6.63226 0 7.04516V8.90323C0 9.26452 0.243539 9.6 0.597778 9.6H2.05902H2.50181V10.1161V15.3032C2.50181 15.6645 2.74535 16 3.09959 16H5.18075C5.31359 16 5.42429 15.9226 5.51285 15.8194C5.60141 15.7161 5.66783 15.5355 5.66783 15.3806V10.1419V9.62581H6.13276H7.12906C7.41688 9.62581 7.63828 9.41935 7.68256 9.10968V9.08387V9.05806L7.99252 7.27742C8.01466 7.09677 7.99252 6.89032 7.85968 6.68387C7.8154 6.55484 7.61614 6.42581 7.43902 6.4Z"
                           />
                     </svg>
                  </a>
                  <a
                     href="javascript:void(0)"
                     class="
                     w-8
                     h-8
                     flex
                     items-center
                     justify-center
                     rounded-full
                     border border-[#E5E5E5]
                     text-white
                     hover:text-white hover:bg-primary hover:border-primary
                     mr-3
                     sm:mr-4
                     lg:mr-3
                     xl:mr-4
                     "
                     >
                     <svg
                        width="16"
                        height="12"
                        viewBox="0 0 16 12"
                        class="fill-current"
                        >
                        <path
                           d="M14.2194 2.06654L15.2 0.939335C15.4839 0.634051 15.5613 0.399217 15.5871 0.2818C14.8129 0.704501 14.0903 0.845401 13.6258 0.845401H13.4452L13.3419 0.751468C12.7226 0.258317 11.9484 0 11.1226 0C9.31613 0 7.89677 1.36204 7.89677 2.93542C7.89677 3.02935 7.89677 3.17025 7.92258 3.26419L8 3.73386L7.45806 3.71037C4.15484 3.61644 1.44516 1.03327 1.00645 0.587084C0.283871 1.76125 0.696774 2.88845 1.13548 3.59296L2.0129 4.90802L0.619355 4.20352C0.645161 5.18982 1.05806 5.96477 1.85806 6.52838L2.55484 6.99804L1.85806 7.25636C2.29677 8.45401 3.27742 8.94716 4 9.13503L4.95484 9.36986L4.05161 9.93346C2.60645 10.8728 0.8 10.8024 0 10.7319C1.62581 11.7652 3.56129 12 4.90323 12C5.90968 12 6.65806 11.9061 6.83871 11.8356C14.0645 10.2857 14.4 4.41487 14.4 3.2407V3.07632L14.5548 2.98239C15.4323 2.23092 15.7935 1.8317 16 1.59687C15.9226 1.62035 15.8194 1.66732 15.7161 1.6908L14.2194 2.06654Z"
                           />
                     </svg>
                  </a>
                  <a
                     href="javascript:void(0)"
                     class="
                     w-8
                     h-8
                     flex
                     items-center
                     justify-center
                     rounded-full
                     border border-[#E5E5E5]
                     text-white
                     hover:text-white hover:bg-primary hover:border-primary
                     mr-3
                     sm:mr-4
                     lg:mr-3
                     xl:mr-4
                     "
                     >
                     <svg
                        width="16"
                        height="12"
                        viewBox="0 0 16 12"
                        class="fill-current"
                        >
                        <path
                           d="M15.6645 1.88018C15.4839 1.13364 14.9419 0.552995 14.2452 0.359447C13.0065 6.59222e-08 8 0 8 0C8 0 2.99355 6.59222e-08 1.75484 0.359447C1.05806 0.552995 0.516129 1.13364 0.335484 1.88018C0 3.23502 0 6 0 6C0 6 0 8.79263 0.335484 10.1198C0.516129 10.8664 1.05806 11.447 1.75484 11.6406C2.99355 12 8 12 8 12C8 12 13.0065 12 14.2452 11.6406C14.9419 11.447 15.4839 10.8664 15.6645 10.1198C16 8.79263 16 6 16 6C16 6 16 3.23502 15.6645 1.88018ZM6.4 8.57143V3.42857L10.5548 6L6.4 8.57143Z"
                           />
                     </svg>
                  </a>
                  <a
                     href="javascript:void(0)"
                     class="
                     w-8
                     h-8
                     flex
                     items-center
                     justify-center
                     rounded-full
                     border border-[#E5E5E5]
                     text-white
                     hover:text-white hover:bg-primary hover:border-primary
                     mr-3
                     sm:mr-4
                     lg:mr-3
                     xl:mr-4
                     "
                     >
                     <svg
                        width="14"
                        height="14"
                        viewBox="0 0 14 14"
                        class="fill-current"
                        >
                        <path
                           d="M13.0214 0H1.02084C0.453707 0 0 0.451613 0 1.01613V12.9839C0 13.5258 0.453707 14 1.02084 14H12.976C13.5432 14 13.9969 13.5484 13.9969 12.9839V0.993548C14.0422 0.451613 13.5885 0 13.0214 0ZM4.15142 11.9H2.08705V5.23871H4.15142V11.9ZM3.10789 4.3129C2.42733 4.3129 1.90557 3.77097 1.90557 3.11613C1.90557 2.46129 2.45002 1.91935 3.10789 1.91935C3.76577 1.91935 4.31022 2.46129 4.31022 3.11613C4.31022 3.77097 3.81114 4.3129 3.10789 4.3129ZM11.9779 11.9H9.9135V8.67097C9.9135 7.90323 9.89082 6.8871 8.82461 6.8871C7.73571 6.8871 7.57691 7.74516 7.57691 8.60323V11.9H5.51254V5.23871H7.53154V6.16452H7.55423C7.84914 5.62258 8.50701 5.08065 9.52785 5.08065C11.6376 5.08065 12.0232 6.43548 12.0232 8.2871V11.9H11.9779Z"
                           />
                     </svg>
                  </a>
               </div>
               <p class="text-base text-body-color">&copy; 2025 TailGrids</p>
            </div>
         </div>
      </div>
   </div>
   <div>
      <span class="absolute left-0 bottom-0 z-[-1]">
         <svg
            width="217"
            height="229"
            viewBox="0 0 217 229"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
            >
            <path
               d="M-64 140.5C-64 62.904 -1.096 1.90666e-05 76.5 1.22829e-05C154.096 5.49924e-06 217 62.904 217 140.5C217 218.096 154.096 281 76.5 281C-1.09598 281 -64 218.096 -64 140.5Z"
               fill="url(#paint0_linear_1179_5)"
               />
            <defs>
               <linearGradient
                  id="paint0_linear_1179_5"
                  x1="76.5"
                  y1="281"
                  x2="76.5"
                  y2="1.22829e-05"
                  gradientUnits="userSpaceOnUse"
                  >
                  <stop stop-color="#3056D3" stop-opacity="0.08" />
                  <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
               </linearGradient>
            </defs>
         </svg>
      </span>
      <span class="absolute top-10 right-10 z-[-1]">
         <svg
            width="75"
            height="75"
            viewBox="0 0 75 75"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
            >
            <path
               d="M37.5 -1.63918e-06C58.2107 -2.54447e-06 75 16.7893 75 37.5C75 58.2107 58.2107 75 37.5 75C16.7893 75 -7.33885e-07 58.2107 -1.63918e-06 37.5C-2.54447e-06 16.7893 16.7893 -7.33885e-07 37.5 -1.63918e-06Z"
               fill="url(#paint0_linear_1179_4)"
               />
            <defs>
               <linearGradient
                  id="paint0_linear_1179_4"
                  x1="-1.63917e-06"
                  y1="37.5"
                  x2="75"
                  y2="37.5"
                  gradientUnits="userSpaceOnUse"
                  >
                  <stop stop-color="#13C296" stop-opacity="0.31" />
                  <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
               </linearGradient>
            </defs>
         </svg>
      </span>
   </div>
   </div>
   </div>
</footer>
<!-- ====== Footer Section End -->
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