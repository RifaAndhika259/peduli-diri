<center class=" mx-auto animated bounceInRight"><h2><b>Risiko COVID-19 Seluruh Provinsi Indonesia, <br> Tiap Kota </b></h2></center>
<hr>
<?php

$connected = @fopen("https://data.covid19.go.id/public/api/skor.json", 'r');
if($connected){

$api_url = 'https://data.covid19.go.id/public/api/skor.json';
$json_data = file_get_contents($api_url);
$response_data = json_decode($json_data);
$data = $response_data->data;
?>
<br>
<div class="row ">
	<?php foreach ($data as $item) { 	?>
		<div class="col-lg-4">
			<div class="card card-widget widget-user shadow-primary form-control-rounded mx-auto animated bounceInRight">
				<!-- Add the bg color to the header using any of the bg-* classes -->
				<div class="widget-user-header">
					<h5 class="widget-user-username text-center text-dark">
						<b><?= $item->prov ?></b>
					</h5>
				</div>
				<div class="card-footer">
					<div class="row">
						<div class="col-sm-6 border-left">
							<div class="description-block">
							<span class="description-text">Nama Kota</span>
							<br>
								<h6 class="description-header "><?= $item->kota ?></h6>
								
							</div>
							<!-- /.description-block -->
						</div>
						<!-- /.col -->
						<div class="col-sm-6 border-left">
							<div class="description-block">
							<span class="description-text text-primary">Risiko Covid-19</span>
							<br><hr>
								<h6 class="description-header text-danger "><?= $item->hasil ?></h6>
								
							</div>
							<!-- /.description-block -->
						</div>
						<!-- /.col -->
				
						<!-- /.col -->
					</div>
					<!-- /.row -->
				</div>
			</div>
		</div>

		<?php }  ?>
<?php } ?>

<div class="row">
	<?php if(!$connected){ 
		$_SESSION['server'] = "Kesalahan pada server, pastikan terkoneksi dengan internet";
		echo  '<br><br>';
		echo ' <center><h3>Kesalahan pada server! </h3></center>';
	}?>
</div>
	</div>
