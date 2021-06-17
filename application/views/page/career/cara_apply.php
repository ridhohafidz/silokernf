<div class="row mt-4">
	<div class="col-md-9">
		<?= $this->session->flashdata('message'); ?>
		<div class="card">
			<div class="card-body">
				<img src="<?= base_url() ?>/assets/img/cara-aply.jpg" width="100%">
				<h4 class="mt-3">Tata cara apply</h4>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br><br>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card">
			<div class="card-header">Menu Navigasi</div>
			<ul class="list-group list-group-flush">
				<li class="list-group-item"><a href="<?= base_url('page/cara_apply') ?>">Tata Cara Apply</a></li>
				<li class="list-group-item"><a href="<?= base_url('page/career') ?>">Daftar Lowongan Kerja</a></li>
				<li class="list-group-item">Upload Document</li>
			</ul>
		</div>
	</div>
</div>