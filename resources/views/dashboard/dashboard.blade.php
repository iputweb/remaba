<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Dashboard</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
				integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
		<script src="https://kit.fontawesome.com/03b987e369.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href=".public.jadwal.css" />
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
		@include('includes.style')
</head>

<body style="background-color: #fff">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-lg">
				<div class="container">
						<a class="navbar-brand" href="#dashboard">REMABA</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
								aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse text-right" id="navbarSupportedContent">

						</div>
				</div>
		</nav>
		<div class="brosur rounded-5 container mt-5 p-3">
				<div class="row">
						<div class="col-md-6 col-12">
								<h2 class="fw-bold fs-2 text-danger mt-5">Dashboard Admin</h2>
								<h6 class="subtitle fs-5 text-dark">Welcome to dashboard admin!</h6>
								<button type="button" class="btn btn-danger mt-3" onclick="window.location='/remaba'">
										&laquo; Kembali
								</button>
						</div>
				</div>
				<div class="row justify-content-center mt-3 p-3">
						<div class="col-12 col-md-4 text-center mt-3">
								<span class="lingkaran"><i class="bi bi-image-fill" style="font-size: 58px"></i>
								</span>
								<h3 class="text-danger mt-3">Galeri</h3>
								<button type="button" onclick="window.location='/galeri/tambah'" class="btn btn-danger mt-3">+
										Galeri</button>
						</div>
						<div class="col-12 col-md-4 text-center mt-3">
								<span class="lingkaran"><i class="bi bi-person-circle" style="font-size: 58px"></i>
								</span>
								<h3 class="text-danger mt-3">Anggota</h3>
								<button type="button" onclick="window.location='/anggota/tambah'" class="btn btn-danger mt-3">+
										Anggota</button>
						</div>
						<div class="col-12 col-md-4 text-center mt-3">
								<span class="lingkaran"><i class="bi bi-trash" style="font-size: 58px"></i>
								</span>
								<h3 class="text-danger mt-3">Hapus Data</h3>
								<button type="button" onclick="window.location='/dasbod'" class="btn btn-danger mt-3">
										Hapus</button>
						</div>
				</div>

		</div>

		<footer class="text-dark fs-4 mt-5 mb-5 text-center">Remaba @2022</footer>
		</ <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script>
				AOS.init();
		</script>
		<script src="/script/navbar-scroll.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
				integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>
