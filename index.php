<?php 
session_start();
include('assets/includes/config.php');

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TKJ | SMK 1 Bantul</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
  <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/css/docs.theme.min.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/owl.theme.default.css">


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
          <li><a href="index.html" class="active">Home</a></li>

          <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="about.html">About</a></li>
              <li><a href="guru.html">Guru</a></li>
              <li><a href="siswa.php">Siswa</a></li>

              
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

  <!-- ======= Hero Section ======= -->
   <section id="hero" class="d-flex align-items-center bg-hero bg-local  sm:bg-fixed">
    <div class="container position-relative" >
      <h1 class="my-auto text-slate-50 font-bold">Selamat Datang Di Ruang TKJ</h1>
      <h2 class="">
        <span class="box"></span><span class='hi'>Kuasai Teknologi</span><hr><span class="text"></span><span class="cursor">_</span>
      </h2>
      <a href="#about" class="btn bg-none text-white border-white border-2 hover:bg-red-800  hover:border-red-600">Pelajari Lebih lanjut</a>
    </div>
  </section><!-- End Hero -->
 
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2 gambarcon" data-aos="fade-left">
            <img src="assets/img/TKJ-1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <h3>Pengertian TKJ (Teknik Komputer dan Jaringan)</h3>
            <p class="fst-italic">
              TKJ (Teknik Komputer dan Jaringan) adalah ilmu berbasis Teknologi Informasi dan Komunikasi terkait kemampuan algoritma, dan pemrograman komputer, perakitan komputer, perakitan jaringan komputer, dan pengoperasian perangkat lunak, dan internet. Teknik komputer, dan jaringan juga membutuhkan pemahaman di bidang teknik listrik, dan ilmu komputer sehingga mampu mengembangkan, dan mengintegrasikan perangkat lunak, dan perangkat keras.
            </p><br>
            <h3>Pekerjaan Yang Cocok Dengan Jurusan TKJ </h3>
            <ul>
              <li><i class="bi bi-check-circle"></i> Jaringan nirkabel</li>
              <li><i class="bi bi-check-circle"></i> Administrator server</li>
              <li><i class="bi bi-check-circle"></i> Integrator komputer</li>
              <li><i class="bi bi-check-circle"></i> Integrator VOIP</li>
              <li><i class="bi bi-check-circle"></i> Administrator Linux</li>
            </ul>
          
          </div>
        </div>

      </div>
    </section><!--End About Section -->

    <!-- ======= Clients Section ======= -->
    
    <!-- ======= Visi Misi Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <div class="section-title text-center" data-aos="fade-down">
          
          <p>Visi dan Misi</p>
          <h2></h2>
        </div>
        <div class="row-span-full text-center" >
          <div class="col" data-aos="fade-right">
            <img src="assets/img/visi.png" alt="" class="mx-auto">
            <h3 class="font-bold">VISI</h3>
            <br>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, accusantium distinctio. praesentium tempore amet eaque sapiente illo eius hic, quod cumque officia explicabo nam molestiae laudantium qui aperiam voluptatibus unde obcaecati autem? wnad</p>
          </div>
          <div class="col mt-5" data-aos="fade-left">
            <img src="assets/img/misi.png" alt="" class="mx-auto">
            <h3 class="font-bold">MISI</h3>
            <br>
            <ol><li class="decoration-dotted">n</li></ol>
          </div>
        </div>
        <button class="button-62 mt-3 hover:">Visi Misi
          <a href="about.html"></a>
        </button>
        </div>

      </div>
    </section><!-- End Visi Misi Section -->

    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="row d-flex align-items-center">

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/Sponsor/LogoTelkom-removebg-preview.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/Sponsor/LogoTenda.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/Sponsor/TPLINK_Logo_2.svg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/Sponsor/intel-logo-baru-4-removebg-preview.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/Sponsor/LogoDCi.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/Sponsor/LogoZTE.jpg" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section>
        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
          <div class="container" data-aos="zoom-in">
    
            <div class="section">
              <div class="section-title top-2">
              <h2 class="text-white">Tentang TKJ</h2>
            </div>
              
            </div>
    
            <div class="row counters">
    
              <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="" data-purecounter-duration="1" class="purecounter"></span>
                <p>Jumlah Kelas</p>
              </div>
    
              <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                <p>Jumlah Siswa</p>
              </div>
    
              <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
                <p>Jumlah Guru Produktif</p>
              </div>
    
              <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
                <p>Jumlah Lab</p>
              </div>
    
            </div>
    
          </div>
    
          </div>
        </section><!-- End Cta Section -->

        <!-- Fasilitas Section -->

    <section id="fasilitas">
        <div class="container">
          <div class="section-title text-center">
          
            <p>Fasilitas</p>
            <h2></h2>
          </div>
          <div class="">
            <div class="hover hover-1 text-white rounded"><img src="assets/img/lab.jpeg" alt="">
              <div class="hover-overlay"></div>
              <div class="hover-1-content px-5 py-4">
                <h3 class="hover-1-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Image </span>Caption</h3>
                <p class="hover-1-description font-weight-light mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              </div>
            </div>
          </div>
        </div>
        </div>
    </section>
<!-- End Fasilitas Section -->

<section class="Daftarguru bg-red-400">
<div>
<div class="section-title1  text-center">
  <p>Daftar Guru</p>
  </div>
  <div class="section-title1  text-center">
        <h2></h2>
  </div>
  <div class="row mt-4">
      <div class=" columns">
        <div class="owl-carousel owl-theme">
          <!-- component -->
          <div class="font-sans flex flex-row justify-center items-center">
  <div class="w-96 mx-auto bg-white">
     <img class="w-3 mx-auto rounded-full border-white" src="https://avatars.githubusercontent.com/u/67946056?v=4" style="width: 190px;" alt="">
     <div class="text-center mt-2 text-3xl font-medium">Ajo Alex</div>
     <div class="text-center mt-2 font-light text-sm">@devpenzil</div>
     <div class="text-center mt-2 font-light text-sm">
       <p>
       <i class="fas fa-phone-alt "></i>
       <span class="font-sans ml-1 font-bold">08954849384</span>
       </p>
     </div>
     <hr class="mt-8">
     
  </div>
</div>
          <!-- component -->
          <div class="font-sans flex flex-row justify-center items-center">
  <div class="w-96 mx-auto bg-white">
     <img class="w-3 mx-auto rounded-full border-white" src="https://avatars.githubusercontent.com/u/67946056?v=4" style="width: 190px;" alt="">
     <div class="text-center mt-2 text-3xl font-medium">Ajo Alex</div>
     <div class="text-center mt-2 font-light text-sm">@devpenzil</div>
     <div class="text-center mt-2 font-light text-sm">
       <p>
       <i class="fas fa-phone-alt "></i>
       <span class="font-sans ml-1 font-bold">08954849384</span>
       </p>
     </div>
     <hr class="mt-8">
     
  </div>
</div>
          <!-- component -->
<div class="font-sans flex flex-row justify-center items-center">
  <div class="w-96 mx-auto bg-white">
     <img class="w-3 mx-auto rounded-full border-white" src="https://avatars.githubusercontent.com/u/67946056?v=4" style="width: 190px;" alt="">
     <div class="text-center mt-2 text-3xl font-medium">Ajo Alex</div>
     <div class="text-center mt-2 font-light text-sm">@devpenzil</div>
     <div class="text-center mt-2 font-light text-sm">
       <p>
       <i class="fas fa-phone-alt "></i>
       <span class="font-sans ml-1 font-bold">08954849384</span>
       </p>
     </div>
     <hr class="mt-8">
     
  </div>
</div>
<div class="font-sans flex flex-row justify-center items-center">
  <div class="w-96 mx-auto bg-white">
     <img class="w-3 mx-auto rounded-full border-white" src="https://avatars.githubusercontent.com/u/67946056?v=4" style="width: 190px;" alt="">
     <div class="text-center mt-2 text-3xl font-medium">Ajo Alex</div>
     <div class="text-center mt-2 font-light text-sm">@devpenzil</div>
     <div class="text-center mt-2 font-light text-sm">
       <p>
       <i class="fas fa-phone-alt "></i>
       <span class="font-sans ml-1 font-bold">08954849384</span>
       </p>
     </div>
     <div class="text-center mt-2 font-light text-sm">
       <p>
       <i class="fa-solid fa-map-location-dot"></i>
       <span class="font-sans ml-1 font-medium">Bantul</span>
       </p>
     </div>
     <div class="text-center mt-2 font-light text-sm">
       <p>
       <i class="fa-solid fa-building-columns"></i>
       <span class="font-sans ml-1 font-medium">Bantul</span>
       </p>
     </div>
  </div>
</div>
        </div>
      </div>
    </div>
</div>
<button class="btn btn-blue bg-white hover:bg-white text-red-800 font-bold py-1 px-4 left-5  hover:text-yellow-400 cursor-pointer   mt-3 ml-28">Lebih Banyak
          <a href="about.html"></a>
        </button>
</section>



<!-- Sekilas Berita Section -->
<section id="recent-blog-posts" class="recent-blog-posts">
   

  
    <!-- ======= Recent Blog Posts Section ======= -->
<section >
  <div class="container" data-aos="fade-up">

 <div class="">
      <div class="section-title text-center">
        <p >Sekilas Berita</p>
        <h2></h2>
      </div>
      </div>

      <?php 
     if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 3;
        $offset = ($pageno-1) * $no_of_records_per_page;


        $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
        $result = mysqli_query($con,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);


$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,postedBy,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
while ($row=mysqli_fetch_array($query)) {
?>
 
  <div class="row gy-5">
 
	<div class="col-xl-4 col-md-6">
      <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="300">

        <div class="post-img position-relative overflow-hidden">
          <img src="assets/admin/postimages/<?php echo htmlentities($row['PostImage']);?>" class="img-fluid" alt="">
          <span class="post-date"><?php echo htmlentities($row['postingdate']);?></span>
        </div>

        <div class="post-content d-flex flex-column">

          <h3 class="post-title"><?php echo htmlentities($row['posttitle']);?></h3>

          <div class="meta d-flex align-items-center">
            <div class="d-flex align-items-center">
              <i class="bi bi-person"></i> <span class="ps-2"><?php echo htmlentities($row['postedBy']);?></span>
            </div>
            <span class="px-3 text-black-50">/</span>
            <div class="d-flex align-items-center">
              <i class="bi bi-folder2"></i> <span class="ps-2"><?php echo htmlentities($row['category']);?></span>
            </div>
          </div>

          <hr>

          <a href="news-details.php" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

        </div>

      </div>
    </div>

  </div>

  </div>
</section>
<!-- End Sekilas Berita Section -->
<?php } ?>
  </main><!-- End #main -->

  
  <!-- ====== Footer Section Start -->
<footer class="bg-white pt-20 lg:pt-[120px] pb-10 lg:pb-20 relative z-10">
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
               <p class="text-base text-body-color mb-7">
               Jl. Parangtritis No.KM.11, Dukuh, Sabdodadi, Kec. Bantul, Kabupaten Bantul
Daerah Istimewa Yogyakarta 55715
               </p>
               <p class="flex items-center text-sm text-dark font-medium">
                  <span class="text-primary mr-3">
                     <i class="fa-solid fa-phone"></i>
                  </span>
                  <span>+012 (345) 678 99</span>
               </p>
               <p class="flex items-center mt-2 text-sm text-dark font-medium">
                  <span class="text-primary mr-3">
                  <i class="fa-solid fa-envelope"></i>
                  </span>
                  <span>smeanbtl@yahoo.com</span>
               </p>
            </div>
         </div>
        
         <div class="w-full sm:w-1/2 lg:w-2/12 px-4 ml-12">
            <div class="w-full mb-10">
               <h4 class="text-dark text-lg font-semibold mb-9">Company</h4>
               <ul>
                  <li>
                     <a
                        href="javascript:void(0)"
                        class="
                        inline-block
                        text-base text-body-color
                        hover:text-primary
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
                        text-base text-body-color
                        hover:text-primary
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
                        text-base text-body-color
                        hover:text-primary
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
                        text-base text-body-color
                        hover:text-primary
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
               <h4 class="text-dark text-lg font-semibold mb-9">Quick Links</h4>
               <ul>
                  <li>
                     <a
                        href="javascript:void(0)"
                        class="
                        inline-block
                        text-base text-body-color
                        hover:text-primary
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
                        text-base text-body-color
                        hover:text-primary
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
                        text-base text-body-color
                        hover:text-primary
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
                        text-base text-body-color
                        hover:text-primary
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
               <h4 class="text-dark text-lg font-semibold mb-9">Follow Us On</h4>
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
                     text-dark
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
                     text-dark
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
                     text-dark
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
                     text-dark
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
</footer>
<!-- ====== Footer Section End --><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader">
</div>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src=" https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/TextPlugin.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/EasePack.min.js"></script>
  <script src="app.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="js/jquery.min.js"></script>
<script src="assets\js\owl.carousel.js"></script>
<script src="https://kit.fontawesome.com/6f2ba42180.js" crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    AOS.init({
      once: true, 
    }
    );
    
</script>
<script>
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:40,
    responsiveClass:true,
    autoplay:true,
    autoplayTimeout:8000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:3,
            nav:true,
            loop:true
        }
    }
    
});
owl.on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY>0) {
        owl.trigger('next.owl');
    } else {
        owl.trigger('prev.owl');
    }
    e.preventDefault();
});

  </script>

</body>

</html>