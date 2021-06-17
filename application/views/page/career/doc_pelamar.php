<div class="row mt-4">
	<div class="col-md-9">
		<div class="card">
			<div class="card-header">UPLOAD DOKUMENT PENDUKUNG PELAMAR</div>
			<form action="<?= base_url('pelamar/upl_cv') ?>" method="post" enctype="multipart/form-data">
			<div class="card-body">
				<input type="hidden" name="id_loker" value="<?= $id_loker ?>">
				<div class="form-group">
					<label>Name </label>
					<input type="text" class="form-control" name="name" placeholder="Name">
				</div>
				<div class="form-group">
					<label>Curiculum Vitae</label>
					  <input type="file" class="form-control" name="cv" lang="es">
					<small>*) Format File "PDF" dan Ukuran 400 kb</small>
				</div>
				
			</div>
			<div class="card-footer">
				<button type="submit" class="btn btn-dark">Apply</button>
			</div>
			</form>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card">
			<div class="card-header">Menu Navigasi</div>
			<ul class="list-group list-group-flush">
				<li class="list-group-item"><a href="<?= base_url('page/cara_apply') ?>">Tata Cara Apply</a></li>
				<li class="list-group-item"><a href="<?= base_url('page/career') ?>">Daftar Lowongan Kerja</a></li>
				<li class="list-group-item"><b>Upload Document</b></li>
			</ul>
		</div>
	</div>
</div>