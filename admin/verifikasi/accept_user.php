<?php
    session_start();

    require '../../config/functions.php';
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query($conn, "SELECT * FROM pendaftaran WHERE id_pendaftaran =$id");
        $row = mysqli_fetch_assoc($result);

        verifikasi($row);    
        $user = $row['username'];

        $result2 = mysqli_query($conn, "SELECT id_user,nama,email,username  FROM user WHERE username='$user'");
        $row2 = mysqli_fetch_assoc($result2);

        
        arsipData($row2);

        hapus($id);
        header("Location: verifikasi.php");
        exit;
    }


?>