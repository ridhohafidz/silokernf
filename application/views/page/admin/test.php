<div class="row mt-4">
	<div class="col-md-12">
		<?= $this->session->flashdata('message'); ?>
		<div class="card">
			<div class="card-header">SOAL TEST ONLINE</div>
			<div class="card-body">
				<a href="<?= base_url('admin/soal_add') ?>" class="btn btn-sm btn-dark mb-3">Tambah Soal</a>

				<a href="<?= base_url('admin/hasil_test') ?>" class="btn btn-sm btn-dark mb-3 ml-2">Hasil Test</a>
				<table class="table table-striped">	
					<thead>
						<tr>
							<th>#</th>
							<th>Pertanyaan</th>
							<th>Plihan Jawaban</th>
							<th>Kunci Jawban</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach($soals as $s): ?>
						<tr>
							<td><?= $s->nomor ?></td>
							<td><?= $s->soal ?></td>
							<td>
								A. <?= $s->a ?> <br>
								B. <?= $s->b ?> <br>
								C. <?= $s->c ?> <br>
							</td>
							<td><?= $s->jawaban ?></td>
							<td>
								<a href="<?= base_url('admin/soal_edit/'.$s->id) ?>" class="btn btn-sm btn-secondary">Edit</a>
								<a href="<?= base_url('admin/soal_del/'.$s->id) ?>" class="btn btn-sm btn-dark" onclick="return confirm('Data ini akan dihapus? ')">Hapus</a>
							</td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>