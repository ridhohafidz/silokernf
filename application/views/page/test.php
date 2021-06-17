<div class="row mt-4">
	<div class="col-md-9">
		<div class="card">
			<div class="card-header">SOAL</div>
			<form action="<?= base_url('page/submit_jawaban') ?>" method="post">
			<div class="card-body">
				<p>
					<?= $soal->nomor ?>. <?= $soal->soal ?>
				</p>
				<input type="hidden" name="id_soal" value="<?= $soal->id ?>">
				<div class="form-group row">
				    <label class="col-sm-1 col-form-label">
				    	<div class="form-check">
					  		<input class="form-check-input" type="radio" name="jawaban"  value="a">
					  		<label class="form-check-label">A</label>
						</div>
					</label>

				    <div class="col-sm-9">
				      <p class="form-control"><?= $soal->a ?></p>
				    </div>
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-1 col-form-label">
				    	<div class="form-check">
					  		<input class="form-check-input" type="radio" name="jawaban"  value="b">
					  		<label class="form-check-label">B</label>
						</div>
				    </label>
				    <div class="col-sm-9">
				      <p class="form-control"><?= $soal->b ?></p>
				    </div>
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-1 col-form-label">
				    	<div class="form-check">
					  		<input class="form-check-input" type="radio" name="jawaban"  value="c">
					  		<label class="form-check-label">C</label>
						</div>
				    </label>
				    <div class="col-sm-9">
				      <p class="form-control"><?= $soal->c ?></p>
				    </div>
				  </div>
			</div>
			<div class="card-footer">
				<?php if($selanjut == 'selesai'): ?>

					<input type="hidden" name="next" value="selesai">

				<?php else : ?>
					<input type="hidden" name="next" value="<?= $next ?>">
				<?php endif; ?>

				<button type="submit" class="btn btn-sm btn-dark"><?= ($selanjut == 'selesai') ? 'Selesai' : 'Selanjutnya' ?></button>
			</div>
		</form>
		</div>
	</div>
</div>