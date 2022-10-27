<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Tambah Galeri</title>
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
								<h2 class="fw-bold fs-2 text-danger mt-5">Tambah Galeri</h2>
								<h6 class="subtitle fs-5 text-dark">Tambahkan foto terbaru</h6>
						</div>
				</div>
		</div>

		<div class="setting p-3" style="background-color: none;
		">
				<div class="container">
						<div class="row d-flex justify-content-center align-items-center title">
								<div class="col-md-6 col-12">
										<p>
												<button type="button" class="btn btn-danger mt-3" onclick="window.location='/remaba'">
														&laquo; Kembali
												</button>

												@if (session('msg'))
														{{ session('msg') }}
												@endif
										<form action="{{ url('/galeri/simpan') }}" method="POST" enctype="multipart/form-data">
												@csrf
												<table style="widows: 70%;">
														<tr>
																<td class="text-dark">Judul :</td>
																<td>
																		<input class="form-control border-radius-3 border-secondary mt-3" type="text" name="judul"
																				id="judul">
																</td>
														</tr>
														<tr>
																<td class="text-dark">Deskripsi :</td>
																<td>
																		<input class="form-control border-radius-5 border-secondary mt-3 p-1" type="text" name="deskripsi"
																				id="deskripsi">
																</td>
														</tr>
														<tr>
																<td class="text-dark">Gambar :</td>
																<td>
																		<input class="form-control border-radius-3 border-secondary mt-3 p-1" type="file" name="gambar"
																				id="gambar">
																</td>
														</tr>

														<tr>
																<td></td>
																<td>
																		<button class="btn btn-danger mt-3 mb-3" type="submit">Tambahkan</button>
																</td>
														</tr>
												</table>
										</form>
										</p>
								</div>
						</div>
				</div>
		</div>
		<footer class="text-dark fs-4 mt-5 text-center mb-5">Remaba @2022</footer>
		</ <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script>
				AOS.init();
		</script>
		<script src="/script/navbar-scroll.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
				integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>
