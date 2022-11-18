<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>News</title>
  
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
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="about.php" class="nav-link ">About</a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link active-link linkpad">News</a>
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
            <a class="navbar-brand" href="index.php">
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
                <a href="about.php" class="nav-link ">About</a>
              </li>
              <li class="nav-item">
                <a href="news.php" class="nav-link text-light">News</a>
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
      <div class="header-all header-news text-light ">      
        <span class="h1 fontSizeJudul">Berita Terkini</span>
        <hr class="w-25 mx-auto">
      </div>
    </header>

    <!-- Content -->
    <div class="content-news pb-4">
      <div class="container-fluid pt-4">
        <!-- row -->
        <div class="row m-2  pt-4 px-2 rounded-4 bg-light">
          
          <!-- col -->
          <div class="col-md-4">
            <article>
              <div class="card" style="width: auto;">
                <img class="card-img-top" src="/assets/img/news/thumpnail.png" alt="Card image cap">
                  <div class="card-body">
                    <a href="">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p></a>
                  </div>
              </div>
            </article>

            <article>
              <div class="card" style="width: auto;">
                <img class="card-img-top" src="/assets/img/news/thumpnail.png" alt="Card image cap">
                  <div class="card-body">
                    <a href="">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </a>
                  </div>
              </div>
            </article>
            <!-- end col -->
          </div>
          <!-- col -->
          <div class="col-md-4">
            <article>
              <div class="card" style="width: auto;">
                <img class="card-img-top" src="/assets/img/news/thumpnail.png" alt="Card image cap">
                <div class="card-body">
                  <a href="">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </a>
                </div>
              </div>
            </article>

            <article>
              <div class="card" style="width: auto;">
                <img class="card-img-top" src="/assets/img/news/thumpnail.png" alt="Card image cap">
                <div class="card-body">
                  <a href="">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </a>
                </div>
              </div>
            </article>
          </div>
          <!-- end col -->
            
          <!-- col -->
          <div class="col-md-4">
            <article>
              <div class="card" style="width: auto;">
                <img class="card-img-top" src="/assets/img/news/thumpnail.png" alt="Card image cap">
                <div class="card-body">
                  <a href="">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </a>
                </div>
              </div>
            </article>

            <article>
              <div class="card" style="width: auto;">
                <img class="card-img-top" src="/assets/img/news/thumpnail.png" alt="Card image cap">
                <div class="card-body">
                  <a href="">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </a>
                </div>
              </div>
            </article>
          </div>
          <!-- end col -->

          <!-- btn nex -prev -->
          <!-- <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center mt-4">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
              </li>
              <li class="page-item"><a class="page-link active" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav> -->
          <!-- end btn nex prev -->

          <!-- row -->
        </div>    
        <!-- container -->
      </div>
    <!-- end content -->
    </div>
        
        
    <!--footer  -->
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
  

    <!-- Boostrap JS -->
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>