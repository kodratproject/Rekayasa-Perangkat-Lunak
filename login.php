<?php 
session_start();
require 'config/functions.php';

// // cek cookie
if( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
  $id = $_COOKIE['id'];
	$key = $_COOKIE['key'];

	// ambil username berdasarkan id
	$result = mysqli_query($conn, "SELECT username FROM user WHERE id_user = $id");
	$row = mysqli_fetch_assoc($result);

	// cek cookie dan username
	if( $key === hash('sha256', $row['username']) ) {
		$_SESSION['login'] = true;

    
	}


}

if( isset($_SESSION["login"]) ) {
   $level = cekLevel($row['level']);

    if(intval($row['level']) > 1){
        header("Location: user/dastboard.php");
        exit;
    }else {
      header("Location: admin/dastboard.php");
      exit;
    }
}


if( isset($_POST["submit"]) ) {

	$username = $_POST["username"];
	$password = $_POST["password"];
  $hash = hash('sha256',$password);

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
	// cek username
  if( mysqli_num_rows($result) === 1 ) {
    $row = mysqli_fetch_assoc($result);
    // cek password
		if( $hash === $row["password"] ) {
			// set session
			$_SESSION["login"] = true;
	  	$_SESSION['id_user'] = $row['id_user'];


			// cek remember me
			if( isset($_POST['remember']) ) {
				// buat cookie
				setcookie('id', $row['id'], time()+60);
				setcookie('key', hash('sha256', $row['username']), time()+60);
			}
      
      if(intval($row['level']) <= 1){
        header("Location: admin/dastboard.php");
        exit;
      }       
      else{
        header("Location: user/dastboard.php");
        exit;        
      }

		}
	}

	$error = true;

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
    <div class="login bg-light rounded-2 " >
      <form action="" method="post">
        <div class="row pt-2 ">
          <div class="col-12 col-md-12 col-sm-12 pt-3 ">
            <a href="index.php">
              <h1 class="fw-bold text-center text-dark">
                InfaqKu
              </h1>
            </a> 
            <hr>     
          </div>
        </div>
        <div class="row m-3">  
          <div class="col-12 col-md-12 col-sm-12 form-floating pb-4">
            <input type="text" class="form-control" id="username" name="username" placeholder="name@example.com">
            <label for="username"> Email or Username</label>
          </div>
          
          <div class="col-12 col-md-12 col-sm-12 form-floating pb-4">
            <input type="password" class="form-control" id="password" name="password" placeholder=" Password">
            <label for="password" > Password</label>
          </div>

          <div class="col-12 col-md-12 col-sm-12  pb-4">
            <a href="" class=" text-dark fw-bold">Lupa Password?</a>
          </div>        
          
          <div class="col-12 text-center">
            <button type="submit" class="btn bg-bluegra w-100 p-2" name="submit" >Login</button>
          </div>
        </div>
      </form>
      
      <?php if(isset($error)) :?>
                  <p class="text-danger text-center"> Username & Password Salah</p>
              <?php endif ?>    
        <span class="text-center">
            <p class="mt-3">Belum punya akun? <a href="register.php"> Daftar</a></p>
        </span>
    </div>
  </div>
       
  
  


    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    
</body>
    
</html>