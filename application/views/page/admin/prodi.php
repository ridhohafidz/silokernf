<div class="row mt-4">
	<div class="col-md-12">
		<?= $this->session->flashdata('message'); ?>
		<div class="card">
			<div class="card-header">Program Studi</div>
			<div class="card-body">
				<a href="<?= base_url('admin/prodi_add') ?>" class="btn btn-sm btn-dark mb-3">Tambah Prodi</a>
				<table class="table table-striped">	
					<thead>
						<tr>
							<th>#</th>
							<th>Kode</th>
							<th>Nama</th>
						</tr>
					</thead>
					<tbody>
					<?php $no=1; foreach($prodi as $c):?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $c->kode ?></td>
							<td><?= $c->nama ?></td>
							<td>
								<a href="<?= base_url('admin/prodi_edit/'.$c->id) ?>" class="btn btn-sm btn-secondary">Edit</a>
								<a href="<?= base_url('admin/prodi_del/'.$c->id) ?>" class="btn btn-sm btn-dark" onclick="return confirm('Data ini akan dihapus? ')">Hapus</a>
							</td>
						</tr>
					<?php $no++; endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>