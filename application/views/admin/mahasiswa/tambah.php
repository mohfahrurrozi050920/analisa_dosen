<?php $this->load->view('admin/templates/head') ?>
<?php $this->load->view('admin/templates/slide') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Mahasiswa </h1>


				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url() ?>Admin_home">Home</a></li>
						<li class="breadcrumb-item active">Mahasiswa</li>
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
							<h3 class="card-title"> <a href="<?= base_url() ?>Admin_Mahasiswa"><i class="fa fa-arrow-left" style="color:#eee"></i> </a>  Form Mahasiswa</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<form action="<?php echo base_url()?>Admin_Mahasiswa/tambah_aksi" method="post">
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">NIM</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="inputEmail3" placeholder="NIM" required name="nim">
									</div>
								</div>
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">Nama Lengkap</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="inputEmail3" required placeholder="Nama Lengakap" name="nama">
									</div>
								</div>
								<fieldset class="form-group">
									<div class="row">
										<legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
										<div class="col-sm-10">
											<div class="form-check">
												<input class="form-check-input" type="radio" name="jk"
													id="gridRadios1" value="Laki-Laki" checked>
												<label class="form-check-label" for="gridRadios1">
												Laki - Laki
												</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="jk"
													id="gridRadios2" value="Perempuan">
												<label class="form-check-label" for="gridRadios2">
													Perempuan
												</label>
											</div>
											
										</div>
									</div>
								</fieldset>
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">Semester</label>
									<div class="col-sm-10">
										<input type="number" class="form-control" id="inputEmail3" required placeholder="Semester" name="semester">
									</div>
								</div>

								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">Kelas</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="inputEmail3" required placeholder="Kelas" name="kelas">
									</div>
								</div>

								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">Jurusan</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="inputEmail3" required placeholder="Jurusan" name="jurusan">
									</div>
								</div>

								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
									<div class="col-sm-10">
										<textarea name="alamat" class="form-control" required id="" cols="30" rows="5"></textarea>
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
										<button type="submit" class="btn btn-success">Simpan</button>
									</div>
								</div>
							</form>
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
