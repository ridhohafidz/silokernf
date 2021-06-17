<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/jam.css">
<div class="row mt-4">
	<div class="col-md-9">
		<div class="card">
			<div class="card-header">Edit Loker </div>
			<form action="<?= base_url('admin/career_edit/'.$career->id) ?>" method="post" enctype="multipart/form-data"> 
			<div class="card-body">
				 
				  <div class="form-group row">
				    <label class="col-sm-3 col-form-label">Info</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" placeholder="Info" name="info" required value="<?= $career->info ?>">
				      <?= form_error('info','<small class="form-text text-danger">','</small>') ?>
				    </div>
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-3 col-form-label">Jabatan</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" placeholder="Jabatan" name="jabatan" required value="<?= $career->jabatan ?>">
				      <?= form_error('jabatan','<small class="form-text text-danger">','</small>') ?>
				    </div>
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-3 col-form-label">Bagian</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" placeholder="Bagian" name="bagian" required value="<?= $career->bagian ?>">
				      <?= form_error('bagian','<small class="form-text text-danger">','</small>') ?>
				    </div>
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-3 col-form-label">Tanggal akhir</label>
				    <div class="col-sm-9">
				      <input type="date" class="form-control" name="tgl_akhir" required value="<?= $career->tanggal_akhir ?>">
				      <?= form_error('tgl_akhir','<small class="form-text text-danger">','</small>') ?>
				    </div>
				  </div>
			</div>
			<div class="card-footer">
				<button class="btn btn-sm btn-dark">Simpan</button>
				<a href="<?= base_url('admin/career') ?>" class="btn btn-sm btn-secondary">Kembali</a>
			</div>
			</form>
		</div>
	</div>
	<div class="col-md-3">
	</div>
</div>