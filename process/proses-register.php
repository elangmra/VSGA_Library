<?php
session_start();
include "../connection.php";

// Deklarasi variabel dari input
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$password = md5($_POST['password']);

//  periksa username

$query = "SELECT * FROM petugas WHERE username = '$username'";
$hasil = mysqli_query($db, $query);
$data_user = mysqli_fetch_assoc($hasil);


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


if ($data_user != null) {
    $error[] = 'This Username Already Taken';
    echo "<script>
    alert('This Username Already Taken');
    window.location.href='../register.php';
    </script>";
} else {
        $queryRegister = " INSERT INTO `petugas` ( `petugas_nama`, `username`, `password`) VALUES
           ( '$fullname', '$username', '$password')";
        if(mysqli_query($db,$queryRegister)){
            header("Location:../register-success.php");
    
        }else{
            echo "error". mysqli_error($db);
        }

}
