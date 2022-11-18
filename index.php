<?php
session_start();
 
  
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  
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
          <a href="index.php" class="navbar-brand text-light  ">
            <span class="h2">InfaqKu</span>
          </a>
          <ul class="nav justify-content-end">
            <li class="nav-item">
              <a href="#" class="nav-link active-link linkpad">Home</a>
            </li>
            <li class="nav-item">
              <a href="about.php" class="nav-link ">About</a>
            </li>
            <li class="nav-item">
              <a href="news.php" class="nav-link">News</a>
            </li>
            <li class="nav-item">
              <a href="contact.php" class="nav-link">Contact</a>
            </li>
          </ul>
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
                <a href="index.php" class="nav-link text-light">Home</a>
              </li>
              <li class="nav-item">
                <a href="about.php" class="nav-link ">About</a>
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


      <!-- slider -->
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/home/bg1.png"  class="d-block w-100" alt="">
            <div class="carousel-caption d-none d-md-block caurasel-margin">
              <button class="btn bg-bluegra justify-content-end rounded-1 caurasel-padding">
                <a href="" class=" text-light fs-5">Daftar Sekarang</a>
              </button>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/img/home/bg1.png"  class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="assets/img/home/bg2.png"  class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="assets/img/home/bg1.png"  class="d-block w-100" alt="">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev">
          <span class=" bg-white rounded-100 " aria-hidden="true">
            <span style="color: #16A4F3;">
              <i class="fa-solid fa-arrow-left fa-2x"></i>
            </span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next">
          <span class=" bg-white  rounded-100 " aria-hidden="true">
            <span style="color: #16A4F3;">
              <i class="fa-solid fa-arrow-right fa-2x"></i>
            </span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- end slider -->

    </header>

      <!-- aside -->
      <section class="container-fluid ">
        <aside class="row box text-center mx-auto rounded-1">
          <div class="col-4">          
            <i class="fa-solid fa-hand-holding-dollar fa-2xl"></i>
            <span class="h5">Transaksi</span>
          </div>
          <div class="col-4">        
            <i class="fa-solid fa-gift fa-2xl"></i>
            <span class="h5">Donatur</span>    
          </div>
          <div class="col-4">
            <i class="fa-solid fa-plus fa-2xl"></i>
            <span class="h5">Total Donasi</span>
          </div>
          <aside>
      </section>
      <!-- end aside -->

      <!-- content -->
      <section class="contianer-fluid top pt-5 px-3 ">
        <header>
          <div class="h1 text-center text-light fontSizeJudul mb-30">Program Infaq</div>
          <p class="text-center text-light mb-5 ">Pilih dan salurkan donasi untuk program yang berarti <br> bagi
            Anda dan mereka</p>
        </header>


        <div class="row row-cols-1 row-cols-md-3 g-4 opacity-80 mx-1 px-2 rounded-2 pb-4">
        <div class="col">
            <div class="card">
              <img src="assets/img/home/bg2.png" class="card-img-top" alt="...">
              <div class="card-body">
              <figcaption class="figure-caption text-center mb-5">
                <a href="" class="h6 text-dark">
                  Sedekah Mesjid A
                </a>
              </figcaption>

              <p class="text-start">Donasi Terkumpul</p>
              <div class="progress">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75"
                aria-valuemin="0" aria-valuemax="100">75%</div>
              </div>
              <p class="text-end fs-4">Rp. 5,000,000</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="assets/img/home/bg2.png" class="card-img-top" alt="...">
              <div class="card-body">
              <figcaption class="figure-caption text-center mb-5">
                <a href="" class="h6 text-dark">
                  Sedekah Mesjid A
                </a>
              </figcaption>

              <p class="text-start">Donasi Terkumpul</p>
              <div class="progress">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75"
                aria-valuemin="0" aria-valuemax="100">75%</div>
              </div>
              <p class="text-end fs-4">Rp. 5,000,000</p>
              </div>
            </div>
          </div>  
          <div class="col">
            <div class="card">
              <img src="assets/img/home/bg2.png" class="card-img-top" alt="...">
              <div class="card-body">
              <figcaption class="figure-caption text-center mb-5">
                <a href="" class="h6 text-dark">
                  Sedekah Mesjid A
                </a>
              </figcaption>

              <p class="text-start">Donasi Terkumpul</p>
              <div class="progress">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75"
                aria-valuemin="0" aria-valuemax="100">75%</div>
              </div>
              <p class="text-end fs-4">Rp. 5,000,000</p>
              </div>
            </div>
          </div>
          
        </div>
        <!-- <div class="container-fluid opacity-80 rounded-2 p-4">
          <div class="row text-center">
            <div class=" col-lg-4 col-md-4 btn-dark bg-success p-2  rounded-2   ">
            <div class="feauture">

              <header>
                <figure class="figure">
                  <img src="assets/img/home/bg2.png" class="figure-img img-fluid rounded" alt="...">
                  <figcaption class="figure-caption text-center">
                    <span class="donasi">
                      <a href="" class="fs-5 text-dark">
                        Sedekah Mesjid A
                      </a>
                    </span>
                  </figcaption>
                </figure>
              </header>
              
              <p class="text-start">Donasi Terkumpul</p>
              <div class="progress">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75"
                aria-valuemin="0" aria-valuemax="100">75%</div>
              </div>
              <p class="text-end fs-4">Rp. 5,000,000</p>
            </div>

          </div>  
            <div class="col-lg-4 col-md-4 4 btn-dark bg-success p-2  rounded-2">
              <header>
                <figure class="figure">
                  <img src="assets/img/home/bg2.png" class="figure-img img-fluid rounded" alt="...">
                  <figcaption class="figure-caption text-center">
                    <span class="donasi">
                      <a href="" class="fs-5 text-dark">
                        Sedekah Mesjid A
                      </a>
                    </span>
                  </figcaption>
                </figure>
              </header>
              <p class="text-start">Donasi Terkumpul</p>
              <div class="progress">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100">25%</div>
              </div>
              <p class="text-end fs-4">Rp. 3,000,000</p>
            </div>

            <div class="col-lg-4 col-md-4 4 btn-dark bg-success p-2 rounded-2">
              <header>
                <figure class="figure">
                  <img src="assets/img/home/bg2.png" class="figure-img img-fluid rounded" alt="...">
                  <figcaption class="figure-caption text-center">
                    <span class="donasi">
                      <a href="" class="fs-5 text-dark">
                        Sedekah Mesjid A
                      </a>
                    </span>
                  </figcaption>
                </figure>
              </header>
              <p class="text-start">Donasi Terkumpul</p>
              <div class="progress">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 50%;" aria-valuenow="50"
                  aria-valuemin="0" aria-valuemax="100">50%</div>
              </div>
              <p class="text-end fs-4">Rp. 1,000,000</p>
            </div>
          </div>
        </div> -->
      </section>
      <!-- end content


      footer -->
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
    
    <!-- Boostrap JS -->
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>