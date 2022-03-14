<?php

$nik          = $_POST['nik'];

$nama_lengkap =  $_POST['npm'];

//cek apakah nik sudah tedaftar atau belum


$data = file("config.txt", FILE_IGNORE_NEW_LINES);

foreach( $data as $value){

    $pecah = explode("|" , $value);
    // if($nik==$pecah['0']) {
    //     $cek = true;
    // }
}

if(in_array($nik, $pecah)){//jika nik sudah terpkai ?>
<script type="text/javascript">
alert('Maaf data NIK sudah digunakan.');
window.location.assign('register.php');
</script>


<?php } else { //jika data tidak ditemukan
        //penyimpanan ke txt
        $format ="\n$nik|$nama_lengkap";
 
        //buka file config.txt
        $file = fopen('config.txt', 'a');    
        fwrite($file , $format);
       
        //tutup file
        fclose($file);

        ?>

<script type="text/javascript">

alert('Pendaftaran Berhasil Dilakukan.');
window.location.assign('../index.php')

</script>

<?php

}
