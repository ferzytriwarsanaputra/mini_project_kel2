<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?= APP_NAME ?> - <?= $judul ?></title>
	<link href="<?= base_url('sb-admin-2/') ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="<?= base_url('sb-admin-2/') ?>/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<?php
	$koneksi = mysqli_connect("localhost", "root", "", "rental_mobil");
	
	$query = "SELECT * FROM tbl_mobil WHERE id = 13";
	$result = mysqli_query($koneksi, $query);
	$data = mysqli_fetch_assoc($result);
?>
<body id="page-top">
	<div id="wrapper">
		<?php partial('navbar', $aktif) ?>
		<div id="content-wrapper" class="d-flex flex-column">
			<?php partial('topbar') ?>
			<div class="container-fluid">
				<h1 class="h3 mb-4 text-gray-800">Dashboard <?= APP_NAME ?></h1>
				<hr>
				<div class="row">
					<div class="col-md-4">
						<div class="card shadow">
							<div class="card-body">
								<div class="column">
									<div class="col-md-12">
										<img src="<?= base_url('uploads/'. $data['gambar']) ?>" alt="<?= $data['nama'] ?>" class="img-thumbnail mb-4">
									</div>
									<div class="col-md-12">
										<table class="table table-borderless">
											<tr>
												<td>Nama</td>
												<td>:</td>
												<td><b><?= $data['nama'] ?></b></td>
											</tr>
											<tr>
												<td>Warna</td>
												<td>:</td>
												<td><b><?= $data['warna'] ?></b></td>
											</tr>
											<tr>
												<td>No Polisi</td>
												<td>:</td>
												<td><b><?= $data['no_polisi'] ?></b></td>
											</tr>
											<tr>
												<td>Jumlah Kursi</td>
												<td>:</td>
												<td><b><?= $data['jumlah_kursi'] ?></b></td>
											</tr>
											<tr>
												<td>Tahun Beli</td>
												<td>:</td>
												<td><b><?= $data['tahun_beli'] ?></b></td>
											</tr>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card shadow">
							<div class="card-body">
								<div class="column">
									<div class="col-md-12">
										<img src="<?= base_url('uploads/'. $data['gambar']) ?>" alt="<?= $data['nama'] ?>" class="img-thumbnail mb-4">
									</div>
									<div class="col-md-12">
										<table class="table table-borderless">
											<tr>
												<td>Nama</td>
												<td>:</td>
												<td><b><?= $data['nama'] ?></b></td>
											</tr>
											<tr>
												<td>Warna</td>
												<td>:</td>
												<td><b><?= $data['warna'] ?></b></td>
											</tr>
											<tr>
												<td>No Polisi</td>
												<td>:</td>
												<td><b><?= $data['no_polisi'] ?></b></td>
											</tr>
											<tr>
												<td>Jumlah Kursi</td>
												<td>:</td>
												<td><b><?= $data['jumlah_kursi'] ?></b></td>
											</tr>
											<tr>
												<td>Tahun Beli</td>
												<td>:</td>
												<td><b><?= $data['tahun_beli'] ?></b></td>
											</tr>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card shadow">
							<div class="card-body">
								<div class="column">
									<div class="col-md-12">
										<img src="<?= base_url('uploads/'. $data['gambar']) ?>" alt="<?= $data['nama'] ?>" class="img-thumbnail mb-4">
									</div>
									<div class="col-md-12">
										<table class="table table-borderless">
											<tr>
												<td>Nama</td>
												<td>:</td>
												<td><b><?= $data['nama'] ?></b></td>
											</tr>
											<tr>
												<td>Warna</td>
												<td>:</td>
												<td><b><?= $data['warna'] ?></b></td>
											</tr>
											<tr>
												<td>No Polisi</td>
												<td>:</td>
												<td><b><?= $data['no_polisi'] ?></b></td>
											</tr>
											<tr>
												<td>Jumlah Kursi</td>
												<td>:</td>
												<td><b><?= $data['jumlah_kursi'] ?></b></td>
											</tr>
											<tr>
												<td>Tahun Beli</td>
												<td>:</td>
												<td><b><?= $data['tahun_beli'] ?></b></td>
											</tr>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card shadow">
							<div class="card-body">
								<div class="column">
									<div class="col-md-12">
										<img src="<?= base_url('uploads/'. $data['gambar']) ?>" alt="<?= $data['nama'] ?>" class="img-thumbnail mb-4">
									</div>
									<div class="col-md-12">
										<table class="table table-borderless">
											<tr>
												<td>Nama</td>
												<td>:</td>
												<td><b><?= $data['nama'] ?></b></td>
											</tr>
											<tr>
												<td>Warna</td>
												<td>:</td>
												<td><b><?= $data['warna'] ?></b></td>
											</tr>
											<tr>
												<td>No Polisi</td>
												<td>:</td>
												<td><b><?= $data['no_polisi'] ?></b></td>
											</tr>
											<tr>
												<td>Jumlah Kursi</td>
												<td>:</td>
												<td><b><?= $data['jumlah_kursi'] ?></b></td>
											</tr>
											<tr>
												<td>Tahun Beli</td>
												<td>:</td>
												<td><b><?= $data['tahun_beli'] ?></b></td>
											</tr>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card shadow">
							<div class="card-body">
								<div class="column">
									<div class="col-md-12">
										<img src="<?= base_url('uploads/'. $data['gambar']) ?>" alt="<?= $data['nama'] ?>" class="img-thumbnail mb-4">
									</div>
									<div class="col-md-12">
										<table class="table table-borderless">
											<tr>
												<td>Nama</td>
												<td>:</td>
												<td><b><?= $data['nama'] ?></b></td>
											</tr>
											<tr>
												<td>Warna</td>
												<td>:</td>
												<td><b><?= $data['warna'] ?></b></td>
											</tr>
											<tr>
												<td>No Polisi</td>
												<td>:</td>
												<td><b><?= $data['no_polisi'] ?></b></td>
											</tr>
											<tr>
												<td>Jumlah Kursi</td>
												<td>:</td>
												<td><b><?= $data['jumlah_kursi'] ?></b></td>
											</tr>
											<tr>
												<td>Tahun Beli</td>
												<td>:</td>
												<td><b><?= $data['tahun_beli'] ?></b></td>
											</tr>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card shadow">
							<div class="card-body">
								<div class="column">
									<div class="col-md-12">
										<img src="<?= base_url('uploads/'. $data['gambar']) ?>" alt="<?= $data['nama'] ?>" class="img-thumbnail mb-4">
									</div>
									<div class="col-md-12">
										<table class="table table-borderless">
											<tr>
												<td>Nama</td>
												<td>:</td>
												<td><b><?= $data['nama'] ?></b></td>
											</tr>
											<tr>
												<td>Warna</td>
												<td>:</td>
												<td><b><?= $data['warna'] ?></b></td>
											</tr>
											<tr>
												<td>No Polisi</td>
												<td>:</td>
												<td><b><?= $data['no_polisi'] ?></b></td>
											</tr>
											<tr>
												<td>Jumlah Kursi</td>
												<td>:</td>
												<td><b><?= $data['jumlah_kursi'] ?></b></td>
											</tr>
											<tr>
												<td>Tahun Beli</td>
												<td>:</td>
												<td><b><?= $data['tahun_beli'] ?></b></td>
											</tr>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php partial('footer') ?>
		</div>
	</div>

	<a class="scroll-to-top rounded" href="#page-top">
			<i class="fas fa-angle-up"></i>
	</a>
	<script src="<?= base_url('sb-admin-2/') ?>/vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url('sb-admin-2/') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('sb-admin-2/') ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
	<script src="<?= base_url('sb-admin-2/') ?>/js/sb-admin-2.min.js"></script>
</body>
</html>