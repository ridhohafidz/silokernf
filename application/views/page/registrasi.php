<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/jam.css">
<div class="row mt-4">
	<div class="col-md-9">
		<div class="card">
			<div class="card-header">Registrasi </div>
			<form action="<?= base_url('pelamar/registrasi') ?>" method="post" enctype="multipart/form-data"> 
			<div class="card-body">
				 
				  <div class="form-group row">
				    <label class="col-sm-3 col-form-label">Username</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" placeholder="Username" name="username" required>
				    </div>
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-3 col-form-label">Password</label>
				    <div class="col-sm-9">
				      <input type="password" class="form-control" placeholder="Password" name="password" required>
				    </div>
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-3 col-form-label">Nama lengkap</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" placeholder="Nama lengkap" name="nama" required>
				    </div>
				  </div>
				  <div class="form-group row">
					<label class="col-sm-3 col-form-label">Tanggal lahir</label>
				    <div class="col-sm-9">
				      <input type="date" class="form-control" name="tgl_lahir" required>
				    </div>
				  </div>
				  <div class="form-group row">
				  	<label class="col-sm-3 col-form-label">Agama</label>
				  	<div class="col-sm-9">
				  		<select class="form-control" name="agama">
				  			<option value="islam">Islam</option>
				  			<option value="kristen">Kristen</option>
				  			<option value="hindu">Hindu</option>
				  		</select>
				  	</div>
				  </div>
				  <div class="form-group row">
					<label class="col-sm-3 col-form-label">Kewarganegaraan</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" placeholder="Kewarganegaraan" name="kewarganegaraan" required>
				    </div>
				  </div>
				  <div class="form-group row">
				  	<label class="col-sm-3 col-form-label">Jenjang pendidikan</label>
				  	<div class="col-sm-9">
				  		<select class="form-control" name="jenjang_pendidikan">
				  			<option value="sd">SD</option>
				  			<option value="smp">SMP</option>
				  			<option value="smak">SMA/SMK</option>
				  			<option value="sarjana">Sarjana</option>
				  		</select>
				  	</div>
				  </div>
				  <div class="form-group row">
					<label class="col-sm-3 col-form-label">Pas foto ijazah</label>
				    <div class="col-sm-9">
				      <input type="file" class="form-control" placeholder="foto_ijazah" name="foto_ijazah">
				    </div>
				  </div>
				  <div class="form-group row">
					<label class="col-sm-3 col-form-label">Umur</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" placeholder="Umur" name="umur" required>
				    </div>
				  </div>
				  <div class="form-group row">
					<label class="col-sm-3 col-form-label">Status</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" placeholder="Status" name="status" required>
				    </div>
				  </div>
				  <div class="form-group row">
				  	<label class="col-sm-3 col-form-label">Jenis kelamin</label>
				  	<div class="col-sm-9">
				  		<select class="form-control" name="jk">
				  			<option value="Laki-laki">Laki laki</option>
				  			<option value="Perempuan">Perempuan</option>
				  		</select>
				  	</div>
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-3 col-form-label">Alamat lengkap</label>
				    <div class="col-sm-9">
				      <textarea class="form-control" placeholder="Alamat" name="alamat"></textarea>
				    </div>
				  </div>
				  <div class="form-group row">
					<label class="col-sm-3 col-form-label">No HP</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" placeholder="No Hp" name="no_hp">
				    </div>
				  </div>
				  <div class="form-group row">
					<label class="col-sm-3 col-form-label">Pas foto</label>
				    <div class="col-sm-9">
				      <input type="file" class="form-control" name="foto_pelamar">
				    </div>
				  </div>
			</div>
			<div class="card-footer">
				<button class="btn btn-dark">Registrasi</button>
			</div>
			</form>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card">
			<div class="card-header text-center">Menu Navigasi</div>
			<ul class="list-group list-group-flush">
			    <li class="list-group-item"><a href="<?= base_url('page/login') ?>">Login Pelamar</a></li>
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