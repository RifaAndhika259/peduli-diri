<?php
session_start();
if(empty($_SESSION['nik'])) { ?>
   
   <script type="text/javascript">
alert('Maaf Anda Belum Login.');
window.location.assign('../index.php');
</script>

<?php }
?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/rocker/color-version/pages-blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:59 GMT -->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>PEDULI DIRI</title>
  <!--favicon-->
  <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="../assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="../assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="../assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="../assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="../assets/css/app-style.css" rel="stylesheet"/>
  

  <!--Data Tables -->
  <link href="../assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
  <link href="../assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">

  
  
</head>

<body>

<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="">
       <img src="../assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">Peduli Diri</h5>
     </a>
	 </div>
	 <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header"></li>
      <li class="sidebar-header"></li>
      <li>
      <li>
        <a href="user.php" class="waves-effect">
          <i class="icon-home"></i> <span>Home</span> 
        </a>
      </li>

      <li class="sidebar-header"></li>
      <li>

      <li class="sidebar-header">Interface</li>
      <li>
      <li>
        <a href="?url=tulis_catatan" class="waves-effect">
          <i class="icon-note"></i> <span>Isi Data </span>
          
        </a>
  
      </li>
    
  <li class="sidebar-header"></li>
      <li>
    

      <li>
        <a href="?url=catatan_perjalanan" class="waves-effect">
        <i class="fa fa-file"></i>
          <span>Catatan Perjalanan</span> 
        </a>
  
      </li>

      <li class="sidebar-header"></li>
      <li>
    

      <li>
        <a href="../modul/logout.php" class="waves-effect">
        <i class="fa fa-power-off"></i>
          <span>Logout</span> 
        </a>
  
      </li>
    </ul>
	 
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top gradient-scooter">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <p> <h4>Aplikasi Catatan Perjalanan </h4></p>
  </ul>
     


</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
    <!-- Breadcrumb-->
  
    <div class=" mb-4 text-gray-800">

    <?php
          if(!empty(@$_GET['url'])) {

            switch (@$_GET['url']) {
              case 'tulis_catatan';
              include 'tulis_catatan.php';
                break;


              case 'catatan_perjalanan';
              include 'catatan_perjalanan.php';
                break;
              
              default:
                echo "Halaman Tidak Ditemukan ";
                break;
            }

          }else{
            echo "<br> <br>";
            echo "<center><h3>Selamat Datang Di Aplikasi Peduli Diri</h3></center>";
            echo "<br><br> Anda Login Sebagai :<br>";
            echo "<h4>".$_SESSION['npm']. "</h4>";

          }

    ?>


    </div>




     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
	
        </div>
      </div>

    </div>
    <!-- End container-fluid-->
    
   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2018 Rocker Admin
        </div>
      </div>
    </footer>
	<!--End footer-->
   
  </div><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/popper.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
	
  <!-- simplebar js -->
   <script src="../assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- waves effect js -->
  <script src="../assets/js/waves.js"></script>
  <!-- sidebar-menu js -->
  <script src="../assets/js/sidebar-menu.js"></script>
  <!-- Custom scripts -->
  <script src="../assets/js/app-script.js"></script>


  <script src="../assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
  <script src="../assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
  <script src="../assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
  <script src="../assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
  <script src="../assets/plugins/bootstrap-datatable/js/jszip.min.js"></script>
  <script src="../assets/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
  <script src="../assets/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
  <script src="../assets/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
  <script src="../assets/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
  <script src="../assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>

    <script>
     $(document).ready(function() {
      //Default data table
       $('#default-datatable').DataTable();


       var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
      } );
 
     table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
      
      } );

    </script>
  

  <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Am8lISurprAz4dcBbGgKuih2FzmamiVXBdP7rQdzhTxfpkFFtvOnyejVCSSPK6u9WcsNj8GrchwkcC0cuuN23MjWecopK9D18LKoyDfbiXPfrndpWGpPOH2fLRyh5tK5%2f2c9K0us8J%2bjf3vFsn4%2fTXFgzL766s1rvusNt%2f2awK9lOy4Vktosm3AYYGGLl5M3uaPFy1scuCQj%2f0TtP9KTGu%2baG8AY8xIwvJwZqBstW8mLUHXgBTl%2fCiejm4tW3R%2b8lXa%2bjlGl2mi3qy6h0ZR8W72goA0fM%2fheFCPwMRwWv3%2fgBJNpUwJ%2bH2t1mVHjs4ZpZ7goJxWRAK4PpOPCLgzKtOnJI%2fZInHhRwD94P7HZXLqHaKn2Dp3%2fdEJHkeaL4yuoeuu063ZBMPA0nAsB4sgvkCfWzi2EjFHA1gg77pOXVlnhhOP8kHZYxMQ4QoZOkHsqic6nVTUksRjQ3Mma4U0zDcidDMWZgPrAvo08lzOZJkkwlaTsMfMhGiEbCHIzyrFruRxowfltKRNMntpE19Ejg4%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from codervent.com/rocker/color-version/pages-blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:59 GMT -->
</html>
