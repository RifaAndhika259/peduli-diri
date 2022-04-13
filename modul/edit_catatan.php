

<div class="card-body "></div>
<div class="row">
			<div class="col-lg-7 mx-auto">
			   <div class="card shadow-primary mx-auto animated bounceInDown form-control-rounded">
			     <div class="card-body shadow-primary form-control-rounded">
				   <div class="card-title"><b>Edit Catatan Perjalanan</b></div>
				   <hr>
				   <?php 
				   $data = file('catatan.txt', FILE_IGNORE_NEW_LINES);
				   $id_catatan = $_GET['id_catatan'];
				   foreach($data as $value) {
					$cracked = explode('|', $value);
					if($cracked['0']==$id_catatan){
						?>
				    <form action="proses_simpan_edit_catatan.php" method="POST">
						<input type="hidden" name="id_catatan" value="<?= $cracked['0'] ?>">
					 <div class="form-group">
					  <label for="">Pilih Tanggal</label>
					  <input value="<?= $cracked['3'] ?>" type="date" name="tanggal" class="form-control form-control-rounded  mx-auto animated bounceInRight" id="tanggal" placeholder="Masukan Tanggal" required value="<?= date('d/M/y'); ?>" >
					 </div>

                     <div class="form-group">
					  <label for="">Pilih Jam</label>
					  <input value="<?= $cracked['4'] ?>" type="time" name="jam" class="form-control form-control-rounded  mx-auto animated bounceInRight" id="jam" placeholder="Masukan Jam" required>
					 </div>

                     <div class="form-group">
					  <label for="">Pilih Lokasi</label>
					  <input value="<?= $cracked['5'] ?>" type="text" name="lokasi" class="form-control form-control-rounded  mx-auto animated bounceInRight" id="lokasi" placeholder="Masukan Lokasi" required>
					 </div>

                     <div class="form-group">
					  <label for="">Suhu Tubuh</label>
					  <input value="<?= $cracked['6'] ?>"type="number" step="any" max="45" min="20" name="suhu" class="suhu_tubuh form-control form-control-rounded  mx-auto animated bounceInRight" id="suhu" placeholder="Masukan Suhu">
					 </div>

<br>
					 <div class="form-group">
					  <button type="submit" class="btn btn-outline-primary shadow-primary form-control-rounded  mx-auto animated bounceInRight px-5 "><i class="fa fa-save"></i> Simpan</button>
					  <a href="user.php?url=catatan_perjalanan"><button type="button" class="btn btn-outline-danger shadow-danger form-control-rounded  mx-auto animated bounceInRight px-5 "><i class="fa fa-trash"></i> Batal</button></a>
					</div>
					</form>

					<?php }} ?>


					
					</div></div>