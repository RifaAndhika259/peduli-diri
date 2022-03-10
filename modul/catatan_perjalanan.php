 <div class="card">
<div class="card-header">
<a href="user.php" class="btn btn-outline-secondary btn-icon-split">
        <span class="icon text-red-50 ">
            <i class="fa fa-arrow-left"></i>
            <span class="text" >Kembali</span>
        </span> 

</a>
</div>

<div class="card-body">

     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Data Perjalanan</h4>
		   
	   </div>
	  
     </div>
    <!-- End Breadcrumb-->

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> List Catatan Perjalanan</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-hover table-bordered">
              <thead>
                    <tr>
                        <th>NO</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Lokasi</th>
                        <th>Suhu Tubuh</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tfoot>
                <tr>
                        <th>NO</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Lokasi</th>
                        <th>Suhu Tubuh</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>

                <tbody>
        
                <?php
                $no = 1;
                $data = file('catatan.txt', FILE_IGNORE_NEW_LINES);
                @$user = $_SESSION['nik']|$SESSION['npm'];
                foreach($data as $value){
                    $pecah = explode("|", $value);
                    @$key = $pecah['1']."|".$pecah['2'];
                    if($key==$user){

                    ?>
                        <tr>

                        <td><?= $no++; ?></td>
                        <td><?= $pecah['3']; ?></td>
                        <td><?= $pecah['4']; ?></td>
                        <td><?= $pecah['5']; ?></td>
                        <td><?= $pecah['6']; ?></td>
                        <td> 
                          <a href="?url=edit_catatan&id_catatan=<?= $pecah['0']?>"  class="btn btn-outline-secondary">
                          <i class="icon-note"></i> Edit
                        </a>

                        <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')" 
                        href="hapus_catatan.php?&id_catatan=<?= $pecah['0']?>"  class="btn btn-outline-danger">
                          <i class="icon-trash"></i> Hapus
                        </a>

                        </td>

                        </tr>
               <?php } } 

                    ?>
                </tbody>


            </table>
            </div>
            </div>
         
        </div>
      </div><!-- End Row-->

    </div>

    <!-- Button trigger modal -->



  