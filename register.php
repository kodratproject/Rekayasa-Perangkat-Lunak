<?php
    require 'config/functions.php';

    if( isset($_POST["submit"])) {

        if( registrasi($_POST) > 0 && isset($_POST['term']) ) {
            echo "<script>
                    alert('Mohon Periksa Email Anda');

                  </script>";

            // header("location:index.php");
            
        } else {
            $error =true;
        }
    
    }
    

?>


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
  <link rel="stylesheet" href="assets/css/ss.css">

</head>

<body class="container-login">
<div class="container">

    <main class="regis bg-light pt-4 mb-5 rounded-2 mx-auto  px-4">
        <form class="row g-2" action="" method="post">
            <a href="index.php">
                <h1 class="fw-bold text-center text-dark">
                    InfaqKu
                </h1>
            </a> 
            <hr>
            <?php if(isset($error)) :?>
                  <p class="text-danger text-center"> Mohon Periksa kembali </p>
              <?php endif ?>
            <div class="col-sm-8">
                <div class="form-floating">
                    <input type="text" class="form-control" name="firstmail" id="firstemail" placeholder="Email">
                    <label for="firstemail" class="form-label" >Email</label>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-floating">
                    <input type="text" class="form-control"  name="lastmail" id="lastemail" placeholder="@">
                    <label for="lastemail" class="form-label">@</label>
                </div>
            </div>
            
            <div class="col-12">
                <div class="form-floating">

                    <input type="text" class="form-control"  name="name"id="name" placeholder="Nama Lengkap">
                    <label for="name" class="form-label" >Nama Lengkap</label>
                </div>
            </div>

            <div class="col-12">
                <div class="form-floating">
                    
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                    <label for="username" class="form-label" >Username</label>
                </div>
            </div>

            <div class="col-12">
                <div class="form-floating">
                    
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    <label for="password" class="form-label" >Password</label>
                </div>
            </div>
            <div class="col-12">
                <div class="form-floating">
                    
                    <input type="password" class="form-control" name="password2" id="password" placeholder="Confirm Password">
                    <label for="password2" class="form-label" >Confirm Password</label>
                </div>
            </div>
            <div class="col-12">
                <div class="form-floating">

                    <input type="tel" class="form-control" name="telpon" id="telpon" placeholder="Telpon">
                    <label for="Telpon" class="form-label" >Telpon</label>
                </div>
            </div>
            
            <div class="col-12">
                <div class="form-floating">
                    <input type="text" class="form-control" name="alamat"  id="alamat" placeholder="Alamat">
                    <label for="alamat" class="form-label">Alamat</label>
                </div>
            </div>
            <div class="col-6">
                
                <div class="form-check radio-box">
                    <input class="form-check-input mx-2" type="radio" name="kelamin" value="Laki - Laki" id="laki">
                    <label class="form-check-label" for="laki">
                        Male
                    </label>
                </div>
            </div>
            <div class="col-6">

                <div class="form-check radio-box">
                    <input class="form-check-input mx-2" type="radio" name="kelamin" value="Perempuan" id="perempuan">
                    <label class="form-check-label" for="perempuan">
                        Female
                    </label>
                </div>
            </div>
            
            <div class="col-12 mt-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="yes" id="flexCheckChecked" name="term">
                    <label class="form-check-label" for="flexCheckChecked">
                      Ya, saya setuju
                    </label>
               
                </div>

            </div>

            <div class="col-12">
              <button type="submit" name="submit"class="btn btn-primary w-100 bg-bluegra mt-4 mx-auto">Daftar</button>
            </div>
          </form>

          <span class="text-center">
            <p class="mt-3">Sudah punya akun? <a href="login.php"> Login</a></p>
        </span>
    </main>
</div>
    
    

    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    
</body>
    
</html>