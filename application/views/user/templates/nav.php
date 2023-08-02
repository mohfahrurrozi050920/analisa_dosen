<body>
	<!-- Spinner Start -->
	<div id="spinner"
		class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
		<div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>
	<!-- Spinner End -->


	<!-- Navbar Start -->
	<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
		<a href="<?= base_url() ?>/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
			<h3 class="m-0 text-success"><img src="<?= base_url() ?>assets/user/img/logo.png" width="10%" alt="">
				e-SPKD Hamzanwadi</h3>
		</a>

		<button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
			<span class="navbar-toggler-icon"></span>
		</button>
		
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<div class="navbar-nav ms-auto p-4 p-lg-0">

			<div class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Penilaian Dosen</a>
					<div class="dropdown-menu fade-down m-0">
						<a href="<?= base_url() ?>User_Kuesioner" class="dropdown-item">Kuesioner</a>
						<a href="<?= base_url() ?>User_Kuesioner/evaluasi" class="dropdown-item">Evaluasi</a>
						<a href="<?= base_url() ?>User_Kuesioner/saran" class="dropdown-item">Saran</a>
					</div>
				</div>


			</div>
			<?php if($this->session->userdata('status')!= "login"){?>
			<a class="btn btn-primary py-4 px-lg-5 d-none d-lg-block" data-bs-toggle="modal"
				data-bs-target="#exampleModal">Masuk<i class="fa fa-arrow-right ms-3"></i></a>
				<?php }else{?>
			<a href="<?= base_url() ?>User_Login/logout" class="btn btn-danger py-4 px-lg-5 d-none d-lg-block">Keluar<i
					class="fa fa-arrow-right ms-3"></i>

			</a>
			<?php }?>
		</div>
	</nav>

	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Masuk Sebagai</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="container">
						<div class="row">

							<div class="col">
								<center>
									<a href="" data-bs-toggle="modal" data-bs-target="#login_mahasiswa"
										data-bs-dismiss="modal" aria-label="Close" data-bs-toggle="modal">
										<i class="fas fa-users fa-lg"></i>
										<br>
										Mahasiswa
									</a>
								</center>
							</div>
							<div class="col">
								<center>
									<a href="" data-bs-toggle="modal" data-bs-target="#login_admin"
										data-bs-dismiss="modal" aria-label="Close" data-bs-toggle="modal">
										<i class="fas fa-user fa-lg"></i>
										<br>
										Admin
									</a>
								</center>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="modal fade" id="login_mahasiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Login Mahasiswa</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
						data-bs-toggle="modal" data-bs-target="#exampleModal"></button>
				</div>
				<div class="modal-body">
					<form method="POST" action="<?= base_url() ?>User_Login/proses">
						<div class="form-group">
							<label for="">NIM</label>
							<input type="text" required class="form-control" name="nim" id="user"
								placeholder="Masukan NIM">
						</div>
						<div class="form-group">
							<label for="">Password</label>
							<input type="password" required class="form-control" name="password" id="pass"
								placeholder="Masukan Password">
						</div>


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
					<button type="submit" class="btn btn-primary">Login</button>
				</div>
				</form>
			</div>
		</div>
	</div>


	<div class="modal fade" id="login_dosen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Login Dosen</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
							data-bs-toggle="modal" data-bs-target="#exampleModal"></button>
				</div>
				<div class="modal-body">
					<form method="POST" action="">
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


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
					<button type="submit" class="btn btn-primary">Login</button>
				</div>
				</form>
			</div>
		</div>
	</div>



	<div class="modal fade" id="login_admin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Login Admin</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
						data-bs-toggle="modal" data-bs-target="#exampleModal"></button>
				</div>
				<div class="modal-body">
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


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
					<button type="submit" class="btn btn-primary">Login</button>
				</div>
				</form>
			</div>
		</div>
	</div>
