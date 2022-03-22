<?php

session_start();
$nik          = $_POST['nik'];

$nama_lengkap =  $_POST['npm'];

if(strlen($nik) != 16){
    $_SESSION['error'] = 'NIK harus 16 angka';
    header('Location:register.php');
    die;
}

//cek apakah nik sudah tedaftar atau belum


$data = file("config.txt", FILE_IGNORE_NEW_LINES);

foreach( $data as $value){

    $pecah = explode("|" , $value);
    // if($nik==$pecah['0']) {
    //     $cek = true;
    // }
}

if(in_array($nik, $pecah)){//jika nik sudah terpkai
    $_SESSION['error'] = 'Nik sudah di gunakan';
    header('Location:register.php');
    die;
} 
else { //jika data tidak ditemukan
        //penyimpanan ke txt
        $format ="\n$nik|$nama_lengkap";
 
        //buka file config.txt
        $file = fopen('config.txt', 'a');    
        fwrite($file , $format);
       
        //tutup file
        fclose($file);
        $_SESSION['success'] = 'Pendaftaran berhasil, Silahkan Login';
        header('Location:../index.php');

}
?>
