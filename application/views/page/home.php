<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/jam.css">
<div class="row mt-4">
	<div class="col-md-9">
		<div class="card">
			<div class="card-body">
				<img src="<?= base_url() ?>/assets/img/gm1.png" width="85%">
				<h4 class="mt-3"> <strong> Tentang Perusahaan </strong> </h4>
				<strong>SILOKERNF </strong> Merupakan salah satu platform pencari lowongan pekerjaan yang di
				tujukan kepada para pencari kerja dan fresh graduete yang mungkin sedang membutuhkan pekerjaan sesuai dengan
            	skill serta pengalaman kerja yang pernah dilakukan sebelumnya. 	
				Kami berperan sebagai fasilitator pencocokan dan komunikasi lapangan kerja antara pencari kerja dan
            	perusahaan. <br><br>
				Dengan pemahaman dan wawasan yang kami miliki di setiap negara, serta kemampuan kami dalam
            	penguasaan teknologi, kami menyediakan lowongan dan kesempatan yang terbaik untuk para pencari kerja,
            	dan di saat yang bersamaan memberikan calon-calon karyawan terbaik untuk perusahaan yang menjadi klien kami.
            	Ketika Anda bergabung dengan SILOKERNF, kami sebagai penyedia informasi karier yang terpercaya akan
            	memberikan solusi terbaik untuk pencarian kerja dan tenaga kerja.
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
