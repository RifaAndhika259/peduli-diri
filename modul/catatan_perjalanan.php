 <div class="card shadow-primary form-control-rounded">
<div class="card-header form-control-rounded ">

</div>

<div class="card-body animated bounceInRight">

     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Data Perjalanan</h4>
		   
	   </div>
	  
     </div>
    <!-- End Breadcrumb-->

      <div class="row ">
        <div class="col-lg-12">
          <div class="card form-control-rounded shadow-primary mx-auto animated bounceInDown">
            <div class="card-header form-control-rounded"><i class="fa fa-table"></i><b> List Catatan Perjalanan</b></div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-hover table-bordered shadow-primary form-control-rounded ">
              <thead> 
                    <tr>
                        <th><b> NO</th>
                        <th><b> Tanggal</th>
                        <th><b> Jam</th>
                        <th><b> Lokasi</th>
                        <th><b> Suhu Tubuh</th>
                        <th><center><b> Aksi </center></th>
                    </tr>
                </thead>

                <tbody>
        
                <?php
                $no = 1;
                $data = file('catatan.txt', FILE_IGNORE_NEW_LINES);
                @$user = $_SESSION['nik']|$SESSION['npm'];
                foreach($data as $value){
                    $cracked = explode("|", $value);
                    @$key = $cracked['1']."|".$cracked['2'];
                    if($key==$user){

                    ?>
                        <tr>

                        <td><b><?= $no++; ?></td>
                        <td><b><?= $cracked['3']; ?></td>
                        <td><b><?= $cracked['4']; ?></td>
                        <td><b><?= $cracked['5']; ?></td>
                        <td><b><?= $cracked['6']; ?> °C</td>
                        <td> <center>
                          <a href="?url=edit_catatan&id_catatan=<?= $cracked['0']?>"  class="btn btn-outline-primary shadow-primary form-control-rounded  mx-auto animated bounceInRight">
                          <i class="icon-note"></i> Edit
                        </a>

                        <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')" 
                        href="proses_hapus_catatan.php?&id_catatan=<?= $cracked['0']?>"  class="btn btn-outline-danger shadow-danger form-control-rounded  mx-auto animated bounceInRight">
                          <i class="icon-trash"></i> Hapus
                        </a>
                        </center>
                        </td>

                        </tr>
               <?php } } 

                    ?>
                </tbody>


            </table>
            </div>
            </div>
         <br><br><br>
        </div>
      
      </div><!-- End Row-->

    </div>
    

    <!-- Button trigger modal -->



  