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
	<form action="<?= base_url() ?>User_Kuesioner/proses_evaluasi" method="POST">
		<div class="row g-4">
			<div class="col-lg-12 col-sm-12 ">
				<div class="service-item pt-3">
					<div class="p-4">
						<i class="fa fa-3x fa-graduation-cap text-primary mb-4">Evaluasi</i>
						<div class="row">
							<div class="col">


								<input type="hidden" name="id_mahasiswa" class="form-control"
									value="<?= $this->session->userdata('id') ?>">
								<p>Demi meningkatakan kualitas proses belajar mengajar , Maka kami mengharapkan
									kesediaan saudara untuk mnegisi kuesioner beriku ini sesuai dengan keadaan
									sebenarnya . Nama dan Identitas Saudara kami rahasiakan dan tidak akan mempengaruhi
									baik serta nilai Saudara.</p>



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
						<div class="col-md-1">
							<td><b>NO</b></td>
						</div>
						<div class="col">
							<td><b>Pertanyaan</b></td>
						</div>
						<div class="col">
							<td><b>Nilai</b></td>


						</div>

					</div>


				</div>
			</div>
		</div>
		<?php $no = 1;
		foreach ($pernyataan as $u) { ?>
			<div class="card">
				<div class="card-body">
					<div class="container">
						<div class="row">
							<div class="col-md-1" style="text-align:center">
								<td>
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
									<select name="nilai[]" id="" class="form-control">
										<option value="5">Sangat Kurang Baik</option>
										<option value="6">Kurang Baik</option>
										<option value="7">Cukup</option>
										<option value="8">Baik</option>
										<option value="8">Sangat Baik</option>
									</select>

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
