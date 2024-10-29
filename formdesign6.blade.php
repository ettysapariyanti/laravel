<!DOCTYPE html>

<html lang="{{ str_replace('_','-',app()->getLocale())}}">

	<head>

  <!-- Source code yang ini sudah bagus untuk link hover dan border yang ada di kanan dan bawah offcanvas  -->


    
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
					
					height: 100vh;
					
					
				}
				
				.offcanvas-content {
					
					border-right: 4px solid #ff0000;
					
					border-bottom: 4px solid #ff0000;
					
					padding: 10px;
					
					height: 100%;
					
					display: flex;
					
					flex-direction: column;
					
				}
				
				
				.offcanvas-header {
					
					
					border-bottom: 1px solid #ff0000; /** Garis bawah merah */
				}
				
				
				/** Hover Effect  */
				
				.offcanvas-body a {
					
					color: #ff0000; /** Link warna merah  */
					
					text-decoration: none; /** Menghilangkan garis bawah pada link  */
					
					padding: 5px;
					
					display: block;
					
					border-radius: 5px;
					
					transition: background-color 0.3s, color0.3s; /** Efek Transisi */
					
				}
				
				
				.offcanvas-body a:hover {
					
					
					Background-color: rgba(255,0,0,0.2);  /** Background merah transparant saat di hover   */
					
					color: #ffffff; /** Teks warna putih saat di hover*/
					
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
			
			
				<div class="offcanvas-content">
			
					<div class="offcanvas-header">
					
					
						<h5 class="offcanvas-title" id="offcanvasMenuLabel">Daftar Halaman</h5>
					
						<button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
					
					</div>
				
				
					<div class="offcanvas-body">
					
						<ul class="list-unstyled">
						
							<li><a href="{{ route('tintas.create') }}" class="text-danger">Input Data</a></li>
						
							<li><a href="{{ route('tintas.showUpdate') }}" class="text-danger">Edit Data</a></li>
							
							<li><a href="{{ route('tintas.showDestroy')}}" class="text-danger">Hapus Data</a></li>
						
						
						
						</ul>
					
					
					
					</div>
					
					
				</div>
			
			
			
			
			
			</div>
		


	</body>


</html>
