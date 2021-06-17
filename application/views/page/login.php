<div class="row mt-4">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<?= $this->session->flashdata('message'); ?>
		<div class="card">
			<div class="card-header">Login pelamar</div>
			<form action="<?= base_url('pelamar/login') ?>" method="post">
			<div class="card-body">
	
				  <div class="form-group row">
				    <label class="col-sm-2 col-form-label">Username</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" placeholder="Username" name="username" required>
				    </div>
				  </div>
				  <div class="form-group row">
				    <label class="col-sm-2 col-form-label">Password</label>
				    <div class="col-sm-10">
				      <input type="password" class="form-control" placeholder="Password" name="password" required>
				    </div>
				  </div> 
				
			</div>
			<div class="card-footer">
				<button class="btn btn-dark" type="submit">Login</button>
			</div>
			</form>
		</div>
	</div>
</div>