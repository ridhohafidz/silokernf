<div class="row mt-4">
	<div class="col-md-9">
		<div class="card">
			<div class="card-body">
				<img src="<?= base_url() ?>/assets/img/cara-aply.jpg" width="100%">
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="input-group mb-3">
		  <input type="text" class="form-control" placeholder="Search">
		  <div class="input-group-append">
		    <button class="btn btn-outline-secondary" type="button">Search</button>
		  </div>
		</div>
		<div class="card mt-3">
			<div class="card-header">Menu Navigasi</div>
			<ul class="list-group list-group-flush">
				<li class="list-group-item"><a href="<?= base_url('page/cara_apply') ?>">Tata Cara Apply</a></li>
			</ul>
			<div class="card-body">
				<div class="form-group">
					<label>Pendidikan Terakhir</label>
					<div class="form-check">
					  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
					  <label class="form-check-label" for="exampleRadios1">
					    SD
					  </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
					  <label class="form-check-label" for="exampleRadios2">
					    SMP
					  </label>
					</div>
					<div class="form-check disabled">
					  <input class="form-check-input" type="radio" name="exampleRadios" value="option3">
					  <label class="form-check-label">
					    SMA/SMK
					  </label>
					</div>
				</div>
				<div class="form-group">
					<label>Pengalaman Kerja</label>
					<div class="form-check">
					  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
					  <label class="form-check-label" for="exampleRadios1">
					    SD
					  </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
					  <label class="form-check-label" for="exampleRadios2">
					    SMP
					  </label>
					</div>
					<div class="form-check disabled">
					  <input class="form-check-input" type="radio" name="exampleRadios" value="option3">
					  <label class="form-check-label">
					    SMA/SMK
					  </label>
					</div>
				</div>
				<div class="form-group">
					<button class="btn btn-dark">Submit</button>
				</div>
			</div>
		</div>
	</div>
</div>