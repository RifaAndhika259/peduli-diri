<div class="card shadow-primary form-control-rounded">
<div class="card-header form-control-rounded ">

</div>

<div class="card-body"></div>
<div class="row">
			<div class="col-lg-7 mx-auto">
			   <div class="card shadow-primary form-control-rounded mx-auto animated bounceInDown">
			     <div class="card-body">
				   <div class="card-title">Isi Catatan Perjalanan</div>
				   <hr>
				    <form action="proses_simpan_catatan.php" method="POST">
					 <div class="form-group">
					  <label for="">Pilih Tanggal</label>
					  <input type="text" name="tanggal" class="form-control form-control-rounded  mx-auto animated bounceInRight " id="tanggal" placeholder="Masukan Tanggal" required value="<?= date('d-M-y'); ?>" >
					 </div>

                     <div class="form-group">
					  <label for="">Pilih Jam</label>
					  <input type="time" name="jam" class="form-control form-control-rounded  mx-auto animated bounceInRight " id="jam" placeholder="Masukan Jam" required>
					 </div>

                     <div class="form-group">
					  <label for="">Pilih Lokasi</label>
					  <input type="text" name="lokasi" class="form-control form-control-rounded  mx-auto animated bounceInRight " id="lokasi" placeholder="Masukan Lokasi" required>
					 </div>

                     <div class="form-group">
					  <label for="">Suhu Tubuh
						 
					  </label>
					  <input type="number" step="any" max="45" min="20" autocomplete="off" name="suhu" required class=" suhu_tubuh form-control form-control-rounded  mx-auto animated bounceInRight " id="suhu" placeholder="Masukan Suhu" >
					 </div>
<br>

					 <div class="form-group">
					  <button type="submit" class="btn btn btn-outline-primary shadow-primary form-control-rounded  mx-auto animated bounceInRight px-5"><i class="fa fa-save"></i> Simpan</button>
                      <button type="reset" class="btn btn btn-outline-danger shadow-danger form-control-rounded  mx-auto animated bounceInRight px-5"><i class="fa fa-trash"></i> Batal</button>
					</div>
					</form>
					<br>
				 </div>
			   </div>
            <br><br>
            </div>