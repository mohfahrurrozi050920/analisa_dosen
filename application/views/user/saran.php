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
	<form action="<?= base_url() ?>User_Kuesioner/proses_saran" method="POST">
		<div class="row g-4">
			<div class="col-lg-12 col-sm-12 ">
				<div class="service-item pt-3">
					<div class="p-4">
						<i class="fa fa-3x fa-graduation-cap text-primary mb-4">Saran</i>
						<div class="row">
							<div class="col">


								<input type="hidden" name="id_mahasiswa" class="form-control"
									value="<?= $this->session->userdata('id') ?>">
								<p>Demi meningkatakan kualitas proses belajar mengajar , Maka kami mengharapkan
									kesediaan saudara untuk mnegisi kuesioner beriku ini sesuai dengan keadaan
									sebenarnya . Nama dan Identitas Saudara kami rahasiakan dan tidak akan mempengaruhi
									baik serta nilai Saudara.</p>

								<div>
									<label for="">Pilih Matakuliah</label>
									<select name="id_matakuliah" id="" class="form-control">
										<?php foreach ($saran as $u) { ?>
											<option value="<?= $u->id ?>">[<?= $u->kode_matakuliah ?>]<?= $u->matakuliah ?> | <?= $u->nama_dosen ?></option>
										<?php } ?>
									</select>
								</div>
								<br>
								<div class="card">
											<div class="card-body">
												<Label>Masukkan Saran anda</Label>
												<textarea name="saran" class="form-control" placeholder="Masukan saran anda yang sebenarnya" id="" cols="30" rows="15"></textarea>
											</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

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
