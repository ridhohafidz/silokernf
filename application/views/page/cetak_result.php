<!DOCTYPE html>
<html>
<head>
	<title>Hasil tes</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="row mt-4">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header text-center">PROFILE</div>
			<div class="card-body">
				<table class="table">
					<tr>
						<td width="130px">Nama Pelamar</td><td width="50px">:</td><td><?= $profil->nama_lengkap ?></td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td><td>:</td><td><?= $profil->jenis_kelamin ?></td>
					</tr>
					<tr>
						<td>Alamat</td><td>:</td><td><?= $profil->alamat_lengkap ?></td>
					</tr>
					<tr><td><td><td></td></td></td></tr>
				</table>
			</div>
		</div>
		<div class="card mt-5">
			<div class="card-header text-center">HASIL TEST ONLINE</div>
			<div class="card-body">
				<table class="table">
					<tr>
						<td width="130px">Nilai</td><td width="50px">:</td><td><?= $result->hasil ?></td>
					</tr>
					<tr>
						<td>Grade</td><td>:</td><td><?= grade($result->hasil) ?></td>
					</tr>
					<tr>
						<td>Status</td><td>:</td><td><?= status_lulus(grade($result->hasil)) ?></td>
					</tr>
					<tr><td><td><td></td></td></td></tr>
				</table>
			</div> 
		</div>
	</div>
</div>
<script>window.print()</script>
</body>
</html>