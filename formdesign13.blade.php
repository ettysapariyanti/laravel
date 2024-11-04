<!DOCTYPE html>

<html lang="{{ str_replace('_','-',app()->getLocale())}}">

	<head>

    <!--  ini form desain untuk update / edit data yang nantinya datanya akan di simpan ke dalam database mariadb. upload
    
    tanggal 4 November 2024 . -->
    
	
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Edit Data Utama Tinta</title>
		
		@vite(['resources/css/app.css','resources/js/app.js'])
		
			<style>
			
				/** Body Styles  */
				
				body {
					
					
					background-color: #000;
					
					color: #fff;
				}
				
				/** Offcanvas Styles  */
				
				.offcanvas {
					
					
					background-color: #000000; /** background warna hitam  */
					
					color: #ff0000; /** teks berwarna putih   */
					
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
					
					
					border-bottom: 1px solid #ff0000; /** Garis bawah merah  */
				}
				
				
				
				/** Hover Effect */
				
				
				.offcanvas-body a {
					
					
					color: #ff0000; /** Link Warna Merah */
					
					text-decoration: none; /** Menghilangkan garis bawah pada link */
					
					padding: 5px;
					
					display: block;
					
					border-radius: 5px;
					
					transition: background-color 0.3s, color 0.3s; /** Efek transisi */
					
				}
				
				
				.offcanvas-body a:hover {
					
					background-color: rgba(255,0,0,0.2);  /** Background merah transparant saat di hover */
					
					color: #ffffff; /** Teks warna putih saat di hover  */
					
				}
				
				
				/** Form Styles */
				
				.formulir-tinta {
					
					background-color: #333;
					
					border: 3px solid #ff0000;
					
					border-radius: 4px;
					
				}
				
				
				.form-control:focus {
					
					background-color: #000;
					
					color: #00FF66;
				}
				
				
				.form-control::placeholder {
					
					color: #00FF66;
				}
				
				
				.label-form {
					
					background-color: #333;
					
					color: #fff;
					
					padding: 5px 10px;
					
					border-radius: 3px;
				}
				
				.input-form {
					
					background-color: #000;
					
					color: #00FF66;
					
					padding: 5px 10px;
					
					border-radius: 4px;
					
					border-color: #ff0000;
					
				}
				
				
				.btn-custom {
					
					background-color: #ff0000;
					
					/** tombol warna merah */
					
				}
				
				
				
				.btn-custom:hover {
					
					background-color: #cc0000;
					
					/** Lebih merah ketika kursor berada di atas tombol */
					
				}
			
			</style>
	
	
	
	</head>
	
	
	<body>
	
		<!-- Navbar dengan offcanvas   -->
	
		<nav class="navbar navbar-dark bg-dark">
		
			<div class="container-fluid">
			
				<button class="btn btn-danger" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">Tampil Daftar</button>
			
			</div>
		
		
		</nav>
		
		<!-- Offcanvas Menu   -->
		
		<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
		
		
			<div class="offcanvas-content">
			
				<div class="offcanvas-header">
				
					<h5 class="offcanvas-title" id="offcanvasMenuLabel">Daftar Halaman</h5>
					
					<button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				
				</div>
				
				
				<div class="offcanvas-body">
				
					<ul class="list-unstyled">
					
						<li><a href="{{ route('tintas.create')}}" class="text-danger">Input Data</a></li>
						
						<li><a href="{{ route('tintas.showUpdate')}}" class="text-danger">Edit Data</a></li>
					
						<li><a href="{{ route('tintas.showDestroy')}}" class="text-danger">Hapus Data</a></li>
					
					
					</ul>
					
				
				
				</div>
			
			
			</div>
		
		
		</div>
		
		
		
		<!-- di bawah ini source code untuk form edit datanya   -->
	
		<div class="container">
		
		
			<h1 class="mt-5">Edit Data Utama Tinta</h1>
		
				<form action="{{route('tintas.updateData')}}" method="POST" class="formulir-tinta form-control:focus form-control::placeholder">
				
					@csrf
					
					<!--  Input ID   -->
					
					<div class="form-group mx-auto" style="width: 1250px; padding-top: 10px; padding-bottom: 5px;">
					
						<label class="label-form">ID</label>
						
						<input type="text" class="form-control @error('id') is-invalid @enderror input-form" name="id" id="id" value="{{ old('id')}}" placeholder="Isikan ID">
					
					
						<!-- Menampilkan pesan error jika ID tidak di isi  -->
						
						@error('id')
						
						<div class="invalid-feedback">{{ $message }}</div>
						
						@enderror
					
					</div>
					
					
					<!-- Input Merek -->
					
					
					<div class="form-group mx-auto" style="width: 1250px; padding-top: 10px; padding-bottom: 5px;">
					
					
						<label class="label-form">Merek</label>
					
						<input type="text" class="form-control @error('merek') is-invalid @enderror   input-form" name="merek" id="merek" value="{{ old('merek')}}" placeholder="Isikan Merek Tinta">
					
					
						<!-- Menampilkan pesan error jika Merek tidak di isi     -->
						
						@error('merek')
						
						<div class="invalid-feedback">{{ $message }}</div>
						
						@enderror
					
					
					</div>
					
					
					
					<!-- Input Tipe   -->
					
					<div class="form-group mx-auto" style="width: 1250px; padding-top: 10px; padding-bottom: 5px;">
					
						<label class="label-form">Tipe</label>
						
						<input type="text" class="form-control @error('tipe') is-invalid @enderror input-form" name="tipe" id="tipe" value="{{ old('tipe')}}" placeholder="Isikan Tipe Tinta">
					
					
					
						<!-- Menampilkan pesan error jika Tipe tidak di isi   -->
					
						@error('tipe')
						
						<div class="invalid-feedback">{{ $message }}</div>
						
						@enderror
					
					
					
					
					</div>
					
					
					
					<!-- Input Warna   -->
					
					<div class="form-group mx-auto" style="width: 1250px; padding-top: 10px; padding-bottom: 5px;">
					
					
						<label class="label-form">Warna</label>
						
						<input type="text" class="form-control @error('warna') is-invalid @enderror input-form" name="warna" id="warna" value="{{ old('warna')}}" placeholder="Isikan Warna Tinta">
					
					
						<!-- Menampilkan pesan error jika Warna tidak di isi     -->
					
						@error('warna')
						
						<div class="invalid-feedback">{{ $message }}</div>
						
						@enderror
					
					
					
					
					</div>
					
					
					<!-- Input Kemasan  -->
					
					<div class="form-group mx-auto" style="width: 1250px; padding-top: 10px; padding-bottom: 5px;">
					
						<label class="label-form">Kemasan</label>
					
						<input type="text" class="form-control @error('kemasan') is-invalid @enderror input-form" name="kemasan" id="kemasan" value="{{ old('kemasan')}}" placeholder="Isikan Kemasan Tinta">
					
					
					<!-- Menampilkan pesan error jika Kemasan tidak di isi     -->
					
					@error('kemasan')
					
					<div class="invalid-feedback">{{ $message }}</div>
					
					
					@enderror
					
					
					
					</div>
				
				
				
					<!-- Tombol Simpan   -->
					
					<div class="form-group" style="width: 1250px; padding-top: 10px; padding-bottom: 20px; padding-left: 20px; padding-right: 10px;">
					
						<button type="submit" class="btn btn-custom btn-lg">Edit</button>
					
					
					</div>
				
				
				
				
				</form>
		
		
		
		</div>
	
	
	
	
	</body>






</html>
