<div class="card">
<div class="card-header">
<a href="user.php" class="btn btn-primary btn-icon-split">
        <span class="icon text-red-50 shadow-primary">
            <i class="fa fa-arrow-left"></i>
            <span class="text" >Kembali</span>
        </span> 

</a>
</div>

<div class="card-body"></div>

    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Data Tables</h4>

	   </div>

     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i>  Data Table Example</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Lokasi</th>
                        <th>Suhu Tubuh</th>
                    </tr>
                </thead>

                <tfoot>
                <tr>
                        <th>NO</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Lokasi</th>
                        <th>Suhu Tubuh</th>
                    </tr>
                </tfoot>

                <tbody>
        
                <?php
                $no = 1;
                $data = file('catatan.txt', FILE_IGNORE_NEW_LINES);
                @$user = $_SESSION['nik']|$SESSION['npm'];
                foreach($data as $value){
                    $pecah = explode("|", $value);
                    @$key = $pecah['0']."|".$pecah['1'];
                    if($key==$user){

                    ?>
                        <tr>

                        <td><?= $no++; ?></td>
                        <td><?= $pecah['2']; ?></td>
                        <td><?= $pecah['3']; ?></td>
                        <td><?= $pecah['4']; ?></td>
                        <td><?= $pecah['5']; ?></td>

                        </tr>
               <?php } } 

                    ?>
                </tbody>
        
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->

    </div>
    <!-- End container-fluid-->
    

 </div>