<div class="row mt-4">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">HASIL TEST ONLINE</div>

			<div class="card-body">
				<a href="<?= base_url('admin/test') ?>" class="btn btn-sm btn-dark mb-3">Kembali</a>

			<a href="<?= base_url('admin/cetak_hasil') ?>" target="_blank" class="btn btn-sm btn-dark mb-3 ml-2">Cetak hasil</a>

				<table class="table table-striped">	
					<thead>
						<tr>
							<th>#</th>
							<th>Username</th>
							<th>Tanggal test</th>
							<th>Nilai test</th>
							<th>Grade</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
					<?php $no=1; foreach($hasils as $h): ?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $h->username ?></td>
							<td><?= $h->tanggal ?></td>
							<td><?= $h->hasil ?></td>
							<td><?= grade($h->hasil) ?></td>
							<td><?= status_lulus(grade($h->hasil)) ?></td>
						</tr>
					<?php $no++; endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>