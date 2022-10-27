<!doctype html>
<html lang="en">

<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>REMABA</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
				integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/03b987e369.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href=".public.style.css">
		@include('includes.style')
</head>

<body>
		@auth
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-lg">
						<div class="container">
								<a class="navbar-brand" href="{{ url('/remaba') }}">REMABA</a>
								<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
										aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
										<ul class="navbar-nav ms-auto mb-lg-0 mb-2">

												<li class="nav-item">
														<a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
												</li>
												<li class="nav-item">
														<a class="nav-link" href="#about">About</a>
												</li>
												<li class="nav-item">
														<a class="nav-link" href="#anggota">Anggota</a>
												</li>
												<li class="nav-item">
														<a class="nav-link" href="#kontak">Kontak Kami</a>
												</li>
												
												<li class="dropdown">
														<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
																aria-expanded="false">
																Haii {{ Auth::user()->name }}
														</a>
														<ul class="dropdown-menu dropdown-menu-dark">
																<li><a class="dropdown-item" href="#">{{ Auth::user()->email }}</a></li>
																<li><a class="nav-link text-center bg-danger rounded-3" id="pills-home-tab" data-toggle="pill"
																				href="{{ route('logout') }}" role="tab" aria-controls="pills-home"
																				aria-selected="true">Logout</a>
																</li>
														</ul>
												</li>

										</ul>
								</div>
						</div>
				</nav>
		@endauth

		@guest
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-lg">
						<div class="container">
								<a class="navbar-brand" href="#dashboard">REMABA</a>
								<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
										aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
										<ul class="navbar-nav ms-auto mb-lg-0 mb-2">


												<li class="nav-item">
														<a class="nav-link" href="#about">About</a>
												</li>
												<li class="nav-item">
														<a class="nav-link" href="#anggota">Anggota</a>
												</li>
												<li class="nav-item">
														<a class="nav-link" href="#kontak">Kontak Kami</a>
												</li>
												<li class="nav-item bg-success rounded-3">
														<a class="nav-link" href="{{ route('login') }}">Sign In</a>
												</li>


										</ul>
								</div>
						</div>
				</nav>
		@endguest

		<!-- banner -->
		<div id="carouselExampleFade" class="carousel slide carousel-fade col-md-12 justify-content-center"
				data-bs-ride="carousel">
				<div class="carousel-inner">
						<div class="carousel-item active">
								<img src="/gambar/1.jpeg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
								<img src="/gambar/2.jpeg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
								<img src="/gambar/3.jpeg" class="d-block w-100" alt="...">
						</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
				</button>
		</div>
		<!-- profil -->
		<div class="container-fluid layanan pb pt-5">
				<div class="container text-center">
						<h2 class="display-3" id="layanan">Welcome</h2>
						<p>Assalamualaikum, selamat datang di website kami REMABA. Website ini berisi tentang REMABA <br>
								dan berbagai kegiatan-kegiatan REMABA</p>
						<div class="row pt-4">
								<div class="col-md-4">
										<span class="lingkaran"><i class="fa-solid fa-chart-line fa-5x"></i>
										</span>
										<h3 class="mt-3">Visi</h3>
										<p>REMABA sebagai rumah bersama Remaja dan Pemuda Islam di dusun Pucunggrowong
										</p>
								</div>
								<div class="col-md-4">
										<span class="lingkaran"><i class="fa-solid fa-bullseye fa-5x"></i>
										</span>
										<h3 class="mt-3">Misi</h3>
										<p>Menjadikan masjid Baiturrahman sebagai tempat bersilaturahmi yang nyaman bagi remaja dan pemuda Islam,
												Membuat kegiatan-kegiatan yang mengembangkan potensi positif remaja dan pemuda Islam</p>
								</div>
								<div class="col-md-4">
										<span class="lingkaran"><i class="fa-solid fa-running fa-5x"></i>
										</span>
										<h3 class="mt-3">Aktivitas</h3>
										<p>REMABA aktif dalam kegiatan kegiatan yang dilakukan di masjid Baiturrahman dan InsyaAllah
												selalu siap membantu takmir masjid dalam melakukan kegiatan di masjid </p>
								</div>
						</div>
				</div>
		</div>
		<!-- profil -->
		<div class="container-fluid bg-light pt-5 pb-5">
				<div class="container text-center">
						<h2 class="display-3" id="profil">Galeri</h2>
						<p>Di bawah ini adalah berbagai kegiatan kegiatan yang dilakukan REMABA :</p>
						<div class="row gx-4 gy-4 pt-4">
								@foreach ($galeri as $tb_galeri)
										<div class="col-md-4">
												<img src="{{ asset('gambarremaba/' . $tb_galeri->gambar_galeri) }}" class="card-img-top rounded-5"
														width="200" height="200" alt="...">
												<div class="card-body">
														<h5 class="card-title mt-3"> {{ $tb_galeri->judul_galeri }}</h5>
														<p class="card-text">{{ $tb_galeri->deskripsi_galeri }}</p>
												</div>
										</div>
								@endforeach
						</div>

				</div>
		</div>
		</div>
		</div>
		<!-- tentang -->
		<div class="container-fluid justify-content-center pt-5 pb-5">
				<div class="container">
						<h2 class="display-3 text-center" id="about">About</h2>
						<div class="row d-flex justify-content-between align-items-center mt-5">
								<div class="col-md-6 order-md-0 order-2 mt-5">
										<p class="text-center">Mungkin ada yang belum tau REMABA itu apa?</p>
										<p>REMABA adalah singkatan dari remaja masjid Baiturrahman Pucunggrowong.</p>
										<p>REMABA adalah oragnisasi yang beranggotakan remaja putra dan putri di dusun Pucunggrowong.</p>
										<p>REMABA didirikaan untuk wadah atau rumah bagi remaja dan pemuda islam <br>di dusun Pucunggrowong.</p>
										<p>REMABA berusaha Menjadikan masjid Baiturrahman sebagai tempat bersilaturahmi yang nyaman bagi remaja dan
												pemuda Islam,
										<p> Membuat kegiatan-kegiatan yang mengembangkan potensi positif <br> remaja dan pemuda Islam,</p> dan Aktif
										menebar manfaat kepada masyarakat.</p>
								</div>
								<div class="col-md-6 col-12 order-1 mt-1">
										<div class="clearfix pt-5 text-center"><img src="/gambar/gambar1919.jpg"
														class="col-md-6 float-md-end crop-img rounded-circle mb-3" width="300" height="300" />

										</div>
								</div>
						</div>
				</div>
		</div>
		<!-- anggota -->
		<div class="container-flui bg-light pt-5 pb-5">
				<div class="container text-center">
						<h2 class="display-3" id="anggota">Anggota</h2>
						<p>Di bawah ini adalah Anggota-Anggota REMABA :</p>
						<div class="row gx-4 gy-4 pt-4">
								@foreach ($anggota as $tb_anggota)
										<div class="col-md-4 anggota text-center">
												<img src="{{ asset('gambarremaba/' . $tb_anggota->gambar_anggota) }}" class="rounded-circle mb-3" />
												<h4>{{ $tb_anggota->nama_anggota }}</h4>
												<p>{{ $tb_anggota->jabatan_anggota }}</p>
												<p>
														<a href="https://api.whatsapp.com/send?phone={{ $tb_anggota->no_anggota }}&text=Halo!" class="sosmed"><i
																		class="fab fa-whatsapp"></i></a>

												</p>
										</div>
								@endforeach
						</div>

				</div>
		</div>
		</div>
		<!-- client -.->

						<!-- kontak -->
		<div class="contanier-fluid kontak pt-5 pb-5">
				<div class="container text-center">
						<h2 class="display-3 text-center" id="kontak">Kontak</h2>
						<p class="text-center">
								Saran dan kritikan agar REMABA semakin maju dan istiqamah dijalan Allah
						</p>
						<div class="row justify-content-center pb-3">

								<div class="col-md-6 col-12">
									<form action="{{ url('/galeri/simpan') }}" method="POST" enctype="multipart/form-data">
										<textarea class="form-control border-radius-5 border-secondary mt-3 p-1 text-center" type="text"
												name="komentar" id="komentar"></textarea>
								</div>
						</div>
								<a href="#about">
										<button type="button" class="btn btn-danger btn-lg text-light text-center">
												Kirim Pesan
										</button>
								</a>
									</form>
				</div>
		</div>
				</div>
				</div>
		</div>
									
									</div>
		</div>
		<div class="container pt-5 pb-5 text-center">
				Remaja Masjid Baiturrahman &copy; 2022
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
				integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>
