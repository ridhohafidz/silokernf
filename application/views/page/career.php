

<div class="row mt-4">
	<div class="col-md-9">
		<div class="card">
			<div class="card-header">OPPORTUNITIES AVAILABLE</div>
			<div class="card-body">
				<div id="accordion">
				<?php foreach($careers as $c): ?>
				  <div class="card">
				    <div class="card-header" id="headingOne">
				      <h5 class="mb-0">
				        <button class="btn btn-link" data-toggle="collapse" data-target="#coll<?= $c->id ?>" aria-expanded="false" aria-controls="collapseOne">
				          <?= $c->info ?> (At <?= $c->tanggal ?>)
				        </button>
				      </h5>
				    </div>

				    <div id="coll<?= $c->id ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
				      <div class="card-body">
				        <div class="card">
				        	<div class="card-header">Deskripsi Pekerjaan</div>
				        	<div class="card-body">
				        		Bagian : <?= $c->bagian ?> <br>
				        		Batas akhir : <?= $c->tanggal_akhir ?>
				        	</div>
				        </div>
				        <a href="<?= base_url('pelamar/apply/'.$c->id) ?>" class="btn btn-dark mt-3">Apply</a>
				      </div>
				    </div>
				  </div>
				<?php endforeach; ?>
				</div>
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