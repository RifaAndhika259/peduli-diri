<?php

session_start();

$nik = $_SESSION['nik'];
$nama_lengkap = $_SESSION['npm'];
$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];
$lokasi = $_POST['lokasi'];
$suhu = $_POST['suhu'];
$id_catatan = $_POST['id_catatan'];

$format = "$id_catatan|$nik|$nama_lengkap|$tanggal|$jam|$lokasi|$suhu";

    $no = 0;
    $data = file('catatan.txt', FILE_IGNORE_NEW_LINES);
    foreach($data as $value){
        $no++;
        $cracked =explode('|', $value);
        if($cracked['0']==$id_catatan){
            $line = $no-1;
        }
    }

    $data[$line] = $format;
    $data = implode("\n", $data);
    file_put_contents('catatan.txt', $data);


    $_SESSION['success'] = 'Catatan Berhasil diubah';
header('Location: user.php?url=catatan_perjalanan');

?>
