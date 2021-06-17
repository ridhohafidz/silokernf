<!DOCTYPE html>
<html>
<head>
	<title>Hasil Test Online</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
</head>
<body>
	<h3 class="text-center mt-5">HASIL TEST ONLINE</h3>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>#</th>
				<th>Username</th>
				<th>Tanggal test</th>
				<th>Nilai test</th>
				<th>Grade</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
		<?php $no=1; foreach($hasils as $h): ?>
			<tr>
				<td><?= $no ?></td>
				<td><?= $h->username ?></td>
				<td><?= $h->tanggal ?></td>
				<td><?= $h->hasil ?></td>
				<td><?= grade($h->hasil) ?></td>
				<td><?= status_lulus(grade($h->hasil)) ?></td>
			</tr>
		<?php $no++; endforeach; ?>
		</tbody>
	</table>
	<script>window.print()</script>
</body>
</html>