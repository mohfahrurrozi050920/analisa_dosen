<?php $this->load->view('user/templates/head') ?>
<?php $this->load->view('user/templates/nav') ?>
<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
	<div class="owl-carousel header-carousel position-relative">
		<div class="owl-carousel-item position-relative">
			<img class="img-fluid" src="<?= base_url() ?>assets/user/img/bg1.jpg" alt="">
			<div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
				style="background: rgba(24, 29, 56, .7);">
				<div class="container">
					<div class="row justify-content-start">
						<div class="col-sm-10 col-lg-8">
							<h5 class="text-primary text-uppercase mb-3 animated slideInDown">Universitas Hamzanwadi
							</h5>
							<h1 class="display-3 text-white animated slideInDown">Sistem Informasi Penilaian dan
								Evaluasi Kinerja Dosen</h1>
							<p class="fs-5 text-white mb-4 pb-2">Lorem ipsum dolor sit amet consectetur adipisicing
								elit. Commodi expedita maiores culpa reiciendis atque aut mollitia quibusdam. Minus, aut
								ratione?</p>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="owl-carousel-item position-relative">
			<img class="img-fluid" src="<?= base_url() ?>assets/user/img/bg2.jpeg" alt="">
			<div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
				style="background: rgba(24, 29, 56, .7);">
				<div class="container">
					<div class="row justify-content-start">
						<div class="col-sm-10 col-lg-8">
							<h5 class="text-primary text-uppercase mb-3 animated slideInDown">Universitas Hamzanwadi
							</h5>
							<h1 class="display-3 text-white animated slideInDown">Berdaya Saing Global</h1>
							<p class="fs-5 text-white mb-4 pb-2">Lorem ipsum dolor sit amet consectetur, adipisicing
								elit. Alias, velit. Quod voluptas tenetur iusto, est obcaecati quis asperiores accusamus
								non?</p>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Carousel End -->


<!-- Service Start -->
<!-- <div class="container-xxl py-5"> -->




<?php $this->load->view('user/templates/foot') ?>

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
<?php if ($this->session->flashdata('auth-login')): ?>
	<script>
		Swal.fire(
			'Maaf!',
			'Anda harus Login!',
			'info'
		)
	</script>
<?php endif; ?>
