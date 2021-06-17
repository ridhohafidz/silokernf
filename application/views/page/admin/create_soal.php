<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/jam.css">
<div class="row mt-4">
	<div class="col-md-9">
		<div class="card">
			<div class="card-header">Add Soal </div>
			<form action="<?= base_url('admin/soal_add') ?>" method="post"> 
			<div class="card-body">
				  <div class="form-group row">
				    <label class="col-sm-3 col-form-label">Nomor</label>
				    <div class="col-sm-9">
				      <input type="number" class="form-control" placeholder="Nomor" name="nomor" required>
				      <?= form_error('nomor','<small class="form-text text-danger">','</small>') ?>
				    </div>
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-3 col-form-label">Pertanyaan</label>
				    <div class="col-sm-9">
				      <textarea class="form-control" placeholder="Pertanyaan" name="soal" required></textarea>
				      <?= form_error('nomor','<small class="form-text text-danger">','</small>') ?>
				    </div>
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-3 col-form-label">
				    	<div class="form-check">
					  		<input class="form-check-input" type="radio" name="jawaban"  value="a" checked>
					  		<label class="form-check-label">A</label>
						</div>
					</label>

				    <div class="col-sm-9">
				      <input type="text" class="form-control" placeholder="Jawaban A" name="a" required>
				      <?= form_error('a','<small class="form-text text-danger">','</small>') ?>
				    </div>
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-3 col-form-label">
				    	<div class="form-check">
					  		<input class="form-check-input" type="radio" name="jawaban"  value="b">
					  		<label class="form-check-label">B</label>
						</div>
				    </label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" placeholder="Jawaban B" name="b" required>
				      <?= form_error('b','<small class="form-text text-danger">','</small>') ?>
				    </div>
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-3 col-form-label">
				    	<div class="form-check">
					  		<input class="form-check-input" type="radio" name="jawaban"  value="c">
					  		<label class="form-check-label">C</label>
						</div>
				    </label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" placeholder="Jawaban C" name="c" required>
				      <?= form_error('c','<small class="form-text text-danger">','</small>') ?>
				    </div>
				  </div>
			</div>
			<div class="card-footer">
				<button class="btn btn-sm btn-dark">Simpan</button>
				<a href="<?= base_url('admin/test') ?>" class="btn btn-sm btn-secondary">Kembali</a>
			</div>
			</form>
		</div>
	</div>
	<div class="col-md-3">
	</div>
</div>