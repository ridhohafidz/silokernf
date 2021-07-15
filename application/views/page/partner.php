<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/jam.css">
<div class="row mt-4">
	<div class="col-md-9">
		<div class="card">
		<div class="card-body">
            <h4 class="mb-3" style="text-align: center;"> <strong> Partner Bisnis Perusahaan Kami </strong></h4>
            <p>Kami menyambut baik berbagai inovasi kemitraan dengan perusahaan-perusahaan di Indonesia yang memiliki
              visi yang sama dengan kami. Karena itu SILOKERNF bekerja sama dengan beberapa perusahaan maupun lembaga
              pendidikan.</p>
            <br>
            <div class="row">
              <div class="col">
                <div class="row">
                  <div class="col-lg-3">
                    <img src="https://www.nurulfikri.com/nf-computer.png" class="rounded float-left img-fluid" width="200px" alt="content2">
                  </div>
                  <div class="col-lg">
                    <h4> <strong> NFComputer </strong> </h4>
                    <p class="p3">PT Nurul Fikri Cipta Inovasi atau biasa dikenal dengan NFComputer bagian dari grup
                      Nurul
                      Fikri yang telah dipercaya oleh masyarakat Indonesia di bidang pendidikan dan peningkatan sumber
                      daya
                      manusia selama lebih dari 24 tahun.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="row">
                  <div class="col-lg-3">
                    <img src="https://www.heruirawan.com/wp-content/uploads/2015/11/linux_foundation.jpg" class="rounded float-left img-fluid" width="200px" alt="content2">
                  </div>
                  <div class="col-lg">
                    <h4> <strong> Linux Fondation</strong> </h4>
                    <p class="p3">Linux Foundation (LF) adalah konsorsium teknologi nirlaba yang ditugaskan untuk
                      mendorong
                      pertumbuhan Linux. Linux Foundation mensponsori karya-karya pencipta Linux Linus Torvalds dan
                      didukung
                      oleh perusahaan-perusahaan sumber terbuka dan terkemuka.</p>
                  </div>
                </div>
              </div>
            </div>
			<br>

            <div class="row">
              <div class="col">
                <div class="row">
                  <div class="col-lg-3">
                    <img src="https://i1.wp.com/smkwidyadharma.sch.id/wp-content/uploads/2017/06/Mikrotik-Academy-Logo.png?ssl=1" class="rounded float-left img-fluid" width="200px" alt="content2">
                  </div>
                  <div class="col-lg">
                    <h4> <strong> MikroTik Academy </strong> </h4>
                    <p class="p3">MikroTik Academy adalah program yang dikhususkan kepada institusi pendidikan seperti
                      Universitas, Institut, Akademi, Sekolah Menengah Kejuruan, dan institusi pendidikan lainnya yang
                      bersifat resmi.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card">
			<div class="card-header">Menu Navigasi</div>

			<ul class="list-group list-group-flush">
			    <li class="list-group-item"><a href="<?= base_url('page') ?>">Tentang Perusahaan</a></li>
			    <li class="list-group-item"><a href="<?= base_url('page/visi_misi') ?>">Visi & Misi </a></li>
			    <li class="list-group-item"><a href="<?= base_url('page/partner') ?>">Partner Bisnis</a></li>
			    <li class="list-group-item"><a href="<?= base_url('page/our_team') ?>">Our Team</a></li>				
			</ul>
		</div>
		<div class="card mt-4">
			<div class="card-header">Share</div>
			<div class="card-body">
				<?php
					$month= date ("m");
					$year=date("Y");
					$day=date("d");
					$endDate=date("t",mktime(0,0,0,$month,$day,$year));
					echo "Today : ".date("F, d Y ",mktime(0,0,0,$month,$day,$year));
				?>
			</div>
			<div class="card-footer">
				<div class="jam-digital">
					<p id="jam" class="badge badge-dark p-1"></p>
					<p id="menit" class="badge badge-dark p-1"></p>
					<p id="detik" class="badge badge-dark p-1"></p>
				</div>
			</div>
		</div>
	</div>
</div>
