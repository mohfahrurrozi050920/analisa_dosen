<?php $this->load->view('admin/templates/head') ?>
<?php $this->load->view('admin/templates/slide') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Tabel Pernyataan Kuesioner </h1>

					<br>
					<a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal"><i
							class="fa fa-plus"></i> Tambah Data</a>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url() ?>Admin_home">Home</a></li>
						<li class="breadcrumb-item active">Kuesioner</li>
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
							<h3 class="card-title">Tabel Pernyataan</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<!-- Small boxes (Stat box) -->
							<div class="table-responsive ">
								<table id="example" class="display nowrap" style="width:100%">
									<thead>
										<tr>
											<th>NO</th>
											<th>Penyataan</th>

											<th>Opsi</th>

										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;

										foreach ($kuesioner as $u) { ?>

											<tr>
												<td>
													<?= $no++ ?>
												</td>
												<td>
													<?= $u->pertanyaan ?>
												</td>

												<td>
													<a href="<?= base_url() ?>Admin_Kuesioner/hapus/<?= $u->id ?>"
														class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
												</td>

											</tr>
										<?php } ?>

									</tbody>

								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.row -->
		<!-- Main row -->

		<!-- /.card -->
	</section>



	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Pernyataan Kuesioner</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?= base_url() ?>Admin_Kuesioner/simpan" method="POST">
					<div class="modal-body">
						<div>
							<label for="">Pernyataan</label>
							<input type="text" class="form-control" name="pertanyaan" id="">
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</form>

			</div>
		</div>
	</div>
	<!-- right col -->
</div>
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php $this->load->view('admin/templates/foot') ?>

<script>
	$(document).ready(function () {
		$('#example').DataTable({
			dom: 'Bfrtip',
			buttons: [
				'excel', 'pdf', 'print'
			]
		});
	})
</script>
<?php if ($this->session->flashdata('success')): ?>
	<script>
		Swal.fire(
			'Berhasil!',
			'Proses anda Berhasil',
			'success'
		)
	</script>
<?php endif; ?>
