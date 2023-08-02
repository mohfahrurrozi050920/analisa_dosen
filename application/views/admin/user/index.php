<?php $this->load->view('admin/templates/head') ?>
<?php $this->load->view('admin/templates/slide') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Tabel User </h1>

					<br>
					<a href="<?= base_url() ?>Admin_User/tambah" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Data</a>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url() ?>Admin_home">Home</a></li>
						<li class="breadcrumb-item active">User</li>
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
							<h3 class="card-title">Tabel User</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<!-- Small boxes (Stat box) -->
							<div class="table-responsive ">
								<table id="example" class="display nowrap" style="width:100%">
									<thead>
										<tr>
											<th>NO</th>
											<th>Username</th>
											<th>Role</th>
											<th>Tanggal Buat</th>
											<th>Opsi</th>

										</tr>
									</thead>
									<tbody>
										<?php  
										$no=1;
										foreach($user as $u){
										?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $u->username ?></td>
											<td>
											<span class="badge badge-success">Administrator</span>
											</td>
											<td>
											<?= $u->tgl_buat?>
											</td>
											<td>
												<a href="<?= base_url() ?>Admin_User/edit/<?= $u->id ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
												<a href="<?= base_url() ?>Admin_User/hapus/<?= $u->id ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
											</td>

										</tr>

											<?php }?>
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
