<!doctype html>
<html lang="en">

<head>
	<title>Login</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body style="">
	<div class="container">
		<!-- grid -->
		<div class="row">
			<div class="col-sm-5 mx-auto mt-5 pt-5">

				<div class="card">
					<div class="card-header">
						<center>

							<img src="<?= base_url() ?>assets/admin/img/logo.png" width="40%" alt="">
							<h3>Login Admin</h3>
						</center>
					</div>
					<div class="card-body">
						<form method="POST" action="<?= base_url(); ?>Admin_Login/proses">
							<div class="form-group">
								<label for="">Username</label>
								<input type="text" required class="form-control" name="username" id="user"
									placeholder="Masukan Username">
							</div>
							<div class="form-group">
								<label for="">Password</label>
								<input type="password" required class="form-control" name="password" id="pass"
									placeholder="Masukan Password">
							</div>
							<button type="submit" class="btn btn-success btn-md float-right">Login</button>
						</form>
					</div>
					<div class="card-footer text-muted">
						<center> Copyright &copy;
							<?= date('Y'); ?> Sistem Informasi Penilaian dan Evaluasi Kinerja Dosen
						</center>
					</div>
				</div>
			</div>
		</div>
		<!-- grid -->
	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


	<script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css
" rel="stylesheet">

</body>

</html>

<?php if ($this->session->flashdata('error')): ?>
	<script>
		Swal.fire(
			'Opps!!',
			'Username & Password Anda Salah!',
			'error'
		)
	</script>
<?php endif; ?>
<?php if ($this->session->flashdata('logout')): ?>
	<script>
		Swal.fire(
			'Berhasil!!',
			'Logout Berhasil !',
			'success'
		)
	</script>
<?php endif; ?>

