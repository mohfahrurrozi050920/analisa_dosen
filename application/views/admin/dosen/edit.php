<?php $this->load->view('admin/templates/head') ?>
<?php $this->load->view('admin/templates/slide') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Dosen </h1>


				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url() ?>Admin_home">Home</a></li>
						<li class="breadcrumb-item active">Dosen</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">

			<div class="row">
				<div class="col-12">

					<div class="card">
						<div class="card-header" style="background-color:green;color:#eee">
							<h3 class="card-title"> <a href="<?= base_url() ?>Admin_Dosen"><i class="fa fa-arrow-left"
										style="color:#eee"></i> </a> Form Dosen</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<?php
							foreach($dosen as $u) {
								
							?>
							<form action="<?php echo base_url()?>Admin_Dosen/update" method="post">
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">NIP</label>
									<div class="col-sm-10">
										<input type="hidden" class="form-control" id="inputEmail3" value="<?= $u->id ?>" placeholder="nip"
											name="id">

											<input type="text" class="form-control" id="inputEmail3" value="<?= $u->nip ?>" placeholder="nip"
											name="nip">
									</div>
								</div>
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">Nama Lengkap</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="inputEmail3"
											placeholder="Nama Lengakap" name="nama" value="<?= $u->nama ?>">
									</div>
								</div>
								<fieldset class="form-group">
									<div class="row">
										<legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
										<div class="col-sm-10">
											<div class="form-check">
												<input class="form-check-input" type="radio" name="jk" id="gridRadios1"
													value="Laki-Laki" checked>
												<label class="form-check-label" for="gridRadios1">
													Laki - Laki
												</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="jk" id="gridRadios2"
													value="Perempuan">
												<label class="form-check-label" for="gridRadios2">
													Perempuan
												</label>
											</div>

										</div>
									</div>
								</fieldset>


								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
									<div class="col-sm-10">
										<textarea name="alamat" class="form-control" id="" cols="30"
											rows="5"><?= $u->alamat ?></textarea>
									</div>
								</div>
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="inputEmail3" value="<?= $u->username ?>" placeholder="Username"
											name="username">
									</div>
								</div>

								<div class="form-group row">
									<label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
									<div class="col-sm-10">
										<input type="password" class="form-control" required name="password" id="inputPassword3"
											placeholder="Password">
									</div>
								</div>



								<div class="form-group row">
									<div class="col-sm-10">
										<button type="reset" class="btn btn-secondary ">Batal</button>
										<button type="submit" class="btn btn-success">Ubah</button>
									</div>
								</div>
							</form>
							<?php }?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.row -->
		<!-- Main row -->

		<!-- /.card -->
	</section>
	<!-- right col -->
</div>
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php $this->load->view('admin/templates/foot') ?>
