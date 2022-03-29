<?php

session_start();
$nik          = $_POST['nik'];

$nama_lengkap =  $_POST['npm'];

if(strlen($nik) != 16){
    $_SESSION['error'] = 'NIK harus 16 angka';
    header('Location:register.php');
    die;
}


$data = file("config.txt", FILE_IGNORE_NEW_LINES);

foreach( $data as $value){

    $cracked = explode("|" , $value);
    
}

if(in_array($nik, $cracked)){
    $_SESSION['error'] = 'Nik sudah di gunakan';
    header('Location:register.php');
    die;
} 
else { 
        $format ="\n$nik|$nama_lengkap";
 
        $file = fopen('config.txt', 'a');    
        fwrite($file , $format);
       
        
        fclose($file);
        $_SESSION['success'] = 'Pendaftaran berhasil, Silahkan Login';
        header('Location:../index.php');

}
?>
