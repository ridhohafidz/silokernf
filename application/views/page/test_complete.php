<div class="row mt-4">
	<div class="col-md-9">
		<div class="alert alert-success">
			Anda sudah mengerjakan test ini pada <?= $result->tanggal ?> <br>
			Silahkan klik <i>Hasil test online</i> pada menu navigasi untuk melihat hasil test
		</div>
	</div>
	<div class="col-md-3">
		<div class="card">
			<div class="card-header">Menu Navigasi</div>
			<ul class="list-group list-group-flush">
				<li class="list-group-item"><a href="<?= base_url('page/test_online') ?>">Test online</a></li>
				<li class="list-group-item"><a href="<?= base_url('page/result_test') ?>">Hasil test online</a></li>
			</ul>
		</div>
	</div>
</div>