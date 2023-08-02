<?php $this->load->view('admin/templates/head') ?>
<?php $this->load->view('admin/templates/slide') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Matakuliah </h1>


				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url() ?>Admin_home">Home</a></li>
						<li class="breadcrumb-item active">Matakuliah</li>
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
							<h3 class="card-title"> <a href="<?= base_url() ?>Admin_Matakuliah"><i
										class="fa fa-arrow-left" style="color:#eee"></i> </a> Form Matakuliah</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<?php foreach ($matakuliah as $m) { ?>
								<form action="<?php echo base_url() ?>Admin_Matakuliah/update" method="post">
									<div class="form-group row">
										<label for="inputEmail3" class="col-sm-2 col-form-label">Dosen</label>
										<div class="col-sm-10">
											<input type="hidden" name="id" id="" value="<?php echo $m->id ?>">
											<select name="id_dosen" class="form-control" required id="">
												<?php
												foreach ($dosen as $u) {
													?>
													<option value="<?= $u->id ?>"><?= $u->nama ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<label for="inputEmail3" class="col-sm-2 col-form-label">Semester</label>
										<div class="col-sm-10">
											<select name="id_mahasiswa" class="form-control" required id="">
												<?php
												foreach ($mahasiswa as $u) {
													?>
													<option value="<?= $u->semester ?>"><?= $u->semester ?></option>
												<?php } ?>
											</select>
										</div>
									</div>

									<div class="form-group row">
										<label for="inputEmail3" class="col-sm-2 col-form-label">Kode Matakuliah</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="inputEmail3"
												placeholder="Kode Matakuliah" value="<?php echo $m->kode_matakuliah ?>"
												required name="kode_matakuliah">
										</div>
									</div>


									<div class="form-group row">
										<label for="inputEmail3" class="col-sm-2 col-form-label">Matakuliah</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" value="<?php echo $m->matakuliah ?>"
												required id="inputEmail3" placeholder="Matakuliah" name="matakuliah">
										</div>
									</div>


									<div class="form-group row">
										<div class="col-sm-10">
											<button type="reset" class="btn btn-secondary ">Batal</button>
											<button type="submit" class="btn btn-success">Simpan</button>
										</div>
									</div>
								</form>
							<?php } ?>

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
