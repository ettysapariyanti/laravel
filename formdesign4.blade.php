<!DOCTYPE html>

<html lang="{{ str_replace('_','-',app()->getLocale())}}">

  <!-- ini source code yang berhasil untuk link offcanvas, sehingga bisa berpindah halaman jika mengklik di menu Offcanvas -->

	<head>
	
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Input Data Utama</title>
		
		@vite(['resources/css/app.css','resources/js/app.js'])
		
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
				
				
				.ofcanvas-body a {
					
					
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
	
		<!-- Navbar dengan offcanvas   -->
		
		<nav class="navbar navbar-dark bg-dark">
		
				<div class="container-fluid">
				
					<button class="btn btn-danger" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu"  aria-controls="offcanvasMenu">Tampil Daftar</button>
				
				
				</div>
						
			</nav>
			
			
			<!--  Offcanvas Menu  -->
			
			<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
			
				<div class="offcanvas-header">
				
				
					<h5 class="offcanvas-title" id="offcanvasMenuLabel">Daftar Halaman</h5>
				
					<button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Tutup"></button>
				
				</div>
				
				
				<div class="offcanvas-body">
				
					<ul class="list-unstyled">
					
						<li><a href="{{ route('tintas.create') }}" class="text-danger">Input Data</a></li>
					
						<li><a href="" class="text-danger">Edit Data</a></li>
					
					
					
					</ul>
				
				
				
				</div>
			
			
			
			
			
			</div>
		


	</body>


</html>
