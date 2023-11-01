<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Kredit BPR PKM</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="format-detection" content="telephone=no">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/font-awesome5.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/shop.css" class="color-switcher-link">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->
</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form" action="/">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="btn">Search</button>
			</form>
		</div>
	</div>

	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls p-normal">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div><!-- eof .modal -->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->

			<!--topline section visible only on small screens|-->

			<div class="header_absolute">
				<!-- <header class="page_header_side header_slide header-special header_side_right ds">

					<div class="scrollbar-macosx">
						<div class="side_header_inner">
							<p class="text-right mb-0 close-wrapper"><a href="javascript:void(0)">×</a></p>

							<div class="widget widget_recent_posts">
								<div class="form-wrapper">
									<form class="contact-form" method="post" action="proses_form.php">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<div class="row c-mb-20">
											<div class="col-12 form-title text-center form-builder-item">
												<div class="header title">
													<h4>Ajukan Kredit Sekarang</h4>
												</div>
											</div>
										</div>

										<div class="form-group has-placeholder">
											<label for="nama">Nama <span class="required">*</span></label>
											<input type="text" aria-required="true" size="30" value="" name="nama" id="nama" class="form-control" placeholder="Nama">
										</div>

										<div class="form-group has-placeholder">
											<label for="nomor">No. Telepon/Whatsapp <span class="required">*</span></label>
											<input type="tel" aria-required="true" size="30" value="" name="nomor" id="nomor" class="form-control" placeholder="No. Telepon/Whatsapp">
										</div>

										<div class="form-group has-placeholder">
											<label for="pekerjaan">Pekerjaan <span class="required">*</span></label>
											<select name="pekerjaan" id="pekerjaan" class="form-control">
												<option value="" selected hidden>Pekerjaan</option>
												<option value="Guru">Guru</option>
												<option value="Arsitek">Arsitek</option>
												<option value="Dokter">Dokter</option>
											</select>
										</div>

										<div class="form-group has-placeholder">
											<label for="domisili">Domisili <span class="required">*</span></label>
											<select name="domisili" id="domisili" class="form-control">
												<option value="" selected hidden>Domisili</option>
												<option value="Jakarta">Jakarta</option>
												<option value="Bandung">Bandung</option>
												<option value="Surabaya">Surabaya</option>
											</select>
										</div>

										<div class="form-group has-placeholder">
											<label for="jenis_jaminan">Jenis Jaminan <span class="required">*</span></label>
											<select name="jenis_jaminan" id="jenis_jaminan" class="form-control">
												<option value="" selected hidden>Jenis Jaminan</option>
												<option value="Sertifikat Tanah">Sertifikat Tanah</option>
												<option value="Girik">Girik</option>
												<option value="BPKB Kendaraan">BPKB Kendaraan</option>
											</select>
										</div>

										<div class="form-group has-placeholder">
											<label for="dokumen_jaminan">Dokumen Jaminan <span class="required">*</span></label>
											<select name="dokumen_jaminan" id="dokumen_jaminan" class="form-control">
												<option value="" selected hidden>Dokumen Jaminan</option>
												<option value="KTP">KTP</option>
												<option value="Akta Nikah">Akta Nikah</option>
												<option value="Kartu Keluarga">Kartu Keluarga</option>
											</select>
										</div>

										<div class="form-group has-placeholder">
											<label for="lokasi_jaminan">Lokasi Jaminan <span class="required">*</span></label>
											<select name="lokasi_jaminan" id="lokasi_jaminan" class="form-control">
												<option value="" selected hidden>Lokasi Jaminan</option>
												<option value="Jakarta">Jakarta</option>
												<option value="Bandung">Bandung</option>
												<option value="Surabaya">Surabaya</option>
											</select>
										</div>

										<div class="form-group has-placeholder">
											<label for="jumlah_pinjaman">Jumlah Pinjaman <span class="required">*</span></label>
											<input type="number" aria-required="true" size="30" value="" name="jumlah_pinjaman" id="jumlah_pinjaman" class="form-control" placeholder="Jumlah Pinjaman">
										</div>

										<div class="form-group has-placeholder">
											<label for="penghasilan">Penghasilan Per Bulan <span class="required">*</span></label>
											<input type="number" aria-required="true" size="30" value="" name="penghasilan" id="penghasilan" class="form-control" placeholder="Penghasilan Per Bulan">
										</div>

										<div class="form-group">
											<button type="submit" class="btn btn-gradient big-btn">Ajukan Kredit</button>
										</div>
									</form>
								</div>
							</div>

							<div class="widget widget_social_icons">
								<a href="#" class="fab fa-facebook-f rounded-icon bg-icon fs-16" title="facebook"></a>
								<a href="#" class="fab fa-twitter rounded-icon bg-icon fs-16" title="telegram"></a>
								<a href="#" class="fab fa-linkedin-in rounded-icon bg-icon fs-16" title="linkedin"></a>
								<a href="#" class="fab fa-instagram rounded-icon bg-icon fs-16" title="instagram"></a>
							</div>
						</div>
					</div>
				</header> -->

				<header class="page_header header-1 ds bg-transparent s-py-xl-20 s-py-10 ">

					<div class="container-fluid">

						<div class="row d-flex align-items-center justify-content-center">
							<div class="col-xl-3 col-md-4 col-12 text-center">
								<a href="index.html" class="logo">
									<img src="images/bpr/logo_putih.png" alt="">
									<span class="d-flex flex-column">
										<!-- <span class="logo-text color-darkgrey">PRIMA</span>
										<span class="logo-subtext">KREDIT</span> -->
									</span>
								</a>
							</div>
							<div class="col-xl-6 col-1 text-left">
								<!-- main nav start -->
								<nav class="top-nav">
									<ul class="nav sf-menu">
										<li>
											<a href="#home">Home</a>
										</li>

										<li>
											<a href="#about-us">About Us</a>
										</li>

										<li>
											<a href="#product">Our Product</a>
										</li>

										<li>
											<a href="#contact">Contact Us</a>
										</li>


									</ul>
								</nav>
							</div>
							<div class="col-xl-3 col-md-7 col-12  d-flex justify-content-md-end">
								<ul class="top-includes">
									<li class="special-menu">
										<span class="toggle_menu toggle_menu_side header-slide toggle_menu_side_special"><span></span></span>
									</li>
								</ul>
							</div>

						</div>

					</div>
					<span class="toggle_menu"><span>menu</span></span>
				</header>
			</div>

			<!-- <section id="home" class="page_slider">
				<div class="flexslider">
					<ul class="slides">
						<li class="ds cover-image">
							<img class="d-sm-none" id="slider-image-landscape" src="images/bpr/Banner.webp" alt="img Landscape">
                			<img class="d-sm-block" id="slider-image-portrait" src="images/bpr/Banner_portrait.webp" alt="img Portrait">
							<img id="slider-image-landscape" src="images/bpr/Banner.webp" alt="img Landscape" draggable="false">
							<img id="slider-image-portrait" src="images/bpr/Banner_portrait.webp" alt="img Portrait" draggable="false">
						</li>
					</ul>
				</div>
			</section> -->

			<section id="home" class="page_slider">
				<div class="flexslider">
					<img id="slider-image-landscape" src="images/bpr/Banner.webp" alt="img Landscape" draggable="false">
					<img id="slider-image-portrait" src="images/bpr/Banner_portrait.webp" alt="img Portrait" draggable="false">
				</div>
				<div class="form-wrapper">
					<form action="{{ route('admin.dashboard.store') }}" method="POST">
                        @csrf
						<div class="row c-mb-20">
							<div class="col-12 form-title text-center form-builder-item">
								<div class="header title">
									<h6>Ajukan Kredit Sekarang</h6>
								</div>
							</div>
						</div>
						<div class="row c-mb-10 c-gutter-10">
							<div class="col-lg-12 text-center">
								<div class="form-group has-placeholder">
									<label for="nama">Nama <span class="required">*</span></label>
									<input type="text" aria-required="true" size="30" value="" name="nama" id="nama" class="form-control" placeholder="Nama">
								</div>
							</div>
						</div>
						<div class="row c-mb-10 c-gutter-10">
							<div class="col-lg-12 text-center">
								<div class="form-group has-placeholder">
									<label for="nomor">No. Telepon/Whatsapp <span class="required">*</span></label>
									<input type="number" aria-required="true" size="30" value="" name="nomor" id="nomor" class="form-control" placeholder="No. Telepon/Whatsapp">
								</div>
							</div>
						</div>
						<div class="row c-mb-10 c-gutter-10">
							<div class="col-lg-12 text-center">
								<div class="form-group has-placeholder">
									<label for="pekerjaan">Pekerjaan <span class="required">*</span></label>
									<select name="pekerjaan" id="pekerjaan" aria-required="true" class="form-control">
										<option value="" selected disabled>Pekerjaan</option>
										<option value="PNS">PNS</option>
										<option value="Pegawai Swasta">Pegawai Swasta</option>
										<option value="Pensiunan PNS">Pensiunan PNS</option>
										<option value="Pensiunan Biasa">Pensiunan Biasa</option>
										<option value="TNI/Polri">TNI/Polri</option>
										<option value="Wiraswasta atau Pengusaha">Wiraswasta atau Pengusaha</option>
										<option value="Tidak Bekerja">Tidak Bekerja</option>
										<option value="Lainnya">Lainnya</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row c-mb-10 c-gutter-10">
							<div class="col-lg-12 text-center">
								<div class="form-group has-placeholder">
									<label for="domisili">Domisili <span class="required">*</span></label>
									<select name="domisili" id="domisili" class="form-control">
										<option value="" selected disabled>Domisili</option>
										<option value="Bekasi Kota">Bekasi Kota</option>
										<option value="Bekasi Kabupaten">Bekasi Kabupaten</option>
										<option value="Bogor Kota">Bogor Kota</option>
										<option value="Bogor Kabupaten">Bogor Kabupaten</option>
										<option value="Depok Kota">Depok Kota</option>
										<option value="Jakarta Timur">Jakarta Timur</option>
										<option value="Jakarta Selatan">Jakarta Selatan</option>
										<option value="Jakarta Barat">Jakarta Barat</option>
										<option value="Jakarta Utara">Jakarta Utara</option>
										<option value="Jakarta Pusat">Jakarta Pusat</option>
										<option value="Tangerang Selatan">Tangerang Selatan</option>
										<option value="Tangerang Kota">Tangerang Kota</option>
										<option value="Tangerang Kabupaten">Tangerang Kabupaten</option>
										<option value="Kota Serang">Kota Serang</option>
										<option value="Kabupaten Karawang">Kabupaten Karawang</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row c-mb-10 c-gutter-10">
							<div class="col-lg-12 text-center">
								<div class="form-group has-placeholder">
									<label for="jenis_jaminan">Jenis Jaminan <span class="required">*</span></label>
									<select name="jenis_jaminan" id="jenis_jaminan" class="form-control">
										<option value="" selected disabled>Jenis Jaminan</option>
										<option value="Sertifikat Tanah dan Bangunan (SHM/SHGB)">Sertifikat Tanah dan Bangunan (SHM/SHGB)</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row c-mb-10 c-gutter-10">
							<div class="col-lg-12 text-center">
								<div class="form-group has-placeholder">
									<label for="dokumen_jaminan">Dokumen Jaminan <span class="required">*</span></label>
									<select name="dokumen_jaminan" id="dokumen_jaminan" class="form-control">
										<option value="" selected disabled>Dokumen Jaminan</option>
										<option value="KTP">KTP</option>
										<option value="Akta Nikah">Akta Nikah</option>
										<option value="Kartu Keluarga">Kartu Keluarga</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row c-mb-10 c-gutter-10">
							<div class="col-lg-12 text-center">
								<div class="form-group has-placeholder">
									<label for="lokasi_jaminan">Lokasi Jaminan <span class="required">*</span></label>
									<select name="lokasi_jaminan" id="lokasi_jaminan" class="form-control">
										<option value="" selected disabled>Lokasi Jaminan</option>
										<option value="Bekasi Kota">Bekasi Kota</option>
										<option value="Bekasi Kabupaten">Bekasi Kabupaten</option>
										<option value="Bogor Kota">Bogor Kota</option>
										<option value="Bogor Kabupaten">Bogor Kabupaten</option>
										<option value="Depok Kota">Depok Kota</option>
										<option value="Jakarta Timur">Jakarta Timur</option>
										<option value="Jakarta Selatan">Jakarta Selatan</option>
										<option value="Jakarta Barat">Jakarta Barat</option>
										<option value="Jakarta Utara">Jakarta Utara</option>
										<option value="Jakarta Pusat">Jakarta Pusat</option>
										<option value="Tangerang Selatan">Tangerang Selatan</option>
										<option value="Tangerang Kota">Tangerang Kota</option>
										<option value="Tangerang Kabupaten">Tangerang Kabupaten</option>
										<option value="Kota Serang">Kota Serang</option>
										<option value="Kabupaten Karawang">Kabupaten Karawang</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row c-mb-10 c-gutter-10">
							<div class="col-lg-12 text-center">
								<div class="form-group has-placeholder">
									<label for="jumlah_pinjaman">Jumlah Pinjaman <span class="required">*</span></label>
									<input type="number" aria-required="true" size="30" value="" name="jumlah_pinjaman" id="jumlah_pinjaman" class="form-control" placeholder="Jumlah Pinjaman">
								</div>
							</div>
						</div>
						<div class="row c-mb-10 c-gutter-10">
							<div class="col-lg-12 text-center">
								<div class="form-group has-placeholder">
									<label for="penghasilan">Penghasilan Per Bulan <span class="required">*</span></label>
									<input type="number" aria-required="true" size="30" value="" name="penghasilan" id="penghasilan" class="form-control" placeholder="Penghasilan Per Bulan">
								</div>
							</div>
						</div>
						<div class="row c-mb-10 c-gutter-10">
							<div class="col-sm-12 mb-0 mt-50">
								<div class="form-group">
									<button type="submit" name="submit" class="btn btn-gradient big-btn">Ajukan Kredit</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</section>

				<section id="about-us" class="ls main-testimonial s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60">
					<div class="center-element">
						<div>
							<h5>KENAPA HARUS MEMILIH KAMI</h5>
						</div>
					</div>
					<div class="info-box">
						<div class="info-box-column">
							{{-- <i class="info-box-icon fas fa-clock"></i> --}}
							<img src="images/bpr/icon/Cepat.png" alt="icon" style="width: 50px; height: 50px;">
							<h5>Cepat</h5>
							<p>Kami akan segera memproses permohonan Anda sesaat setelah Anda mengisi Form Aplikasi, dan memberikan kepastian
								kepada Anda dalam 3 hari kerja setelah syarat dan dokumen lengkap.
							</p>
						</div>
						<div class="info-box-column">
							{{-- <i class="info-box-icon fas fa-check"></i> --}}
							<img src="images/bpr/icon/Mudah.png" alt="icon" style="width: 50px; height: 50px;">
							<h5>Mudah</h5>
							<p>Kami selalu mencoba mengerti kebutuhan Anda. Akan menyarankan Produk keuangan terbaik dan sesuai untuk keperluan
								Anda. Ceritakan kepada Kami kebutuhan Anda saat ini.
							</p>
						</div>
						<div class="info-box-column">
							{{-- <i class="info-box-icon fas fa-shield-alt"></i> --}}
							<img src="images/bpr/icon/Aman.png" alt="icon" style="width: 50px; height: 50px;">
							<h5>Aman</h5>
							<p>Kami didukung oleh tim yang profesional dan siap membantu Anda. Juga telah terdaftar dan diawasi oleh Otoritas Jasa Keuangan
								dan merupakan Peserta Penjaminan Lembaga Penjamin Simpanan.
							</p>
						</div>
					</div>
				</section>

			<section id="4-langkah-mudah" class="ds text-sm-left text-center container-px-0 c-gutter-0">
				<div class="center-element">
					<div>
						<h5>4 LANGKAH MUDAH PENGAJUAN PINJAMAN</h5>
					</div>
				</div>
				<div class="container-fluid">
					<div class="row service-v2">
						<div class="col-md-3"> <!-- 25% lebar, 4 kolom x 25% = 100% -->
							<div class="icon-box service-single with-icon layout2 ds text-center">
								<a class="link-icon" href="">
									<div class="icon-styled  fs-50">
										{{-- <i class="far fa-file-alt"></i> --}}
                                        <img src="images/bpr/icon/Ajukan Kredit.png" alt="icon" style="width: 50px; height: 50px;">
									</div>
								</a>
								<a href="">
									<h5>
										Ajukan Kredit
									</h5>
								</a>

								<p>Melalui form online di website kami atau segera hubungi Kami melalui aplikasi chat dan telepon.</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="icon-box service-single with-icon layout2 ds text-center">
								<a class="link-icon" href="">
									<div class="icon-styled  fs-50">
										{{-- <i class="far fa-envelope"></i> --}}
                                        <img src="images/bpr/icon/Kami Merespon.png" alt="icon" style="width: 50px; height: 50px;">
									</div>
								</a>
								<a href="">
									<h5>
										Kami Merespon
									</h5>
								</a>

								<p>Petugas Kami akan segera menghubungi Anda dan membantu Anda mengumpulkan data.</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="icon-box service-single with-icon layout2 ds text-center">
								<a class="link-icon" href="">
									<div class="icon-styled  fs-50">
										{{-- <i class="fas fa-check-square"></i> --}}
                                        <img src="images/bpr/icon/Proses Survey.png" alt="icon" style="width: 50px; height: 50px;">
									</div>
								</a>
								<a href="">
									<h5>
										Proses Survey
									</h5>
								</a>

								<p>Kami akan melakukan survey ke lokasi jaminan dan usaha, dilanjutkan analisa data dan komite kredit.</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="icon-box service-single with-icon layout2 ds text-center">
								<a class="link-icon" href="">
									<div class="icon-styled  fs-50">
										{{-- <i class="fas fa-coins"></i> --}}
                                        <img src="images/bpr/icon/Pencairan Dana.png" alt="icon" style="width: 50px; height: 50px;">
									</div>
								</a>
								<a href="">
									<h5>
										Pencairan Dana
									</h5>
								</a>
								<p>Jika pengajuan Anda disetujui, Anda akan dihubungi oleh petugas Kami untuk menerima pencairan dana.</p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="product" class="ds s-overlay portfolio-section  s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60 text-center">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h2 class="special-heading text-center">
								<span class="text-capitalize">
									PRODUK TERBAIK KAMI
								</span>
							</h2>
							<div class="divider-50 hidden-below-lg"></div>
							<div class="divider-30 hidden-above-lg"></div>
							<!-- <div class="row justify-content-center">
								<div class="col-md-10 col-xl-8">
									<div class="filters gallery-filters">
										<a href="#" data-filter="*" class="active selected">show All</a>
										<a href="#" data-filter=".corporate">Gas</a>
										<a href="#" data-filter=".business">oil</a>
										<a href="#" data-filter=".entertainment">Industry</a>
										<a href="#" data-filter=".innovations">eco</a>
										<a href="#" data-filter=".news">Factory</a>

									</div>
								</div>
							</div> -->
							<div class="info-box">
								<div class="info-box-column2">
									<i class="info-box-icon2 fas fa-credit-card"></i>
									<h5>KREDIT MULTIGUNA</h5>
									<p>Plafon mulai dari 50 juta hingga 2 miliar.
										Tenor fleksibel dari 12 bulan hingga 60 bulan.
										Angsuran flat (tidak berubah) hingga masa akhir kredit.
										Jaminan SHM/SHGB rumah atau ruko di perumahan
										atau cluster yang dapat dilalui 2 kendaraan roda 4.
										Dapat digunakan untuk berbagai kebutuhan Anda.<br>
										Bisa takeover dari bank lain.<br>
									</p>
								</div>
								<div class="info-box-column2">
									<i class="info-box-icon2 fas fa-money-bill-wave"></i>
									<h5>KREDIT DANA XPRES</h5>
									<p>Plafon mulai dari 10 juta hingga 100 juta.
										Tenor dari 12 bulan hingga 60 bulan sesuai plafon kredit.
										Angsuran flat (tidak berubah) hingga masa akhir kredit.
										Jaminan SHM/SHGB rumah di perkampungan
										yang hanya dapat dilalui motor (tidak masuk mobil).<br>
										Dapat digunakan untuk berbagai kebutuhan Anda. Bisa takeover dari bank lain.
									</p>
								</div>
							</div>

							<div class="mt--30"></div>
							<div class="row">
								<div class="col-lg-12">
									<div class="divider-60"></div>
										<h5>Dapatkan Pinjaman Hingga 2 Miliar<br>
										Cepat & Mudah</h5>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="divider-60"></div>
									<a class="btn btn-gradient big-btn" href="https://wa.me/0811877875">AJUKAN SEKARANG</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="persyaratan-dokumen" class="ls main-testimonial s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60">
				<div class="center-element">
					<div>
						<h5>PERSYARATAN DOKUMEN PENGAJUAN</h5>
					</div>
				</div>
				<div class="info-box">
					<div class="info-box-column3">
						<h5>KARYAWAN</h5>
						<p>1. KTP Pemohon dan Pasangan<br>
							2. Kartu Keluarga<br>
							3. Akta Nikah /Akta Cerai<br>
							4. SHM/SHGB atas nama Pemohon/Pasangan/Orang Tua/Mertua<br>
							5. Slip Gaji<br>
							6. Rekening Koran 3 Bulan Terakhir<br>
						</p>
					</div>
					<div class="info-box-column3">
						<h5>UMKM</h5>
						<p>1. KTP Pemohon dan Pasangan<br>
							2. Kartu Keluarga<br>
							3. Akta Nikah/Akta Cerai<br>
							4. SHM/SHGB atas nama Pemohon/Pasangan/Orang Tua/Mertua<br>
							5. Surat Keterangan Usaha<br>
							6. Pembukuan 3 Bulan Terakhir<br>
						</p>
					</div>
					<div class="info-box-column3">
						<h5>Badan Usaha</h5>
						<p>1. Badan Usaha Telah Beroperasi Minimal 1 Tahun<br>
							2. Legalitas Badan Usaha<br>
							3. KTP Seluruh Pengurus<br>
							4. SHM/SHGB atas nama Badan Usaha/Pengurus<br>
							5. Laporan Keuangan<br>
							6. Rekening Koran 1 Tahun Terakhir<br>
						</p>
					</div>
				</div>

				<div class="center-element">
					<div>
						<h5>ILUSTRASI ANGSURAN</h5>
							<div class="table-container">
								<div class="table-left">
							  <table>
								<tr>
									<td rowspan="2">PLAFON</td>
									<td colspan="5">MULTIGUNA</td>
								</tr>
								<tr>
									<td>12</td>
									<td>24</td>
									<td>36</td>
									<td>48</td>
									<td>60</td>
								</tr>
								<tr>
									<td>100.000.000</td>
									<td>9.554.000</td>
									<td>5.388.000</td>
									<td>4.030.000</td>
									<td>3.429.000</td>
									<td>3.054.000</td>
								</tr>
								<tr>
									<td>250.000.000</td>
									<td>23.553.000</td>
									<td>13.469.000</td>
									<td>10.073.000</td>
									<td>8.571.000</td>
									<td>7.634.000</td>
								</tr>
								<tr>
									<td>500.000.000</td>
									<td>47.523.000</td>
									<td>26.686.000</td>
									<td>19.880.000</td>
									<td>16.859.000</td>
									<td>14.971.000</td>
								</tr>
								<tr>
									<td>700.000.000</td>
									<td>66.531.000</td>
									<td>37.361.000</td>
									<td>27.832.000</td>
									<td>23.603.000</td>
									<td>20.969.000</td>
								</tr>
								<tr>
									<td>1.000.000.000</td>
									<td>95.045.000</td>
									<td>53.372.000</td>
									<td>39.760.000</td>
									<td>33.718.000</td>
									<td>29.941.000</td>
								</tr>
							  </table>
							</div>
							<div class="table-right">
							  <table>
								<tr>
									<td rowspan="2">PLAFON</td>
									<td colspan="5">DANA XPRES</td>
								</tr>
								<tr>
									<td>12</td>
									<td>24</td>
									<td>36</td>
									<td>48</td>
									<td>60</td>
								</tr>
								<tr>
									<td>10.000.000</td>
									<td>1.025.000</td>
									<td>612.000</td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>25.000.000</td>
									<td>2.562.000</td>
									<td>1.530.000</td>
									<td>1.203.000</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>50.000.000</td>
									<td>5.024.000</td>
									<td>2.953.000</td>
									<td>2.291.000</td>
									<td>1.979.000</td>
									<td></td>
								</tr>
								<tr>
									<td>75.000.000</td>
									<td>7.535.000</td>
									<td>4.429.000</td>
									<td>3.436.000</td>
									<td>2.969.000</td>
									<td></td>
								</tr>
								<tr>
									<td>100.000.000</td>
									<td>10.047.000</td>
									<td>5.905.000</td>
									<td>4.581.000</td>
									<td>3.958.000</td>
									<td>3.614.000</td>
								</tr>
							  </table>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- <section id="faq" class="ls  s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60 text-sm-left text-center c-gutter-60">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-6">
							<h2 class="special-heading text-sm-left text-center">
								<span class="text-capitalize">
									FAQ & Information
								</span>
							</h2>
							<div class="divider-50 hidden-below-lg"></div>
							<div class="divider-30 hidden-above-lg"></div>
							<div id="accordion01" role="tablist">
								<div class="card">
									<div class="card-header" role="tab" id="collapse01_header">
										<h5>
											<a data-toggle="collapse" href="#collapse01" aria-expanded="true" aria-controls="collapse01">
												Get to know us
											</a>
										</h5>
									</div>

									<div id="collapse01" class="collapse show" role="tabpanel" aria-labelledby="collapse01_header" data-parent="#accordion01">
										<div class="card-body">
											Our team has been gelpingclients throughout the country for 10 years lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" role="tab" id="collapse02_header">
										<h5>
											<a class="collapsed" data-toggle="collapse" href="#collapse02" aria-expanded="false" aria-controls="collapse02">
												Get Informed
											</a>
										</h5>
									</div>
									<div id="collapse02" class="collapse" role="tabpanel" aria-labelledby="collapse02_header" data-parent="#accordion01">
										<div class="card-body">
											Our team has been gelpingclients throughout the country for 10 years lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" role="tab" id="collapse03_header">
										<h5>
											<a class="collapsed" data-toggle="collapse" href="#collapse03" aria-expanded="false" aria-controls="collapse03">
												Get Help
											</a>
										</h5>
									</div>
									<div id="collapse03" class="collapse" role="tabpanel" aria-labelledby="collapse03_header" data-parent="#accordion01">
										<div class="card-body">
											Our team has been gelpingclients throughout the country for 10 years lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" role="tab" id="collapse04_header">
										<h5>
											<a class="collapsed" data-toggle="collapse" href="#collapse04" aria-expanded="false" aria-controls="collapse04">
												Contact Us
											</a>
										</h5>
									</div>
									<div id="collapse04" class="collapse" role="tabpanel" aria-labelledby="collapse04_header" data-parent="#accordion01">
										<div class="card-body">
											Our team has been gelpingclients throughout the country for 10 years lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" role="tab" id="collapse09_header">
										<h5>
											<a class="collapsed" data-toggle="collapse" href="#collapse09" aria-expanded="false" aria-controls="collapse09">
												Other Questions
											</a>
										</h5>
									</div>
									<div id="collapse09" class="collapse" role="tabpanel" aria-labelledby="collapse09_header" data-parent="#accordion01">
										<div class="card-body">
											Our team has been gelpingclients throughout the country for 10 years lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-6">
							<div class="divider-30 hidden-above-lg"></div>
							<div class="row isotope-wrapper masonry-layout images-grid c-mb-30 c-gutter-30">
								<div class="col-xl-4 col-sm-6  ">
									<a href="#">
										<div class="bordered text-center p-50 rounded">
											<img src="images/partners/01.png" alt="">
										</div>
									</a>
								</div>
								<div class="col-xl-4 col-sm-6  ">
									<a href="#">
										<div class="bordered text-center p-50 rounded">
											<img src="images/partners/02.png" alt="">
										</div>
									</a>
								</div>
								<div class="col-xl-4 col-sm-6  ">
									<a href="#">
										<div class="bordered text-center p-50 rounded">
											<img src="images/partners/03.png" alt="">
										</div>
									</a>
								</div>
								<div class="col-xl-4 col-sm-6  ">
									<a href="#">
										<div class="bordered text-center p-50 rounded">
											<img src="images/partners/04.png" alt="">
										</div>
									</a>
								</div>
								<div class="col-xl-4 col-sm-6  ">
									<a href="#">
										<div class="bordered text-center p-50 rounded">
											<img src="images/partners/05.png" alt="">
										</div>
									</a>
								</div>
								<div class="col-xl-4 col-sm-6  ">
									<a href="#">
										<div class="bordered text-center p-50 rounded">
											<img src="images/partners/06.png" alt="">
										</div>
									</a>
								</div>
								<div class="col-xl-4 col-sm-6  ">
									<a href="#">
										<div class="bordered text-center p-50 rounded">
											<img src="images/partners/07.png" alt="">
										</div>
									</a>
								</div>
								<div class="col-xl-4 col-sm-6  ">
									<a href="#">
										<div class="bordered text-center p-50 rounded">
											<img src="images/partners/08.png" alt="">
										</div>
									</a>
								</div>
								<div class="col-xl-4 col-sm-6  ">
									<a href="#">
										<div class="bordered text-center p-50 rounded">
											<img src="images/partners/09.png" alt="">
										</div>
									</a>
								</div>
							</div>
							<div class="mt--30"></div>
						</div>
					</div>
				</div>
			</section> -->

			<section id="contact" class="ls ms s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60">
				<div class="container">
					<div class="row">
						<div class="col-12">

							<h4 class="special-heading text-center">
								<span class="text-capitalize">
									Hubungi Account Officer kami<br>
									Untuk Info Lebih Lanjut<br>
								</span>
							</h4>
							<div class="divider-line bg-maincolor text-center"></div>
							<div class="fw-divider-space divider-25"></div>
							<!-- <p class="special-heading text-center">
								<span>
									Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam.
								</span>
							</p> -->

							<div class="image-container">
								<img src="images/bpr/4.jpg" alt="Nomor Telepon" onclick="window.location.href='tel:0811877875';">
								<img src="images/bpr/5.jpg" alt="Nomor Whatsapp" onclick="window.location.href='https://wa.me/0811877875';">
							</div>

						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<h6 class="special-heading text-center">
								<span class="text-capitalize">
									Alamat BPR Prima Kredit Mandiri
								</span>
							</h6>
							<p align="center" style="text-align: center;">
								Kantor Pusat :<br>
								Jl. Curug Sangereng Ruko L'Agricola Blok
								B26-27, Gading Serpong, Banten 15811
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-lg-3">
							<h6 class="special-heading">
								<p align="left" style="text-align: left;">
									Cabang Karawaci:
								</p>
							</h6>
							<p align="left" style="text-align: left;">
								Jl. Beringin Raya No. 150A
								RT. 003 RW. 002
								Kel. Nusa Jara
								Kec. Karawaci Tangerang 15116
							</p>
						</div>
						<div class="col-12 col-lg-3">
							<h6 class="special-heading">
								<p align="left" style="text-align: left;">
									Cabang Gading Serpong:
								</p>
							</h6>
							<p align="left" style="text-align: left;">
								Jl. Curug Sangereng Ruko L'Agricola
								Blok B26-27,
								Gading Serpong,
								Banten 15811
							</p>
						</div>
						<div class="col-12 col-lg-3">
							<h6 class="special-heading">
								<p align="left" style="text-align: left;">
									Cabang BSD:
								</p>
							</h6>
							<p align="left" style="text-align: left;">
								Ruko Tol Boulevard Blok F No.25,
								Jl. Kapten Soebijanto Djojohadikusumo,
								Serpong, Tangerang Selatan 15318
							</p>
						</div>
						<div class="col-12 col-lg-3">
							<h6 class="special-heading">
								<p align="left" style="text-align: left;">
									Cabang Bintaro:
								</p>
							</h6>
							<p align="left" style="text-align: left;">
								Ruko Althia Boulevard Blok GB/AP-20
								Jl.Graha Bintaro Jaya Tangerang Selatan
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-lg-3">
							<h6 class="special-heading">
								<p align="left" style="text-align: left;">
									Cabang Ciledug:
								</p>
							</h6>
							<p align="left" style="text-align: left;">
								Jl. Raden Saleh No.4, RT.004/RW.005,
								Karang Tengah,
								Kota Tangerang
								Selatan 15151
							</p>
						</div>
						<div class="col-12 col-lg-3">
							<h6 class="special-heading">
								<p align="left" style="text-align: left;">
									Cabang Ciputat:
								</p>
							</h6>
							<p align="left" style="text-align: left;">
								Jl. Dewi Sartika Kav 3 No.B8, Ciputat,
								Pisangan,
								Kota Tangerang
								Selatan 15151
							</p>
						</div>
						<div class="col-12 col-lg-3">
							<h6 class="special-heading">
								<p align="left" style="text-align: left;">
									Cabang Depok:
								</p>
							</h6>
							<p align="left" style="text-align: left;">
								Jl. Margonda Raya No.263E
								Depok Jawa Barat
							</p>
						</div>
						<div class="col-12 col-lg-3">
							<h6 class="special-heading">
								<p align="left" style="text-align: left;">
									Cabang Cibinong:
								</p>
							</h6>
							<p align="left" style="text-align: left;">
								Ruko Mayor Oking II Blok B1 No.1,
								Jl. Mayor Oking Cibinong 16918
							</p>
						</div>
					</div>
				</div>
			</section>

				<footer class="footer">
					<div class="footer-logo">
						<p class="ml-1">BPR Prima Kredit Mandiri
							Terdaftar dan Di Awasi Oleh
							Otoritas Jasa Keuangan
						</p>
						<img src="images/bpr/OJK_Logo.png" alt="Logo" width="200">
					</div>
					<!-- <div class="form-group">
						<input class="btn btn-gradient big-btn" type="submit" value="Ajukan Kredit Sekarang">
					</div> -->
					<div class="footer-logo">
						<img src="images/bpr/Lembaga Penjamin Simpanan.png" alt="Logo" width="200">
						<p class="ml-2">BPR Prima Kredit Mandiri
							Peserta Penjaminan
							Lembaga Penjamin Simpanan
						</p>
					</div>
				</footer>

			<footer class="page_footer  text-center c-gutter-100 text-sm-left  ds">
				<footer class="page_footer  text-center c-gutter-100 text-sm-left  ds">
					<div class="container">
						<div class="row justify-content-center">
							<!-- <div class="col-lg-4 col-md-6 order-1 order-lg-1  animate" data-animation="fadeInUp">
								<div class="fw-divider-space divider-xl-160 divider-lg-130 divider-md-90 divider-60"></div>
								<a href="./" class="logo">
									<img src="images/bpr/OJK_Logo.png" alt="Logo">
								</a>
								<p>
									BPR Prima Kredit Mandiri
									Terdaftar dan Di Awasi Oleh
									Otoritas Jasa Keuangan
								</p>
							</div> -->

								<h6 class="fs-12 text-uppercase">Copyright &copy; <span class="copyright_year">2023</span>
									<a href="#home"> PT BPR PRIMA KREDIT MANDIRI.</a>
									ALL RIGHTS RESERVED.</h6>
							</div>
						</div>
					</div>
				</footer>
			</footer>
		</div><!-- eof #box_wrapper -->
	</div><!-- eof #canvas -->


	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>


	<!-- Google Map Script -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0pr5xCHpaTGv12l73IExOHDJisBP2FK4&callback=initGoogleMap"></script>

</body>

</html>
