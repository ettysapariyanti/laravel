<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offcanvas & Form Input</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Offcanvas Styles */
        .offcanvas {
            background-color: #000000; /* Background hitam */
            color: #ff0000; /* Teks merah */
        }
        .offcanvas-header {
            border-bottom: 1px solid #ff0000; /* Garis bawah merah */
        }
        .offcanvas-body a {
            color: #ff0000; /* Link warna merah */
        }
        .offcanvas-body a:hover {
            color: #ffffff; /* Link putih saat di-hover */
        }

        /* Form Styles */
        .form-container {
            background-color: #000000; /* Background hitam untuk form */
            color: #ffffff; /* Teks putih */
            padding: 20px;
            border-radius: 8px;
        }
        .btn-save {
            background-color: #ff0000; /* Tombol merah */
            color: #ffffff;
        }
        .btn-save:hover {
            background-color: #cc0000; /* Warna merah lebih gelap saat di-hover */
        }
    </style>
</head>
<body class="bg-dark text-white">

    <!-- Navbar dengan Offcanvas -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="btn btn-danger" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
                Buka Menu
            </button>
        </div>
    </nav>

    <!-- Offcanvas Menu -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasMenuLabel">Menu</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="list-unstyled">
                <li><a href="#input-data" class="text-danger">Input Data</a></li>
                <li><a href="#edit-data" class="text-danger">Edit Data</a></li>
                <li><a href="#delete-data" class="text-danger">Hapus Data</a></li>
            </ul>
        </div>
    </div>

    <!-- Form Input Data -->
    <div class="container mt-5">
        <div class="form-container">
            <h2 class="mb-4">Form Input Data</h2>
            <form action="#" method="POST">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control bg-dark text-white" id="nama" name="nama" placeholder="Masukkan nama">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control bg-dark text-white" id="email" name="email" placeholder="Masukkan email">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control bg-dark text-white" id="alamat" name="alamat" placeholder="Masukkan alamat"></textarea>
                </div>
                <button type="submit" class="btn btn-save">Simpan Data</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>

