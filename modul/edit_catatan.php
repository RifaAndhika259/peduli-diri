<div class="card">
<div class="card-header">
<a href="?url=catatan_perjalanan" class="btn btn-secondary btn-icon-split">
        <span class="icon text-red-50 shadow-secondary">
            <i class="fa fa-arrow-left"></i>
            <span class="text" >Batal</span>
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
				   <?php 
				   $data = file('catatan.txt', FILE_IGNORE_NEW_LINES);
				   $id_catatan = $_GET['id_catatan'];
				   foreach($data as $value) {
					$pecah = explode('|', $value);
					if($pecah['0']==$id_catatan){
						?>
				    <form action="simpan_edit_catatan.php" method="POST">
						<input type="hidden" name="id_catatan" value="<?= $pecah['0'] ?>">
					 <div class="form-group">
					  <label for="">Pilih Tanggal</label>
					  <input value="<?= $pecah['3'] ?>" type="text" name="tanggal" class="form-control" id="tanggal" placeholder="Masukan Tanggal" required value="<?= date('d-M-y'); ?>" >
					 </div>

                     <div class="form-group">
					  <label for="">Pilih Jam</label>
					  <input value="<?= $pecah['4'] ?>" type="time" name="jam" class="form-control" id="jam" placeholder="Masukan Jam" required>
					 </div>

                     <div class="form-group">
					  <label for="">Pilih Lokasi</label>
					  <input value="<?= $pecah['5'] ?>" type="text" name="lokasi" class="form-control" id="lokasi" placeholder="Masukan Lokasi" required>
					 </div>

                     <div class="form-group">
					  <label for="">Suhu Tubuh</label>
					  <input value="<?= $pecah['6'] ?>" type="text" name="suhu" class="form-control" id="suhu" placeholder="Masukan Suhu" required>
					 </div>


					 <div class="form-group">
					  <button type="submit" class="btn btn-primary shadow-primary px-5"><i class="fa fa-save"></i> Simpan</button>
					</div>
					</form>

					<?php }} ?>
				 </div>
			   </div>
            
            </div>