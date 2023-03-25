<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?= APP_NAME ?> - Login</title>
	<link href="<?= base_url('sb-admin-2/') ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<!-- <link href="<?= base_url('sb-admin-2/') ?>/css/sb-admin-2.min.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="<?= base_url('sb-admin-2/') ?>/css/css.css">
</head>

<body>
	<div class="container">

		<div class="login">
			<form class="user" method="POST" action="<?= base_url('auth/login') ?>">
				<h1>Login</h1>
				<hr>
				<p>Rental Mobil</p>
				<label for="">Username</label>
				<input type="text" name="username" placeholder="Username">
				<label for="">Password</label>
				<input type="password" name="password" placeholder="Password">
				<button name="login">Login</button>

			</form>
		</div>
		<div class="right">
			<img src="<?= base_url('sb-admin-2/') ?>/css/login.jpg">
		</div>
	</div>

	<script src="<?= base_url('sb-admin-2/') ?>/vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url('sb-admin-2/') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('sb-admin-2/') ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
	<script src="<?= base_url('sb-admin-2/') ?>/js/sb-admin-2.min.js"></script>

</body>

</html>