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
								<a class="navbar-brand" href="#dashboard">REMABA</a>
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
												<li class="nav-item bg-danger rounded-3">
														<a class="nav-link" href="{{ route('logout') }}">Logout</a>
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
		
		<!-- profil -->
		
		<!-- profil -->

		<div class="container-fluid bg-light pt-5 pb-5 mt-5">
				<div class="container text-center">
						<h1 class="text-center fw-bold text-danger">Hapus Data</h1>
						<h4>Hapus data galeri atau anggota remaba</h4>
						<button type="button" class="btn btn-danger mt-3" onclick="window.location='/remaba'">
														&laquo; Kembali
												</button>
						<div class="row gx-4 gy-4 pt-4 mt-3">
								@foreach ($galeri as $tb_galeri)
										<div class="col-md-4">
												<img src="{{ asset('gambarremaba/' . $tb_galeri->gambar_galeri) }}" class="card-img-top rounded-5 mb-3"
														width="200" height="200" alt="...">
												<div class="card-body">
													
												</div>
												<form method="POST" action="/galeri/hapus/{{ $tb_galeri->id_galeri }}" onsubmit="return hapusData()">
														@csrf
														@method('DELETE')
														<button type="button-hapus"
																class="btn btn-danger">X</button>

												</form>
										</div>
								@endforeach
						</div>

				</div>
		</div>
		</div>
		</div>
		<!-- tentang -->
		
		<!-- anggota -->
		<div class="container-flui bg-light pb-5">
				<div class="container text-center">
						
						<div class="row gx-4 gy-4 pt-4">
								@foreach ($anggota as $tb_anggota)
										<div class="col-md-4 anggota text-center">
												<img src="{{ asset('gambarremaba/' . $tb_anggota->gambar_anggota) }}" class="rounded-circle mb-3" />
												
												<form method="POST" action="/anggota/hapus/{{ $tb_anggota->id_anggota }}" onsubmit="return hapusData()">
														@csrf
														@method('DELETE')
														<button type="button-hapus"
																class="btn btn-danger">X</button>

												</form>
										</div>
								@endforeach
						</div>

				</div>
		</div>
		</div>
		<!-- client -.->

						<!-- kontak -->
		
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
