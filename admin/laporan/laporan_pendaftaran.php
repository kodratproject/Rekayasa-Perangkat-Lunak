<?php
    session_start();
    require 'functions.php';

    // cek session login
    if(!isset($_SESSION["login"]) ) {
        header("Location: ../login.php");
        exit;
    }

    $id = $_SESSION['id_user'];
    $result = mysqli_query($conn, "SELECT id_user,nama,username,level FROM user WHERE id_user =$id");
    $row = mysqli_fetch_assoc($result);

    $level = cekLevel($row['level']);

    if(intval($row['level']) > 1){
        header("Location: ../User/dastboard.php");
        exit;
    }elseif (intval($row['level']) < 1) {
        header("Location: ../admin/dastboard.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <!-- Boostraps 4 css -->
    <link rel="stylesheet" href="../assets/css/admin.min.css">

    <!-- css custom -->
    <link rel="stylesheet" href="../assets/css/admin.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <!-- google material icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- DataTables -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> -->
    <link rel="stylesheet" href="../assets/plugins/datatable/dataTables.bootstrap4.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="../assets/plugins/datatable/dataTables.bootstrap4.min.css">
    <!-- css style -->
    <link rel="stylesheet" href="../assets/css/style.css">


</head>

<body>
    <div class="wrapper">
        <div class="body-overlay"></div>
         <!-- SIDEBAR -->

        <nav class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <h3><img src="../assets/img/avatar.png" alt="" class="img-fluid"><span>InfaqKu</sp an>
                </h3>
            </div>
            <ul class="list-unstyled components">
                <li class="sidebar-profile mb-3">
                    <a href="#">
                        <img src="../assets/img/avatar.png" alt="" class="img-fluid">
                        <span> <?= $row['username']; ?> (<b><?= $level ?></b>) </span>
                    </a>
                </li>
                <li class="">
                    <a href="dastboard.php" class="dastboard"><i class="material-icons ">dashboard</i><span>dastboard</span></a>
                </li>

                <li>
                    <a href="../index.php  "><i class="material-icons ">home</i><span>Home</span></a>
                </li>

                <?php
                    if($row['level'] == '1') :
                ?>

                <li class="">
                    <a href="add_artikel.php"><i class="material-icons">newspaper</i><span>Add Artikel</span></a>
                </li>

                <li>
                    <a href="add_keuangan.php"><i class="material-icons">newspaper</i><span>Add Keuangan</span></a>
                </li>

                <li class="">
                    <a href="#"><i class="material-icons">newspaper</i><span>Verifikasi</span></a>
                </li>

                <li class="dropdown active">
                    <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="material-icons ">people</i><span>Laporan</span></a>
                        <ul class="collapse list-unstyled menu bg-secondary" id="pageSubmenu2">
                        
                        <li>
                            <a href="#"><i class="material-icons">chevron_right</i>Verifikasi</a>
                        </li>
                    </ul>
                </li>

                <?php endif ?>

                <div class="small-screen navbar-display">
                    <li class="dropdown d-lg-none d--md-block d-xl-none d-sm-block">
                        <a href="#homesunmemu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <i class="material-icons ">notifications</i><span> 4 notification</span></a>
                        <ul class="collapse list-unstyled menu bg-secondary" id="homesunmemu1">
                            <li>
                                <a href="#">You have 5 new messages</a>
                            </li>
                            <li>
                                <a href="#">You're now friend with Mike</a>
                            </li>
                            <li>
                                <a href="#">Wish Mary on her birthday!</a>
                            </li>
                            <li>
                                <a href="#">5 warnings in Server Console</a>
                            </li>
                        </ul>

                    </li>

                    <li class="dropdown d-lg-none d--md-block d-xl-none d-sm-block">
                        <a href="#Setting" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <i class="material-icons ">settings</i><span>Setting</span></a>
                        <ul class="collapse list-unstyled menu bg-secondary" id="Setting">
                            <li>
                                <a href="#">
                                    <i class="material-icons ">edit</i><span> Edit Profile</span>
                                </a>

                            </li>
                            <li>
                                <a href="logup.php">
                                    <i class="material-icons text-danger"> logout</i><span>Logout</span>
                                </a>

                        </ul>
                    </li>


                </div>
            </ul>
        </nav>


        <!-- Page Content  -->
        <div id="content">
            <div class="top-navbar">
                <nav class="navbar navbar-expand-lg bg-light">
                    <div class="container-fluid ">

                        <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none ">
                            <span class="material-icons text-dark active">menu</span>
                        </button>

                        <button class="d-inline-block d-lg-none  more-button " type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="material-icons text-dark m-3">menu</span>
                        </button>

                        <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none"
                            id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="dropdown nav-item active">
                                    <a href="#" class="nav-link" data-toggle="dropdown">
                                        <span class="material-icons">notifications</span>
                                        <span class="notification">4</span>
                                    </a>
                                    <ul class="dropdown-menu bg-light">
                                        <li>
                                            <a href="#">You have 5 new messages</a>
                                        </li>
                                        <li>
                                            <a href="#">You're now friend with Mike</a>
                                        </li>
                                        <li>
                                            <a href="#">Wish Mary on her birthday!</a>
                                        </li>
                                        <li>
                                            <a href="#">5 warnings in Server Console</a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link active" href="#">
                                        <span class="material-icons">apps</span>
                                    </a>
                                </li>



                                <li class="dropdown nav-item active">
                                    <a href="#" class="nav-link" data-toggle="dropdown">
                                        <span class="material-icons">settings</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">
                                                <i class="material-icons ">edit</i><span> Edit Profile</span></a>


                                        </li>
                                        <li>
                                            <a href="logup.php">
                                                <i class="material-icons text-danger"> logout</i><span>Logout</span></a>

                                        </li>

                                    </ul>
                                </li>


                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

            <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mt-2">
            <div class="col-sm-6">
              <h3 class="m-0 text-dark">Laporan Verifikasi</h3>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#" class="text-dark">Home</a></li>
                <li class="breadcrumb-item active">Laporan</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->


    <div class="main-content">
    <div class="row">
            <div class="col-12">
                <div class="card">
                  <div class="card-header d-flex p-0">
                    <h5 class="card-title p-3">Data Laporan</h5>
            </div>

            <div class="col-12 mb-5 mt-5">
                <table id="example" class="table table-striped table-bordered text-center" style="width:100% ">
                <thead>
                    <tr>
                        <th>No_Verifikasi</th>
                        <th>id_user</th>
                        <th>Name</th>
                        <th>username</th>
                        <th>Email</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $tampil = mysqli_query($conn,"SELECT * FROM verifikasi");
                    while($data = mysqli_fetch_array($tampil)) :
                ?>
                
                    <tr>
                        <td><?= $data['no_verifikasi'];?></td>
                        <td><?= $data['id_user']; ?></td>
                        <td><?= $data['name'];?></td>
                        <td><?= $data['username'];?></td>
                        <td><?= $data['email'];?></td>
                        <td class="text-danger"><?= $data['date'];?></td>
                    </tr>

                <?php endwhile ?>

                </tbody>
            </table>
        </div>
    </div>
   
</div>



<footer class="footer mt-5">
    <div class="container-fluid">
        <div class="row">
                                <div class="col-md-12">
                                    <p class="copyright d-flex justify-content-end text-dark"> &copy 2022 by Kodrat
                                        <a href="#">Dastboard v1.1</a> Dastboard v 1.1
                                    </p>
                                </div>
                            </div>
                        </div>
                    </footer>

                </div>



            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="../assets/js/jquery-3.3.1.slim.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/admin.min.js"></script>
        <script src="../assets/js/jquery-3.3.1.min.js"></script>
        <script src="../assets/js/chart.js"></script>
        <script src="../assets/js/script.js"></script>


        <!-- DataTables -->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
       <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
       <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>


        <script type="text/javascript">
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                    $('#content').toggleClass('active');
                });

                $('.more-button,.body-overlay').on('click', function () {
                    $('#sidebar,.body-overlay').toggleClass('show-nav');
                });

                $('#example').DataTable({
                    scrollX: true,
                });

            });
       
      


        </script>


</body>

</html>