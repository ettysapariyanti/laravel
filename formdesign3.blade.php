<!DOCTYPE html>

<html lang="{{ str_replace('_','-',app()->getLocale())}}">

	<head>

		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Input Data Utama</title>

		@vite(['resources/css/app.css', 'resources/js/app.js'])

			<style>
			
			
				/** Body Styles */
				
				
				body {
					
					
					background-color: #000;
					
					color: #fff;
				}
			
			

				/** Offcanvas Styles */
				
				.offcanvas {
					
					
					background-color: #000000; /** background warna hitam */
					
					color: #ff0000; /** teks berwarna putih */
					
				}
				
				.offcanvas-header {
					
					
					border-bottom: 1px solid #ff0000; /** Garis bawah merah */
				}
				
				
				.offcanvas-body a {
					
					
					color: #ff0000; /** link warna merah */
				}
				
				
				
				/** Form Styles */
				
				
				.form-container {
					
					background-color: #333; /** background warna abu-abu untuk form */
					
					color: #ffffff; /** warna putih untuk teks yang ada di form  */
					
					padding: 20px;
					
					border-radius: 8px;
					
					
					
				}
				
				.btn-save {
					
					background-color: #ff0000; /** tombol warna */
					
					color: #ffffff;
				}
				
				
				.btn-save:hover {
					
					background-color: #cc0000; /** Warna merah lebih gelap saat di hover */
				}





			</style>

	</head>
	
	<body>
	
	
		<!--- Navbar dengan offcanvas  --->
	
		<nav class="navbar navbark-dark bg-dark">
		
			<div class="container-fluid">
			
				<button class="btn btn-danger" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">Tampilkan Daftar</button>
			
			</div>
		
		
		</nav>
		
		
		<!---- Offcanvas Menu    ---->
	
		<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
		
			<div class="offcanvas-header">
			
				<h5 class="offcanvas-title" id="offcanvasMenuLabel">Daftar Halaman</h5>
			
				<button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Tutup"></button>
			
			</div>
			
			
			<div class="offcanvas-body">
			
				<ul class="list-unstyled">
				
					<li><a href="#input-data" class="text-danger">Input Data</a></li>
				
					<li><a href="#edit-data" class="text-danger">Edit Data</a></li>
				
					<li><a href="#delete-data" class="text-danger">Hapus Data</a></li>
					
					<li><a href="#tampil-data" class="text-danger">Tampil Data</a></li>
				
				</ul>
			
			</div>
		
		</div>
		
		
		
		
		<!--- Form Input Data   --->
		
		<div class="container mt-5">
		
			<div class="form-container">
			
			
				<h2 class="mb-4">Form Input Data Utama</h2>
			
			
				<form action="" method="">
				
				
					<!----- Input ID    ----->
				
				
					<div class="mb-3">
					
						<label for="id" class="form-label">ID</label>
						
						<input type="text" class="form-control bg-dark text-white" id="id" name="id" placeholder="Isikan ID">
					
					
					</div>
					
					
					<!-----------  Input Merek ----------------->
					
					
					<div class="mb-3">
					
						<label for="merek" class="form-label">Merek</label>
						
						<input type="text" class="form-control bg-dark text-white" id="merek" name="merek" placeholder="Isikan Merek Tinta">
					
					
					
					</div>
					
					
					
					<!------------ Input Tipe -------------------------->
					
					
					
					<div class="mb-3">
					
						<label for="tipe" class="form-label">Tipe</label>
					
						<input type="text" class="form-control bg-dark text-white" id="tipe" name="tipe" placeholder="Isikan Tipe Tinta">
					
					
					
					</div>
					
					
					
					<!-----------  Input Warna  ------------->
					
					
					<div class="mb-3">
					
						<label for="warna" class="form-label">Warna</label>
					
						<input type="text" class="form-control bg-dark text-white" id="warna" name="warna" placeholder="Isikan Warna Tinta">
					
					</div>
					
					
					<!------------- Input Kemasan   ----------------->
					
					
					<div class="mb-3">
					
						<label for="kemasan" class="form-label">Kemasan</label>
					
						<input type="text" class="form-control bg-dark text-white" id="kemasan" name="kemasan" placeholder="Isikan Kemasan Tinta">
					
					</div>
				
				
					<button type="submit" class="btn btn-save btn-lg">Simpan</button>
				
				
				
				</form>
			
			
			
			</div>
		
		
		
		</div>
		
		
		
		
		
	
	</body>



</html>
