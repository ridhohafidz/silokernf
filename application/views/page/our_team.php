<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/jam.css">
<div class="row mt-4">
  <div class="col-md-9">
    <div class="card">
     <div class="card-body">
	   <h2 style="text-align: center;"> <strong>  Mainstay Team Siloker </strong></h2>
        <p class="mb-5" style="text-align: center;"> <strong> Kelompok 4 - Teknik Informatika 07
		<img src="<?= base_url() ?>/assets/img/our_team.png" width="85%">		
        </strong> </p>
		<div class="row">
	 	  <div class="col-md-6 mb-2 mt-2">
       		<h4> <strong> Muhammad Ridho Hafidz </strong> </h4>
        	<h6> 0110219051</h6>
     	  </div>
     		<div class="col-md-6 mb-2 mt-2">
       			<h4> <strong> Sahrul Romadhon </strong> </h4>
       			<h6> 0110220154</h6>
     		</div>
    	</div>

         <div class="row">
         	<div class="col-md-6 mt-4">
         		<h4> <strong> Putri Ramadhan </strong> </h4>
         		<h6> 0110220030</h6>
         	</div>
			 <div class="col-md-6 mt-4">
          		<h4> <strong> Sheilla Inayatul Maula </strong> </h4>
          		<h6> 0110220227</h6>
          	</div>
        </div>

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
