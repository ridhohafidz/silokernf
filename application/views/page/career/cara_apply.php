<div class="row mt-4">
	<div class="col-md-9">
		<?= $this->session->flashdata('message'); ?>
		<div class="card">
			<div class="card-body">
				<img src="<?= base_url() ?>/assets/img/cara_apply.png" width="100%">
				<h3 class="mt-3"><strong>Tata cara apply</strong></h3>
				<li>Melakukan Regisrasi</li>
				<p>Langkah awal, masuk ke website via PC atau smartphone lakukan registrasi. 
				Setelah melakukan registrasi, selanjutnya login dengan akun yang sudah dibuatkan.</p> 
				<li>Melengkapi Akun dan Unggah Resume</li>
				<p>Sebelum melamar pekerjaan, lengkapi terlebih dahulu akun dengan informasi yang jelas dan benar. 
				Upload resume, lamaran kerja dan dokumen pendukung lainnya yang dibutuhkan.</p>
				<li>Melamar Pekerjaan</li>
				<p>Pilih lowongan pekerjaan mengikuti poin-poin di penjelasan di atas kemudian apply lamaran pekerjaan.</p>  
				<li>Test Online</li>
				<p>Setelah data terkirim lengkap, selanjutnya diminta untuk mengikuti test online sampai selesai dan menunggu hasil test online.</p>

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