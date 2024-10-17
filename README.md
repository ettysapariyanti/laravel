# laravel
Berbagai hal tentang coding laravel

Kita membuat codingan sederhana untuk tampilan pegawai. nanti bisa mengisi data ke database dan tabel di MYSQL. 2 file awal yang dibuat:

PegawaiController.php

web.php


Contoh isi sederhana, paling awal dari PegawaiController.php :

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PegawaiController extends Controller
{
    // Membuat kontroler untuk halaman 1
    public function create():Response
    {

        dd('create data pegawai');

        // return response(view('pegawais.create'));

    }
}


```

Contoh isi sederhana, paling awal dari web.php :


```php
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PegawaiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('pegawais/create', [PegawaiController::class, 'create'])->name('pegawais.create');




Route::get('/', function () {
    return view('welcome');
});


```


Untuk membuat tema tampilan, warna utama yang kita pergunakan: 
* Hitam
* Merah

Untuk warna tambahan, di tulisan text kita menggunakan warna : 
* Putih
* Kuning Hijau



Butuh koding ini untuk tempelate tampilan form input data , jadi sehingga kalau di kasih fokus, warna inputannya tetap hitam :


```php

<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale())}}">


<!-- Halaman input data pegawai -->


<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Input Data Pegawai</title>

    <!-- Menggunakan Bootstrap 5 melalui CDN --->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Style Custom untuk Dark Theme --->

    <style>
    body {

        background-color: #000;
        /** background warna hitam */

        color: #fff;
        /** tulisan warna putih */



    }


    .form-control:focus {

        background-color: #000;

        color: #00FF66;


    }

    .form-control::placeholder {

        color: #00FF66;

    }


    .formulir-isipegawai {


        background-color: #333;

        border: 3px solid #ff0000;

        border-radius: 4px;
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
        ;
    }

    .btn-custom:hover {

        background-color: #cc0000;
        /** warna nya semakin merah ketika ada kursor lewat */
    }
    </style>



</head>


<body>

    <div class="container">

        <h1 class="mt-5">Simpan Data Pegawai</h1>

        <form action="{{ route('pegawais.store') }}" method="POST" class="formulir-isipegawai form-control:focus form-control::placeholder">

            @csrf

            <div class="form-group mx-auto" style="width: 1250px; padding-top: 10px; padding-bottom: 5px;">

                <label class="label-form">Tanggal Input</label>

                <input type="date" class="form-control input-form" name="tanggalinput" id="tanggalinput"
                    value="{{ old('tanggalinput')}}" placeholder="Isikan Tanggal Input Data">

            </div>


            <div class="form-group mx-auto" style="width: 1250px; padding-top: 5px; padding-bottom: 5px;">

                <label class="label-form">Nama Pegawai</label>

                <input type="text" class="form-control input-form" name="namapegawai" id="namapegawai"
                    value="{{ old('namapegawai')}}" placeholder="Isikan Nama Pegawai">

            </div>

            <div class="form-group mx-auto" style="width: 1250px; padding-top: 5px; padding-bottom: 5px;">

                <label class="label-form">Divisi</label>

                <input type="text" class="form-control input-form" name="divisi" id="divisi" value="{{ old('divisi')}}"
                    placeholder="Isikan Nama Divisi">

            </div>


            <div class="form-group mx-auto" style="width: 1250px; padding-top: 5px; padding-bottom: 5px;">

                <label class="label-form">Sub Divisi</label>

                <input type="text" class="form-control input-form" name="subdivisi" id="subdivisi"
                    value="{{ old('subdivisi')}}" placeholder="Isikan Nama Sub Divisi">

            </div>


            <div class="form-group"
                style="width: 1250px; padding-top: 5px; padding-bottom: 20px; padding-left: 20px; padding-right: 10px">

                <button type="submit" class="btn btn-custom btn-lg" name="tombolsimpanpegawai" id="tombolsimpanpegawai">Simpan</button>

            </div>

        </form>

        <footer class="mx-auto" style="width: 1250px; padding-top: 5px; padding-bottom: 10px;">

            <p>&copy; 2024 Ibnu Chalid</p>
        </footer>

    </div>

<!-- Memasukan javascript untuk Bootstrap 5  -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>


</html>



```











