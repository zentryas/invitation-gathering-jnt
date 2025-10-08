<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Undangan Gathering Sahabat J&T Community</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Undangan Gathering Sahabat J&T Community" />
	<link rel="icon" href="{{ asset('templates') }}/images/icon.jpg" type="image/png" />

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css2?family=Sacramento&family=Poppins&display=swap" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('templates') }}/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('templates') }}/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('templates') }}/css/bootstrap.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('templates') }}/css/magnific-popup.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{ asset('templates') }}/css/owl.carousel.min.css">
	<link rel="stylesheet" href="{{ asset('templates') }}/css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('templates') }}/css/style.css">
	<!-- Custom style  -->
	<link rel="stylesheet" href="{{ asset('templates') }}/css/custom.css">
	<!-- Modernizr JS -->
	<script src="{{ asset('templates') }}/js/modernizr-2.6.2.min.js"></script>
	<style>
		#fh5co-couple::before {
			content: "";
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-image: url('templates/images/maps.png');
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center;
			opacity: 0.11;
			z-index: 0;
		}

		#fh5co-header {
			background-image: url('templates/images/gatering_seller.png');
		}

		.fh5co-nav-toggle {
			display:none;
		}

		.btn-red{
			background-color: #e63946;
		}
	</style>
</head>
<body>
	<div class="fh5co-loader"></div>
	<div id="page">
		<nav class="fh5co-nav" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="#">Undangan</a></div>
					</div>
					<div class="col-xs-10 text-right">
						<img src="{{ asset('templates') }}/images/jnt.png" width="145" alt="">
					</div>
				</div>
			</div>
		</nav>

		<header id="fh5co-header" class="fh5co-cover" role="banner" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="display-t">
							<div class="display-tc animate-box" data-animate-effect="fadeIn">
								<h1 class="mt-50">Kepada Yth,</h1>
								<label class="nama-seller">{{ $resData->nama_pemilik_owner }}</label>
								<h2>Yuk, luangin waktu buat <span class="badge-custom-danger">ketemu langsung dan tukar cerita bareng sesama owner bisnis online J&T!</span> Dapetin inspirasi segar, relasi baru, dan insight berharga yang bisa bantu kamu bawa bisnismu ke level selanjutnya 🚀</h2>
								<br><br>
								<div class="text-center"><div class="text-white">COUNTDOWN</div></div> <br>
								<div class="simply-countdown simply-countdown-one"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div id="fh5co-couple">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
						<h2 class="f-s-83">Networking Together, Grow Together!</h2>
						<br>
						<h3 class="f-s-16 text-white">Kadang, ide terbaik datang dari obrolan santai bareng orang yang ngerti dunia jualan kayak kamu 💬</h3>
					</div>
				</div>
			</div>
			
			<div class="container">
				<div class="row f-s-16">
					<div class="col-md-3"></div>
					<div class="col-md-6 animate-box">
						<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
							<span class="icon">
								<i class="icon-calendar"></i>
							</span>
							<div class="feature-copy">
								<h3 class="text-white">Sabtu, 25 Oktober 2025</h3>
								<p class="text-justify text-white">Kita akan seru-seruan bareng pada hari <b class="color-red">Sabtu, 25 Oktober 2025</b>. Catat tanggalnya ya, jangan sampai kelewatan!</p>
							</div>
						</div>
					</div>
					<div class="col-md-3"></div>
				</div>
				<br>
				<div class="row f-s-16">
					<div class="col-md-3"></div>
					<div class="col-md-6 animate-box">
						<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
							<span class="icon">
								<i class="icon-clock"></i>
							</span>
							<div class="feature-copy">
								<h3 class="text-white">Mulai jam 08.00 sampai selesai</h3>
								<p class="text-justify text-white">Acara dimulai pukul <b class="color-red">08.00 </b> dan berlanjut sampai selesai. Yuk datang tepat waktu biar nggak ketinggalan momen seru!</p>
							</div>
						</div>
					</div>
					<div class="col-md-3"></div>
				</div>
				<br>
				<div class="row f-s-16">
					<div class="col-md-3"></div>
					<div class="col-md-6 animate-box">
						<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
							<span class="icon">
								<i class="icon-location"></i>
							</span>
							<div class="feature-copy">
								<h3 class="text-white">Hotel Westin Surabaya</h3>
								<p class="text-justify text-white">Acara kita di <b class="color-red">Hotel Westin Surabaya</b>. Tempatnya nyaman banget dan pas buat ngobrol relasi baru, dan insight berharga yang bisa bantu kamu bawa bisnismu ke level selanjutnya 🚀.</p>
							</div>
						</div>
					</div>
					<div class="col-md-3"></div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-3 col-xs-1"></div>
					<div class="col-md-6 col-xs-10 bg-maps animate-box">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.5736780227962!2d112.6759364!3d-7.289248799999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fc498f1cffc5%3A0xc0718e958df80ba0!2sThe%20Westin%20Surabaya!5e0!3m2!1sid!2sid!4v1759748900558!5m2!1sid!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
					<div class="col-md-3 col-xs-1"></div>
				</div>
				<br><br><br><br><br>
				<div class="text-center animate-box">
					<p><a href="#confirm" class="btn btn-red text-white btn-sm">Konfirmasi Kehadiran</a></p>
				</div>
			</div>
		</div>
		
		<div id="confirm" class="fh5co-section">
			<div class="bar-bottom-red"></div>
			<div class="bar-bottom-gray"></div>
			<div class="container">
				<div class="row animate-box fadeInUp animated-fast">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading"> <br>
						<h2>Konfirmasi Kehadiran</h2>
						<p>Ingat ya, mengisi form konfirmasi kehadiran dibawah ini.</p>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-xs-1 col-md-2"></div>
					<div class="col-xs-10 col-md-8 animate-box">
						<form action="{{ route('home.post-feedback') }}" method="post">
							@csrf
							<input type="hidden" name="kode_klien" value="{{ $resData->kode_klien }}">
							<div class="row form-group">
								<div class="col-md-12">
									<label for="">Nama Lengkap<span class="text-danger">*</span></label>
									<input type="text" name="nama" class="form-control" required autocomplete="off">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="">Nama Toko / Usaha<span class="text-danger">*</span></label>
									<input type="text" name="nama_toko" class="form-control" required autocomplete="off">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="">Kategori Jualan<span class="text-danger">*</span></label>
									<input type="text" name="kategori" class="form-control" required autocomplete="off">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="">Nomor Whatsapp Aktif<span class="text-danger">*</span></label>
									<input type="number" name="nomor_wa" class="form-control" required autocomplete="off">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="">Pilihan menu makan siang kamu<span class="text-danger">*</span></label>
									<select name="menu" class="form-control" required>
										<option value="">Pilihan</option>
										<option value="normal">Normal</option>
										<option value="vegetarian">Vegetarian</option>
										<option value="vegan">Vegan</option>
									</select>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="">Bersedia hadir gak nih?<span class="text-danger">*</span></label>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="status" id="hadir" value="Hadir" required>
										<label class="form-check-label" for="hadir">Hadir</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="status" id="tidak-hadir" value="Tidak Hadir">
										<label class="form-check-label" for="tidak-hadir">Tidak Hadir</label>
									</div>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="">Kalau kamu lagi duduk bareng rekan sesama pelaku bisnis online, pertanyaan apa yang paling pengen kamu tanyain ke dia?<span class="text-danger">*</span></label>
									<textarea name="keterangan" rows="3" class="form-control" required></textarea>
									<small>(Contoh pertanyaan yang bisa kamu tulis:)</small>
									<ul>
										<li><small>Strategi apa yang paling efektif buat jaga pelanggan biar terus balik lagi?</small></li>
										<li><small>“Menurut kamu, tantangan paling besar jadi owner bisnis online itu apa?”</small></li>
									</ul>
								</div>
							</div>
							<br>
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Kirim</button>
							</div>
						</form>		
					</div>
				</div>
			</div>
		</div>

		<footer id="fh5co-footer" role="contentinfo" class="fh5co-section-red">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
						<h3 class="f-s-16 text-white">💡 Kesempatan langka buat kamu yang pegang kendali bisnis sendiri — dengar langsung insight dari sesama pelaku bisnis online dan bawa pulang semangat baru buat bisnismu.</h3>
					</div>
				</div>
				<hr style="border: 1px solid #fff;">
				<div class="row copyright">
					<div class="col-md-12 text-center">
						<p>
							<small class="block">&copy; 2025 J&T Express Jawa Timur. All Rights Reserved.</small> 
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="{{ asset('templates') }}/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('templates') }}/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('templates') }}/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="{{ asset('templates') }}/js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="{{ asset('templates') }}/js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="{{ asset('templates') }}/js/jquery.countTo.js"></script>
	<!-- Stellar -->
	<script src="{{ asset('templates') }}/js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="{{ asset('templates') }}/js/jquery.magnific-popup.min.js"></script>
	<script src="{{ asset('templates') }}/js/magnific-popup-options.js"></script>
	<script src="{{ asset('templates') }}/js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="{{ asset('templates') }}/js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<script>
		var targetDate = new Date(2025, 9, 25);
		
		simplyCountdown('.simply-countdown-one', {
			year: targetDate.getFullYear(),
			month: targetDate.getMonth() + 1,
			day: targetDate.getDate()
		});
		
		$('#simply-countdown-losange').simplyCountdown({
			year: targetDate.getFullYear(),
			month: targetDate.getMonth() + 1,
			day: targetDate.getDate(),
			enableUtc: false
		});
	</script>

	@if(session('success'))
		<script>
			Swal.fire({
				icon: 'success',
				title: 'Sukses!',
				text: '{{ session('success') }}',
				confirmButtonText: 'OK'
			});
		</script>
	@endif
	</body>
</html>

