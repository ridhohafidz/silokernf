<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/jam.css">
<div class="row mt-4">
	<div class="col-md-9">
		<div class="card">
			<div class="card-body">
            <h2 class="mb-3" style="text-align: center;"> <strong> Visi & Misi </strong></h2>
			<img src=" <?= base_url() ?>/assets/img/iconvisimisi.png" width="75%">			
			<br>
				<h4> <strong>Visi</strong> </h4>
				Visi kami adalah menghubungkan bisnis dengan bakat dan meningkatkan taraf hidup melalui karier yang lebih baik.
				<br><br>
				<h4> <strong>Misi</strong> </h4>
				<li>Mengembangkan Sumber Daya Manusia yang handal dan berdayasaing</li>
				<li>Menyediakan Layanan bagi kandidat untuk mencari kerja</li>
				<li>Menyediakan Layanan bagi perusahaan termasuk Usaha Kecil Menengah / Perorangan mendapatkan kandidat karyawan potensial</li>								
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card">
			<div class="card-header">Menu Navigasi</div>

			<ul class="list-group list-group-flush">
			    <li class="list-group-item"><a href="<?= base_url('page') ?>">Tentang Perusahaan</a></li>
			    <li class="list-group-item"><a href="<?= base_url('page/visi_misi') ?>">Visi & Misi </a></li>
			    <li class="list-group-item"><a href="<?= base_url('page/partner') ?>">Partner Bisnis</a></li>
			    <li class="list-group-item"><a href="<?= base_url('page/our_team') ?>">Our Team</a></li>				
			</ul>
		</div>
		<div class="card mt-4">
			<div class="card-header">Share</div>
			<div class="card-body">
				<?php
					$month= date ("m");
					$year=date("Y");
					$day=date("d");
					$endDate=date("t",mktime(0,0,0,$month,$day,$year));
					echo "Today : ".date("F, d Y ",mktime(0,0,0,$month,$day,$year));
				?>
			</div>
			<div class="card-footer">
				<div class="jam-digital">
					<p id="jam" class="badge badge-dark p-1"></p>
					<p id="menit" class="badge badge-dark p-1"></p>
					<p id="detik" class="badge badge-dark p-1"></p>
				</div>
			</div>
		</div>
	</div>
</div>
