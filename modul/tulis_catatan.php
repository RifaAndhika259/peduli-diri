<div class="card">
<div class="card-header">
<a href="user.php" class="btn btn-outline-secondary btn-icon-split">
        <span class="icon text-red-50">
            <i class="fa fa-arrow-left"></i>
            <span class="text" >Kembali</span>
        </span> 

</a>
</div>
<div class="card-body"></div>
<div class="row">
			<div class="col-lg-7 mx-auto">
			   <div class="card">
			     <div class="card-body">
				   <div class="card-title">Isi Catatan Perjalanan</div>
				   <hr>
				    <form action="simpan_catatan.php" method="POST">
					 <div class="form-group">
					  <label for="">Pilih Tanggal</label>
					  <input type="text" name="tanggal" class="form-control" id="tanggal" placeholder="Masukan Tanggal" required value="<?= date('d-M-y'); ?>" >
					 </div>

                     <div class="form-group">
					  <label for="">Pilih Jam</label>
					  <input type="time" name="jam" class="form-control" id="jam" placeholder="Masukan Jam" required>
					 </div>

                     <div class="form-group">
					  <label for="">Pilih Lokasi</label>
					  <input type="text" name="lokasi" class="form-control" id="lokasi" placeholder="Masukan Lokasi" required>
					 </div>

                     <div class="form-group">
					  <label for="">Suhu Tubuh</label>
					  <input type="text" name="suhu" class="form-control" id="suhu" placeholder="Masukan Suhu" required>
					 </div>


					 <div class="form-group">
					  <button type="submit" class="btn btn-primary shadow-primary px-5"><i class="fa fa-save"></i> Simpan</button>
                      <a href="user.php?url=tulis_catatan"><button type="button" class="btn btn-danger shadow-danger px-5"><i class="fa fa-trash"></i> Kosongkan</button></a>
					</div>
					</form>
				 </div>
			   </div>
            
            </div>