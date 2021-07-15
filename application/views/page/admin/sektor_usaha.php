<div class="row mt-4">
	<div class="col-md-12">
		<?= $this->session->flashdata('message'); ?>
		<div class="card">
			<div class="card-header">Sektor Usaha</div>
			<div class="card-body">
				<a href="<?= base_url('admin/sektor_usaha_add') ?>" class="btn btn-sm btn-dark mb-3">Tambah Sektor Usaha</a>
				<table class="table table-striped">	
					<thead>
						<tr>
							<th>#</th>
							<th>Nama</th>
						</tr>
					</thead>
					<tbody>
					<?php $no=1; foreach($sektor_usaha as $c):?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $c->nama ?></td>
							<td>
								<a href="<?= base_url('admin/sektor_usaha_edit/'.$c->id) ?>" class="btn btn-sm btn-secondary">Edit</a>
								<a href="<?= base_url('admin/sektor_usaha_del/'.$c->id) ?>" class="btn btn-sm btn-dark" onclick="return confirm('Data ini akan dihapus? ')">Hapus</a>
							</td>
						</tr>
					<?php $no++; endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
        
	</div>

</div>