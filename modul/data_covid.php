<?php

$api_url = 'https://data.covid19.go.id/public/api/prov.json';
$json_data = file_get_contents($api_url);
$response_data = json_decode($json_data);
$data = $response_data->list_data;
?>
<center><h2><b>DATA COVID-19 TIAP PROVINSI</b></h2></center>

<br>
<div class="row">
	<?php foreach ($data as $item) { 	?>
		<div class="col-lg-4">
			<div class="card card-widget widget-user shadow-primary form-control-rounded mx-auto animated bounceInRight">
				<!-- Add the bg color to the header using any of the bg-* classes -->
				<div class="widget-user-header">
					<h5 class="widget-user-username text-center text-dark">
						<b><?= $item->key ?></b>
					</h5>
				</div>
				<div class="card-footer">
					<div class="row">
						<div class="col-sm-4 border-right">
							<div class="description-block">
								<h5 class="description-header"><?= $item->jumlah_kasus ?></h5>
								<span class="description-text">Jumlah kasus</span>
							</div>
							<!-- /.description-block -->
						</div>
						<!-- /.col -->
						<div class="col-sm-4 border-right">
							<div class="description-block">
								<h5 class="description-header"><?= $item->jumlah_sembuh ?></h5>
								<span class="description-text">Jumlah sembuh</span>
							</div>
							<!-- /.description-block -->
						</div>
						<!-- /.col -->
						<div class="col-sm-4">
							<div class="description-block">
								<h5 class="description-header"><?= $item->jumlah_dirawat ?></h5>
								<span class="description-text">Jumlah dirawat</span>
							</div>
							<!-- /.description-block -->
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->
				</div>
			</div>
		</div>
	<?php }  ?>
</div>