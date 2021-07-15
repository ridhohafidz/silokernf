<div class="row mt-4">
	<div class="col-md-12">
		<?= $this->session->flashdata('message'); ?>
		<div class="card">
			<div class="card-header">Mitra</div>
			<div class="card-body">
				<a href="<?= base_url('admin/mitra_add') ?>" class="btn btn-sm btn-dark mb-3">Tambah Mitra</a>
            <div class="table-responsive">
                <table class="table table-striped">	
					<thead>
						<tr>
							<th>#</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Kontak</th>
							<th>Telpon</th>                                                        
							<th>Email</th>                                                        
							<th>Web</th>   
							<th>Bidang Usaha</th>                                              
							<th>Sektor Usaha</th>                               
                        </tr>
					</thead>
					<tbody>
					<?php $no=1; foreach($mitra as $c):?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $c->nama ?></td>
							<td><?= $c->alamat ?></td>
							<td><?= $c->kontak ?></td>
							<td><?= $c->telpon ?></td>
							<td><?= $c->email ?></td>
							<td><?= $c->web ?></td>
							<td><?php $data = $this->db->get_where('bidang_usaha', ['id' => $c->bidang_usaha_id])->row(); ?>
                            <?php echo $data->nama ?></td>                                                   
							<td><?php $data2 = $this->db->get_where('sektor_usaha', ['id' => $c->sektor_usaha_id])->row(); ?>
                            <?php echo $data2->nama ?>
                            </td>                            
                            <td>
								<a href="<?= base_url('admin/mitra_edit/'.$c->id) ?>" class="btn btn-sm btn-secondary">Edit</a>
								<a href="<?= base_url('admin/mitra_del/'.$c->id) ?>" class="btn btn-sm btn-dark" onclick="return confirm('Data ini akan dihapus? ')">Hapus</a>
							</td>
						</tr>
					<?php $no++; endforeach; ?>
					</tbody>
				</table>
            </div>

			</div>
		</div>
        
	</div>

</div>