<?php
    session_start();

    require '../../config/functions.php';
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    
        hapus($id);

        header("Location: verifikasi.php");
        exit;
    }


?>