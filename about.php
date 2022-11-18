<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>About</title>
  
  <!-- fontawesome -->
  <link href="assets/fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="assets/fontawesome/css/brands.css" rel="stylesheet">
  <link href="assets/fontawesome/css/solid.css" rel="stylesheet">
  
  
  <!-- Boostrap -->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <!-- css -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

  <div class="container">
    <header>
    <!-- navbar -->
      <nav class="full-navbar navbar bg-bluegra">
        <div class="container-fluid mx-5">
          <a href="index.html" class="navbar-brand text-light  ">
            <span class="h2">InfaqKu</span>
          </a>
          <ul class="nav justify-content-end">
            <li class="nav-item">
              <a href="index.php" class="nav-link ">Home</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link active-link linkpad">About</a>
            </li>
            <li class="nav-item">
              <a href="news.php" class="nav-link">News</a>
            </li>
            <li class="nav-item">
              <a href="contact.php" class="nav-link">Contact</a>
            </li>
          </ul>
          <button class="btn btn-light justify-content-end rounded-4">
            <a href="login.php" class="btn-bluesky">Log in</a>
          </button>
        </div>
      </nav>
      <!-- end navbar -->

        <!-- mobile only -->
      <nav class="mobile-nav navbar bg-bluegra " aria-label="First navbar example">
          <div class="container mx-4">
            <a class="navbar-brand" href="index.html">
              <span class="h2 text-light">InfaqKu</span>
            </a>
          <button class="navbar-toggler bg-light btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarsExample01">
            <ul class="navbar-nav me-auto mb-2">
              <li class="nav-item">
                <a href="index.php" class="nav-link ">Home</a>
              </li>
              <li class="nav-item">
                <a href="about.php" class="nav-link text-light ">About</a>
              </li>
              <li class="nav-item">
                <a href="news.php" class="nav-link">News</a>
              </li>
              <li class="nav-item">
                <a href="contact.php" class="nav-link">Contact</a>
              </li>

              <?php if (isset($_SESSION['login'])) : ?>
                <button class="btn btn-light justify-content-end rounded-4">
                  <a href="login.php" class="btn-bluesky">Dastboard</a>
                </button>  
              <?php endif ?>

              <?php if(!isset($_SESSION['login'])) : ?>
                <button class="btn btn-light justify-content-end rounded-4">
                  <a href="login.php" class="btn-bluesky">Log in</a>
                </button>
              <?php endif ?>
            </ul>
          </div>
         </div>
      </nav>    
      <!-- end mobile only-->
        
      <div class="header-all header-about text-light ">      
          <span class="h1 fontSizeJudul">About Us</span>
          <hr class="w-25 mx-auto">
      </div>
        
    </header>

    <!-- Content -->
    <section class="content container-fluid p-5">
      <div class="row mx-auto">
        <div class="col-md-6 fs-10 align-self-center">
          <p>                   
            InfaqKu adalah situs web yang dibangun khusus untuk mengumpulkan dana  dengan tujuan berInfaq bagi masyarakat. InfaqKu bekerja dengan menghubungkan para calon donatur dan yang membutuhkan sehingga kegiatan bersedekah dapat berjalan.
          </p>
          <p>
            Bermula dari perkembangan teknologi yang semakin maju 
            dan berkembang pesat di Indonesia, membuat perilaku berdonasi 
            mulai berubah. Kegiatan bersedekah atau berinfaq tidak lagi
            berfokus pada kotak amal fisik tetapi juga digital.
          </p>
          <p>
              Pada tahun 2022, Infaqku melakukan gebrakan kotak sedekah
              dimana berinfaq bisa dilakukan melalui platform online dengan
              pembayaran melalui m-banking dan dompet digital seperti Gopay,  OVO, DANA, dan Shopeepay
          </p>
          <div class="sosmed">
            <ul class="justify-content-center text-center  mt-5">
              <li><a href="#"><i class="fa-brands fa-facebook fa-2x text-dark"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-whatsapp fa-2x text-dark"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-instagram fa-2x text-dark"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-youtube fa-2x text-dark"></i></a></li>
            </ul>
          </div>
        </div>
          <div class="col-md-6 text-end">
              <img src="assets/img/about/figure.png" class="img-fluid" alt="">
          </div>
      </div>
    </section>
    <!-- End Content -->

    <!-- footer -->
    <footer>
      <section class="container-fluid bg-bluegra box1">
        <header>
          <div class="h4 text-center text-light pt-4">
            InfaqKu.com
          </div>
          <hr class="w-25 m-auto text-light">
        </header>
        <div class="sosmed">
          <ul class="justify-content-center text-center ">
            <li><a href="#"><i class="fa-brands fa-facebook fa-2x text-light"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-whatsapp fa-2x text-dark"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-instagram fa-2x text-dark"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-youtube fa-2x text-light"></i></a></li>
          </ul>
        </div>
      </section>
      <div class="container-fluid copyright bg-bluegra p-2">
        <div class="text-light text-center "> Infaqku - 2022</div>
      </div>
    </footer>
    <!-- end footer -->

  </div>
  <!-- end container -->  


  <!-- BOostrap JS -->
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>