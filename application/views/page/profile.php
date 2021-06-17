<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/jam.css">
<?= $this->session->flashdata('message'); ?>
<div class="row mt-4">
	<div class="col-md-9">
		<div class="card">
			<div class="card-header">UPDATE DATA PELAMAR </div>
			<form action="<?= base_url('pelamar/update_profile') ?>" method="post" enctype="multipart/form-data"> 
			<div class="card-body">
				  <div class="form-group row">
				    <label class="col-sm-3 col-form-label">Nama lengkap</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" placeholder="Nama lengkap" name="nama" required value="<?= $profile->nama_lengkap ?>">
				    </div>
				  </div>
				  <div class="form-group row">
					<label class="col-sm-3 col-form-label">Tanggal lahir</label>
				    <div class="col-sm-9">
				      <input type="date" class="form-control" name="tgl_lahir" required value="<?= $profile->tgl_lahir ?>">
				    </div>
				  </div>
				  <div class="form-group row">
				  	<label class="col-sm-3 col-form-label">Agama</label>
				  	<div class="col-sm-9">
				  		<select class="form-control" name="agama">
				  			<option value="islam" <?= ($profile->agama == 'islam' ) ? 'selected' : '' ?>>Islam</option>
				  			<option value="kristen" <?= ($profile->agama == 'kristen' ) ? 'selected' : '' ?>>Kristen</option>
				  			<option value="hindu" <?= ($profile->agama == 'hindu' ) ? 'selected' : '' ?>>Hindu</option>
				  		</select>
				  	</div>
				  </div>
				  <div class="form-group row">
					<label class="col-sm-3 col-form-label">Kewarganegaraan</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" placeholder="Kewarganegaraan" name="kewarganegaraan" required value="<?= $profile->kewarganegaraan ?>">
				    </div>
				  </div>
				  <div class="form-group row">
				  	<label class="col-sm-3 col-form-label">Jenjang pendidikan</label>
				  	<div class="col-sm-9">
				  		<select class="form-control" name="jenjang_pendidikan">
				  			<option value="sd" <?= ($profile->jenjang_pendidikan == 'sd' ) ? 'selected' : '' ?>>SD</option>
				  			<option value="smp" <?= ($profile->jenjang_pendidikan == 'smp' ) ? 'selected' : '' ?>>SMP</option>
				  			<option value="smak" <?= ($profile->jenjang_pendidikan == 'smak' ) ? 'selected' : '' ?>>SMA/SMK</option>
				  			<option value="sarjana" <?= ($profile->jenjang_pendidikan == 'sarjana' ) ? 'selected' : '' ?>>Sarjana</option>
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
				      <input type="text" class="form-control" placeholder="Umur" name="umur" required value="<?= $profile->umur ?>">
				    </div>
				  </div>
				  <div class="form-group row">
					<label class="col-sm-3 col-form-label">Status</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" placeholder="Status" name="status" required value="<?= $profile->status ?>">
				    </div>
				  </div>
				  <div class="form-group row">
				  	<label class="col-sm-3 col-form-label">Jenis kelamin</label>
				  	<div class="col-sm-9">
				  		<select class="form-control" name="jk">
				  			<option value="Laki-laki" <?= ($profile->jenis_kelamin == 'Laki-laki' ) ? 'selected' : '' ?>>Laki laki</option>
				  			<option value="Perempuan" <?= ($profile->jenis_kelamin == 'Perempuan' ) ? 'selected' : '' ?>>Perempuan</option>
				  		</select>
				  	</div>
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-3 col-form-label">Alamat lengkap</label>
				    <div class="col-sm-9">
				      <textarea class="form-control" placeholder="Alamat" name="alamat"><?= $profile->alamat_lengkap ?></textarea>
				    </div>
				  </div>
				  <div class="form-group row">
					<label class="col-sm-3 col-form-label">No HP</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" placeholder="No Hp" name="no_hp" value="<?= $profile->no_hp ?>">
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
				<button class="btn btn-dark">Update </button>
			</div>
			</form>
		</div>
	</div>
	<div class="col-md-3">

		<div class="card">
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