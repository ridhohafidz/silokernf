<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/jam.css">
<div class="row mt-4">
  <div class="col-md-9">
    <div class="card">
     <div class="card-body">
	   <h2 style="text-align: center;">Mainstay Team Siloker</h2>
        <p class="mb-5" style="text-align: center;"> <strong> Kelompok 4 - Teknik Informatika 07
        </strong> </p>
	
		<div class="row">
	 	  <div class="col-md-6 mb-2 mt-2">
	  		<img src="https://avatars3.githubusercontent.com/u/59719959?s=400&u=7ad9bd21fda643b2a015342e49ac1723bf81f5bc&v=4" width="180" align="left" class="rounded-image">
       		<h6> <strong> Muhammad Ridho Hafidz </strong> </h6>
        	<p> 0110219051</p>
     	  </div>
     		<div class="col-md-6 mb-2 mt-2">
      			<img src="https://avatars3.githubusercontent.com/u/72736186?s=460&u=2ef1774a3f728abfb54be95d95a0e3a70365b180&v=4" width="180" align="left" class="rounded-image">
       			<h6> <strong> Sahrul Romadhon </strong> </h6>
       			<p> 0110220154</p>
     		</div>
    	</div>

         <div class="row">
         	<div class="col-md-6 mt-4">
         		<img src="https://avatars2.githubusercontent.com/u/73012563?s=460&u=93146633159754704ce253e9bd584fa6cd2a8bdf&v=4" width="180" align="left" class="rounded-image">
         		<h6> <strong> Putri Ramadhan </strong> </h6>
         		<p> 0110220030</p>
         	</div>
			 <div class="col-md-6 mt-4">
          		<img src="https://avatars3.githubusercontent.com/u/73302271?s=460&u=ee64234c31571754198e1b3aecf972e10e1ebd49&v=4" width="180" align="left" class="rounded-image">
          		<h6> <strong> Sheilla Inayatul Maula </strong> </h6>
          		<p> 0110220227</p>
          	</div>
        </div>

	 </div>
	</div>
  </div>
	<div class="col-md-3">
		<div class="card">
			<div class="card-header">Menu Navigasi</div>

			<ul class="list-group list-group-flush">
			    <li class="list-group-item"><a href="<?= base_url('page') ?>">Sejarah Perusahaan</a></li>
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
