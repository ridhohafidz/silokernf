<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/jam.css">
<div class="row mt-4">
	<div class="col-md-9">
		<div class="card">
			<div class="card-header">Add Prodi </div>
			<form action="<?= base_url('admin/prodi_add') ?>" method="post" enctype="multipart/form-data"> 
			<div class="card-body">
				 
				  <div class="form-group row">
				    <label class="col-sm-3 col-form-label">Kode</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" placeholder="Kode" name="kode" required>
				      <?= form_error('kode','<small class="form-text text-danger">','</small>') ?>
				    </div>
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-3 col-form-label">Nama</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" placeholder="Nama" name="nama" required>
				      <?= form_error('nama','<small class="form-text text-danger">','</small>') ?>
				    </div>
				  </div>
			</div>
			<div class="card-footer">
				<button class="btn btn-sm btn-dark">Simpan</button>
				<a href="<?= base_url('admin/prodi') ?>" class="btn btn-sm btn-secondary">Kembali</a>
			</div>
			</form>
		</div>
	</div>
	<div class="col-md-3">
	</div>
</div>