<div class="row mt-4">
	<div class="col-md-12">
		<?= $this->session->flashdata('message'); ?>
		<div class="card">
			<div class="card-header">Lowongan pekerjaan</div>
			<div class="card-body">
				<a href="<?= base_url('admin/career_add') ?>" class="btn btn-sm btn-dark mb-3">Tambah Loker</a>
				<table class="table table-striped">	
					<thead>
						<tr>
							<th>#</th>
							<th>Info</th>
							<th>Jabatan</th>
							<th>Bagian</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
					<?php $no=1; foreach($careers as $c):?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $c->info ?></td>
							<td><?= $c->jabatan ?></td>
							<td><?= $c->bagian ?></td>
							<td>
								<a href="<?= base_url('admin/career_edit/'.$c->id) ?>" class="btn btn-sm btn-secondary">Edit</a>
								<a href="<?= base_url('admin/career_del/'.$c->id) ?>" class="btn btn-sm btn-dark" onclick="return confirm('Data ini akan dihapus? ')">Hapus</a>
							</td>
						</tr>
					<?php $no++; endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>