<?php $this->load->view('user/templates/head') ?>
<?php $this->load->view('user/templates/nav') ?>
<!-- Carousel Start -->

<br>
<br>
<br>
<br>
<!-- Service Start -->
<!-- <div class="container-xxl py-5"> -->
<div class="container">
	<form action="<?= base_url() ?>User_Kuesioner/proses" method="POST">
		<div class="row g-4">
			<div class="col-lg-12 col-sm-12 ">
				<div class="service-item pt-3">
					<div class="p-4">
						<i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
						<div class="row">
							<div class="col">
								<div>
									<label for="">Nama Lengkap</label>
									<input type="hidden" name="id_mahasiswa" class="form-control"
										value="<?= $this->session->userdata('id') ?>">
									<input type="text" class="form-control"
										value="<?= $this->session->userdata('nama') ?>">
								</div>
								<div>
									<label for="">Semester</label>
									<input type="text" name="semester" class="form-control"
										value="<?= $this->session->userdata('semester') ?>">
								</div>
							</div>
							<div class="col">

								<div>
									<label for="">Dosen</label>
									<select name="id_dosen" class="form-control" id="">
										<?php
										foreach ($dosen as $u) {
											?>

											<option value="<?= $u->id ?>"><?= $u->nama ?></option>
										<?php } ?>
									</select>
								</div>

								<div>
									<label for="">Matakuliah</label>
									<select name="id_matakuliah" class="form-control" id="">
										<?php
										foreach ($matakuliah as $u) {
											?>

											<option value="<?= $u->id ?>"><?= $u->matakuliah ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="card" style="background-color:silver;text-align:center">
			<div class="card-body">
				<div class="container">
					<div class="row">
						<div class="col-md-1" >
						<td><b>NO</b></td>
						</div>
						<div class="col">
						<td><b>Pertanyaan</b></td>
						</div>
						<div class="col">
							<td><b>Nilai 0 - 10</b></td>


						</div>

					</div>


				</div>
			</div>
		</div>
		<?php $no = 1;
		foreach ($pernyataan as $u) { ?>
			<div class="card" >
				<div class="card-body">
					<div class="container">
						<div class="row">
							<div class="col-md-1" style="text-align:center">
								<td >
									<?= $no++ ?>.
								</td>
							</div>
							<div class="col">
								<td>
									<?= $u->pertanyaan ?>
								</td>
							</div>
							<div class="col">
								<td>
									<input type="hidden" name="id_pernyataan[]" value="<?= $u->id ?>" id="">
									<input type="number" class="form-control" style="text-align:center;font-size:20" name="nilai[]" value="0" min="0" max="10" id="">

								</td>


							</div>

						</div>


					</div>
				</div>
			</div>

		<?php } ?>
		<div class="modal-footer">

			<button type="submit" class="btn btn-primary">Kirim Jawaban</button>
		</div>

		<!-- <table class="table">
			<tr style="text-align:center" class="table-dark">
				<th rowspan="2" width="10px" bgcolor="yellow">NO</th>
				<th rowspan="2" bgcolor="yellow">Pertanyaan</th>
				<th colspan="7" bgcolor="#00ff80">Nilai</th>
			</tr>
			<tr class="table-dark">
				<th>5</th>
				<th>6</th>
				<th>7</th>
				<th>8</th>
				<th>9</th>
				<th>10</th>
				<th></th>
			</tr>


			<tr>
				<td>
					1
				</td>

				<td>
					Memberikan dan menjelaskan Silabus
					<input type="hidden" class="form-control" id="per" class="form-control" name="isi"
						value="Memberikan dan menjelaskan Silabus" id="">
				</td>


				<td>

					<input type="checkbox" class="form-check-input" name="nilai5" value="5" id="per">

				</td>
				<td>

					<input type="checkbox" class="form-check-input" name="nilai6" value="6" id="per">
				</td>
				<td>
					<input type="checkbox" class="form-check-input" name="nilai7" value="7" id="per">
				</td>
				<td>
					<input type="checkbox" class="form-check-input" name="nilai8" value="8" id="per">
				</td>
				<td>
					<input type="checkbox" class="form-check-input" name="nilai9" value="9" id="per">
				</td>
				<td>
					<input type="checkbox" class="form-check-input" name="nilai10" value="10" id="per">
				</td>
				<td><button type="submit" class="btn btn-primary">Kirim Jawaban</button></td>
			</tr>



			<tr>
				<td>
					2
				</td>

				<td>
					Memberikan dan menjelaskan Kontrak Kuliah
					<input type="hidden" class="form-control" id="per" class="form-control" name="isi"
						value="Memberikan dan menjelaskan Kontrak Kuliah" id="">
				</td>


				<td>

					<input type="checkbox" class="form-check-input" name="nilai5" value="5" id="per">

				</td>
				<td>

					<input type="checkbox" class="form-check-input" name="nilai6" value="6" id="per">
				</td>
				<td>
					<input type="checkbox" class="form-check-input" name="nilai7" value="7" id="per">
				</td>
				<td>
					<input type="checkbox" class="form-check-input" name="nilai8" value="8" id="per">
				</td>
				<td>
					<input type="checkbox" class="form-check-input" name="nilai9" value="9" id="per">
				</td>
				<td>
					<input type="checkbox" class="form-check-input" name="nilai10" value="10" id="per">
				</td>
				<td><button type="submit" class="btn btn-primary">Kirim Jawaban</button></td>
			</tr>

		</table> -->
		<!-- <div class="modal-footer">

			<button type="submit" class="btn btn-primary">Kirim Jawaban</button>
		</div>
		 -->
</div>

</div>


</form>
</div>
<!-- Service End -->


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php $this->load->view('user/templates/foot') ?>
<?php if ($this->session->flashdata('success-kuesioner')): ?>
	<script>
		Swal.fire(
			'Berhasil!',
			'Selamat Kamu Berhasil Pengisian Penilaian Dosen',
			'success'
		)
	</script>
<?php endif; ?>
