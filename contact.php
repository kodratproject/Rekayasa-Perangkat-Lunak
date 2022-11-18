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
              <a href="index.php" class="nav-link ">Home</a>
            </li>
            <li class="nav-item">
              <a href="about.php" class="nav-link ">About</a>
            </li>
            <li class="nav-item">
              <a href="news.php" class="nav-link">News</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link active-link linkpad ">Contact</a>
            </li>
          </ul>
          <button class="btn btn-light justify-content-end rounded-4">
            <a href="login.php" class="btn-bluesky">Log in</a>
          </button>
        </div>
      </nav>
      <!-- end navbar -->

      <!-- mobile only -->
      <nav class="mobile-nav navbar  bg-bluegra" aria-label="First navbar example">
        <div class="container-fluid mx-2">
          <a class="navbar-brand" href="index.php">
            <span class="h2 text-light">InfaqKu</span>
          </a>
          <button class="navbar-toggler bg-light btn-dark" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample01">
            <ul class="navbar-nav me-auto mb-2">
              <li class="nav-item">
                <a href="index.php" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="about.php" class="nav-link ">About</a>
              </li>
              <li class="nav-item">
                <a href="news.php" class="nav-link ">News</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link text-light">Contact</a>
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

      <div class="header-all header-contact text-light ">
        <span class="h1 fontSizeJudul">Contact Us</span>
        <hr class="w-25 mx-auto">
      </div>

    </header>

    <!-- Content -->
    <section class="content-contact mx8">
      <!-- row -->
      <div class="row bg-light text-center  rounded-2 ">
        <!-- col -->
        <div class=" col-md-6  p-2">
          <div class="embed-responsive embed-responsive-3by4 rounded-2">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63811.17146664036!2d103.49668925816485!3d-1.632853310304542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2588f48ba4d2f3%3A0x3595db7f5bb6e995!2sUniversitas%20Jambi!5e0!3m2!1sid!2ssg!4v1666403167418!5m2!1sid!2ssg"
              width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
        <!-- end col -->
        <!-- col -->
        <div class="col-md-6 p-4 ">
          <div class="alamat mt-5 m-5">
            <div class="h35 text-start">Alamat</div>
            <p>Jl. Jambi - Muara Bulian No.KM. 15,
              Mendalo Darat, Kec. Jambi Luar Kota,
              Kabupaten Muaro Jambi, Jambi</p>
            <div class="h35 text-start">Telepon</div>
            <p>+62 896-2755-9516 (Aldi Sukma Putra) <br>
              +62 814-1414-4185 (Kodrat Pamungkas)</p>
            <div class="h35 text-start">E-mail</div>
            <p>infaqku@infaqku.com <br>
              Help@infaqku.com</p>
          </div>
        </div>
        <!-- end col -->
      </div>
      <!-- end row -->
      <!-- row -->
      <form action="" method="post">
        <div class="row bg-light text-center  rounded-2 mt-4 p-5">

          <div class="col-md-12">
            <span class="h2 ">Kirimi Kami Pesan</span>
            <p class="mt-1">Hubungi kami dengan mengisi formulir <br>
              dan kami akan segera menghubungi Anda kembali</p>
          </div>

          <div class="col-md-6 ">
            <div class="form-group">
              <label for=""></label>
              <input type="text" id="firsname" class="form-control " placeholder="Firstname*">
            </div>
          </div>

          <div class="col-md-6  ">
            <div class="form-group">
              <label for=""></label>
              <input type="text" id="lastname" class="form-control" placeholder="Lastname*">
            </div>
          </div>

          <div class="col-md-6 ">
            <div class="form-group ">
              <label for=""></label>
              <input type="email" id="email" class="form-control " placeholder="Email**">
            </div>
          </div>

          <div class="col-md-6  ">
            <div class="form-group ">
              <label for=""></label>
              <input type="tel" id="phone" class="form-control" placeholder="Phone*">
            </div>
          </div>

          <div class="col-md-12 ">
            <div class="form-group ">
              <label for="exampleFormControlTextarea1" class="form-label"></label>
              <textarea class="form-control" id="messege" rows="3" placeholder="Messege*"></textarea>
            </div>
          </div>

          <div class="mb-3 mt-5">
            <button class="btn bg-bluegra" type="submit">Send Message</button>
          </div>
        </div>
      </form>
      <!-- end row -->
    </section>
    <!-- end Content -->

    <!-- footer  -->
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
  <!--en container  -->

  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>