<?php
session_start();
$nik            = $_POST['nik'];

$nama_lengkap   = $_POST['npm'];

$format = "$nik|$nama_lengkap";
$file = file('config.txt', FILE_IGNORE_NEW_LINES);
if(in_array($format, $file)) { //jika data terdaftar/ada
    
    $_SESSION['nik'] = $nik;
    $_SESSION['npm'] = $nama_lengkap;

    header("Location:user.php");
}else{ //jika data tidak ada ?>



<?php
   $_SESSION['error'] = 'Maaf Kombinasi NIK dan Nama Salah';
   header('Location:../index.php');
}