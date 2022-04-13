<?php

session_start();

$nik = $_SESSION['nik'];
$nama_lengkap = $_SESSION['npm'];
$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];
$lokasi = $_POST['lokasi'];
$suhu = $_POST['suhu'];
$id_catatan = rand(0,  100000);

$format = "\n$id_catatan|$nik|$nama_lengkap|$tanggal|$jam|$lokasi|$suhu";

$file =fopen('catatan.txt', 'a');
fwrite($file, $format);


fclose($file);

$_SESSION['success'] = 'Catatan Berhasil di tambahkan';
header('Location: user.php?url=catatan_perjalanan');
?>