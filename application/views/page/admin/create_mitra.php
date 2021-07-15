<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/jam.css">
<div class="row mt-4">
	<div class="col-md-9">
		<div class="card">
			<div class="card-header">Add Mitra </div>
			<form action="<?= base_url('admin/mitra_add') ?>" method="post" enctype="multipart/form-data"> 
			<div class="card-body">
				 
				  <div class="form-group row">
				    <label class="col-sm-3 col-form-label">Nama</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" placeholder="Nama" name="nama" required>
				      <?= form_error('nama','<small class="form-text text-danger">','</small>') ?>
				    </div>
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-3 col-form-label">Alamat</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" placeholder="Alamat" name="alamat" required>
				      <?= form_error('alamat','<small class="form-text text-danger">','</small>') ?>
				    </div>
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-3 col-form-label">Kontak</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" placeholder="Kontak" name="kontak" required>
				      <?= form_error('kontak','<small class="form-text text-danger">','</small>') ?>
				    </div>
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-3 col-form-label">Telpon</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" placeholder="Telpon" name="telpon" required>
				      <?= form_error('telpon','<small class="form-text text-danger">','</small>') ?>
				    </div>
				  </div>                      
				  <div class="form-group row">
				    <label class="col-sm-3 col-form-label">Email</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" placeholder="Email" name="email" required>
				      <?= form_error('email','<small class="form-text text-danger">','</small>') ?>
				    </div>
				  </div>                      
				  <div class="form-group row">
				    <label class="col-sm-3 col-form-label">Web</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" placeholder="Web" name="web" required>
				      <?= form_error('web','<small class="form-text text-danger">','</small>') ?>
				    </div>
				  </div>                                                                                          
				  <div class="form-group row">
				    <label class="col-sm-3 col-form-label">Bidang Usaha</label>
				    <div class="col-sm-9">
                        <select class="form-control" name="bidang_usaha_id">
                         <?php 
                         $data = $this->db->get('bidang_usaha')->result();
                         foreach($data as $value):
                          ?>
                        <option value="<?php echo $value->id?>">
                            <?php echo $value->nama?> </option>
                        <?php endforeach;
                         ?>
                        </select>                        
				      <?= form_error('bidang_usaha_id','<small class="form-text text-danger">','</small>') ?>
				    </div>
				  </div>  
				  <div class="form-group row">
				    <label class="col-sm-3 col-form-label">Sektor usaha</label>
				    <div class="col-sm-9">
                        <select class="form-control" name="sektor_usaha_id">                        
                         <?php 
                         $data = $this->db->get('sektor_usaha')->result();
                         foreach($data as $value):
                          ?>
                        <option value="<?php echo $value->id?>">
                            <?php echo $value->nama?> </option>
                        <?php endforeach;
                         ?>
                        </select> 
				      <?= form_error('sektor_usaha_id','<small class="form-text text-danger">','</small>') ?>
				    </div>
				  </div>                                                                                                            
                </div>
			<div class="card-footer">
				<button class="btn btn-sm btn-dark">Simpan</button>
				<a href="<?= base_url('admin/mitra') ?>" class="btn btn-sm btn-secondary">Kembali</a>
			</div>
			</form>
		</div>
	</div>
	<div class="col-md-3">
	</div>
</div>