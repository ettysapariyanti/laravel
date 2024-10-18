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

form input merek tinta tanggal 17 Oktober 2024

```php

<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale())}}">

<!-- Halaman input data merek tinta menggunakan function create sesuai tutorial indokoding -->


    <head>


        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Input Merek Tinta</title>

        <!-- Memasukan Bootstrap 5 via CDN -->

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

        <!-- Gaya kustom untuk tema gelap -->

        <style>

            body {


                background-color:#000; /** background warna hitam */

                color:#fff; /** tulisan warna putih */
            }

            .formulir-merektinta {

                background-color: #333;

                border: 3px solid #ff0000;

                border-radius: 4px;
            }

            .form-control:focus {

                background-color: #000;

                color: #00FF66;
            }


            .form-control::placeholder {

                color: #00FF66
            }

            .label-form {

                background-color: #333;

                color: #fff;

                padding: 5px 10px;

                border-radius: 3px;

            }

            .input-form {

                background-color: #000;

                color: #00ff66;

                padding: 5px 10px;

                border-radius: 4px;

                border-color: #ff0000;
            }

            .btn-custom {

                background-color: #ff0000; /** tombol warna merah */
            }

            .btn-custom:hover {

                background-color: #cc0000; /** Lebih merah ketika kursor berada di atas tombol */
            }



        </style>


    </head>


    <body>

            <div class="container">

                <h1 class="mt-5">Input Merek Tinta</h1>

                <form action="" method="" class="formulir-merektinta form-control:focus form-control::placeholder">

                    @csrf

                    <div class="form-group mx-auto" style="width: 1250px; padding-top: 10px; padding-bottom: 5px;">

                        <label class="label-form">Tanggal Input</label>

                        <input type="date" class="form-control input-form" name="tanggalinput" id="tanggal" value="{{ old('tanggalinput')}}" placeholder="Isikan Tanggal Input">

                    </div>

                    <div class="form-group mx-auto" style="width: 1250px; padding-top: 10px; padding-bottom: 5px;">

                        <label class="label-form">Merek Tinta</label>

                        <input type="text" class="form-control input-form" name="merektinta" id="merektinta" value="{{ old('merektinta')}}" placeholder="Isikan Merek Tinta">



                    </div>

                    <div class="form-group" style="width: 1250px; padding-top: 5px; padding-bottom: 20px; padding-left: 20px; padding-right: 10px;">

                        <button type="submit" class="btn btn-custom btn-lg">Simpan</button>

                    </div>

                    
                </form>

                <footer class="mx-auto" style="width: 1250px; padding-top: 5px; padding-bottom: 10px;">

                    <p>&copy; 2024 Ibnu Chalid.</p>

                </footer>


            </div>




    </body>


</html>



```


source code controller merek tinta ( 17 Oktober 2024 ) :

```php

<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;

use Illuminate\Http\Response;

use App\Models\Merektinta;

class MerekTintaController extends Controller
{
    // ini untuk menampilkan form input data merek tinta

    public function create(){

        // dd('index');

        return view('merektintas.index');
    }

    public function store(Request $request){

        $validateData = $request->validate([

            'tanggalinput' => 'date', // validasi input tanggal

            'merektinta' => 'string|max:20', // validasi input merek tinta
        ]);

        // Simpan Data Ke database

        Merektinta::create( $validateData );

        return redirect()->back();
}

}




```


source code model Merek Tinta : 

```php

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merektinta extends Model
{
    use HasFactory;

    protected $fillable = [

        'tanggalinput',
        'merektinta',

    ];
}




```


source code file migration untuk membuat tabel merek tinta (17 Oktober 2024) : 

```php

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('merektintas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('tanggalinput')->nullable();
            $table->string('merektinta',20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('merektintas');
    }
};




```php

form untuk input data untuk mengisi data merek tinta ( 17 Oktober 2024 ) index.blade.php : 

<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale())}}">

<!-- Halaman input data merek tinta menggunakan function create sesuai tutorial indokoding -->


    <head>


        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Input Merek Tinta</title>

        <!-- Memasukan Bootstrap 5 via CDN -->

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

        <!-- Gaya kustom untuk tema gelap -->

        <style>

            body {


                background-color:#000; /** background warna hitam */

                color:#fff; /** tulisan warna putih */
            }

            .formulir-merektinta {

                background-color: #333;

                border: 3px solid #ff0000;

                border-radius: 4px;
            }

            .form-control:focus {

                background-color: #000;

                color: #00FF66;
            }


            .form-control::placeholder {

                color: #00FF66
            }

            .label-form {

                background-color: #333;

                color: #fff;

                padding: 5px 10px;

                border-radius: 3px;

            }

            .input-form {

                background-color: #000;

                color: #00ff66;

                padding: 5px 10px;

                border-radius: 4px;

                border-color: #ff0000;
            }

            .btn-custom {

                background-color: #ff0000; /** tombol warna merah */
            }

            .btn-custom:hover {

                background-color: #cc0000; /** Lebih merah ketika kursor berada di atas tombol */
            }



        </style>


    </head>


    <body>

            <div class="container">

                <h1 class="mt-5">Input Merek Tinta</h1>

                <form action="{{ route('merektinta.store')}}" method="POST" class="formulir-merektinta form-control:focus form-control::placeholder">

                    @csrf

                    <div class="form-group mx-auto" style="width: 1250px; padding-top: 10px; padding-bottom: 5px;">

                        <label class="label-form">Tanggal Input</label>

                        <input type="date" class="form-control input-form" name="tanggalinput" id="tanggalinput" value="{{ old('tanggalinput')}}" placeholder="Isikan Tanggal Input">

                    </div>

                    <div class="form-group mx-auto" style="width: 1250px; padding-top: 10px; padding-bottom: 5px;">

                        <label class="label-form">Merek Tinta</label>

                        <input type="text" class="form-control input-form" name="merektinta" id="merektinta" value="{{ old('merektinta')}}" placeholder="Isikan Merek Tinta">



                    </div>

                    <div class="form-group" style="width: 1250px; padding-top: 5px; padding-bottom: 20px; padding-left: 20px; padding-right: 10px;">

                        <button type="submit" class="btn btn-custom btn-lg">Simpan</button>

                    </div>

                    
                </form>

                <footer class="mx-auto" style="width: 1250px; padding-top: 5px; padding-bottom: 10px;">

                    <p>&copy; 2024 Ibnu Chalid.</p>

                </footer>


            </div>




    </body>


</html>



```

isi file web.php untuk input data merek tinta:

```php
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MerekTintaController;

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

Route::get("merektintas", [MerekTintaController::class, 'create'])->name('merektinta.index');

Route::post('merektintas/store', [MerekTintaController::class, 'store'])->name('merektinta.store');

Route::get('/', function () {
    return view('welcome');
});





```

Ini desain tampilan tabel yang cocok untuk menampilkan data dari database mariadb (17-10-2024) : 


```php

<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale())}}">

<head>


    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sampel Tabel</title>

    <!-- Memasukan Bootstrap 5 via CDN -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Gaya kustom untuk tema gelap -->

    <style>
    body {


        background-color: #000;
        /** background warna hitam */

        color: #fff;
        /** tulisan warna putih */
    }


    .table-custom-border {

        border: 3px solid #ff0000;

    }



    thead.head-blue {

        background-color: aqua;

    }
    </style>


</head>

<div class="container">

    <div>

        <h1 class="mt-5">Sampel Table Dengan Border</h1>

        <table class="table table-custom-border table-hover">

            <thead class="table-dark">
                <tr>

                    <th scope="col">#</th>
                    <th scope="col">Tanggal Input</th>
                    <th scope="col">Merek Tinta</th>

                </tr>

            </thead>

            <tbody>

                <tr>
                    <th scope="row">1</th>
                    <td>2024-10-17</td>
                    <td>Epson</td>
                </tr>

                <tr>

                    <th scope="row">2</th>
                    <td>2024-10-18</td>
                    <td>Canon</td>

                </tr>

                <tr>

                    <th scope="row">3</th>
                    <td>2024-10-19</td>
                    <td>Brother</td>

                </tr>


            </tbody>


        </table>


        <footer class="mx-auto" style="width: 1250px; padding-top: 5px; padding-bottom: 10px;">

            <p>&copy; 2024 Ibnu Chalid.</p>

        </footer>


    </div>

</div>

<!--- Bootstrap 5 JS --->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>


</body>

</html>


```


di bawah ini ada source untuk tampilkan data dari tabel mariadb ke tabel yang menggunakan Bootstrap 5 , source code ini diletakan di controller : 

```php

<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PegawaiController extends Controller
{
    // Membuat kontroler untuk halaman 1
    public function create():Response
    {

        // dd('create data pegawai');

        return response(view('pegawais.create'));

    }

    public function store(Request $request){

        // validasi inputan dari form pegawai

        $validateData = $request->validate([
            'tanggalinput'=> ['date'],
            'namapegawai'=> ['max:50'],
            'divisi'=> ['max:100'],
            'subdivisi'=> ['max:100'],
        ]);

        // Simpan ke database

        Pegawai::create([

            'tanggalinput' => $request->tanggalinput,
            'namapegawai'=> $request->namapegawai,
            'divisi'=> $request->divisi,
            'subdivisi'=> $request->subdivisi,

        ]);

        return redirect()->back();

    }

    public function tampildatapegawai()
    {

        $pegawais = Pegawai::select('tanggalinput','namapegawai','divisi','subdivisi')->get();

        // return $pegawais;
        // $pegawais = Pegawai::all();
        return view('pegawais.tampildatapegawai', compact('pegawais'));


    }
}




```

ini source code untuk tabel nya : 

```php

<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale())}}">

<!-- Halaman tabel data pegawai -->

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tabel Data Pegawai</title>

    <!-- memasukan Bootstrap 5 via CDN --->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Gaya kustom untuk tema gelap -->

    <style>
    body {

        background-color: #000;
        /** background warna hitam */

        color: #fff;
        /** tulisan warna putih */

    }
    </style>



</head>

<body>

    <table class="table table-dark table-striped">

        <thead>

            <tr>

                <th scope="col">#</th>
                <th scope="col">Tanggal Input</th>
                <th scope="col">Nama Pegawai</th>
                <th scope="col">Divisi</th>
                <th scope="col">Sub Divisi</th>


            </tr>


        </thead>

        <tbody>

            @foreach($pegawais as $pegawai)

            <tr>

                <th scope="row">{{ $loop->iteration }}</th>

                <td>{{ $pegawai->tanggalinput }}</td>
                <td>{{ $pegawai->namapegawai }}</td>
                <td>{{ $pegawai->divisi }}</td>
                <td>{{ $pegawai->subdivisi }}</td>

            </tr>

            @endforeach


        </tbody>

    </table>


</body>



</html>




```

Ini desain tabel yang dominasi warna hitam dan merah untuk menampilkan data : 

```php

<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale())}}">

<head>


    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sampel Tabel</title>

    <!-- Memasukan Bootstrap 5 via CDN -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Gaya kustom untuk tema gelap -->

    <style>
    body {


        background-color: #000;
        /** background warna hitam */

        color: #fff;
        /** tulisan warna putih */
    }


    .table-custom-border {

        border: 3px solid #ff0000;

    }



    thead.head-blue {

        background-color: aqua;

    }
    </style>


</head>

<div class="container">

    <div>

        <h1 class="mt-5">Sampel Table Dengan Border</h1>

        <table class="table table-custom-border table-hover">

            <thead class="table-dark">
                <tr>

                    <th scope="col">#</th>
                    <th scope="col">Tanggal Input</th>
                    <th scope="col">Merek Tinta</th>

                </tr>

            </thead>

            <tbody>

                <tr>
                    <th scope="row">1</th>
                    <td>2024-10-17</td>
                    <td>Epson</td>
                </tr>

                <tr>

                    <th scope="row">2</th>
                    <td>2024-10-18</td>
                    <td>Canon</td>

                </tr>

                <tr>

                    <th scope="row">3</th>
                    <td>2024-10-19</td>
                    <td>Brother</td>

                </tr>


            </tbody>


        </table>


        <footer class="mx-auto" style="width: 1250px; padding-top: 5px; padding-bottom: 10px;">

            <p>&copy; 2024 Ibnu Chalid.</p>

        </footer>


    </div>

</div>

<!--- Bootstrap 5 JS --->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>


</body>

</html>



```


Update terbaru yang bisa jalan tampilan untuk menampilkan data di tabel data tinta (tampilan tabel menggunakan Bootstrap 5 ) : 

```php

<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale())}}">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tabel Merek Tinta</title>

    <!-- Memasukan Bootstrap 5 via CDN -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Gaya kustom untuk tema gelap -->


    <style>
    body {

        background-color: #000;
        /** background warna hitam */

        color: #fff;
        /** tulisan warna putih */

    }

    .table-custom-border {

        border: 3px solid #ff0000;
    }

    thead.head-blue {

        background-color: aqua;

    }
    </style>

</head>


<body>

    <div class="container">

        <div>

            <h1 class="mt-5">Daftar Merek Tinta</h1>

            <table class="table table-custom-border table-hover">

                <thead class="table-dark">


                    <tr>

                        <th scope="col">#</th>

                        <th scope="col">Tanggal Input</th>

                        <th scope="col">Merek Tinta</th>

                    </tr>


                </thead>

                <tbody>

                    @foreach($merektintas as $merektinta)

                    <tr>

                        <th scope="row">{{ $merektinta->id }}</th>

                        <td>{{ $merektinta->tanggalinput }}</td>

                        <td>{{ $merektinta->merektinta }}</td>

                    </tr>


                    @endforeach


                </tbody>


            </table>

            <footer class="mx-auto" style="width: 1250px; padding-top: 5px; padding-bottom: 10px;">

                <p>&copy; 2024 Ibnu Chalid.</p>

            </footer>


        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>


</html>




```

tampilan terakhir yang bisa berjalan untuk input merek tinta ke dalam database mariadb : 

```php

<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale())}}">

<!-- Halaman input data merek tinta menggunakan function create sesuai tutorial indokoding -->


<head>


    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Input Merek Tinta</title>

    <!-- Memasukan Bootstrap 5 via CDN -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Gaya kustom untuk tema gelap -->

    <style>
    body {


        background-color: #000;
        /** background warna hitam */

        color: #fff;
        /** tulisan warna putih */
    }

    .formulir-merektinta {

        background-color: #333;

        border: 3px solid #ff0000;

        border-radius: 4px;
    }

    .form-control:focus {

        background-color: #000;

        color: #00FF66;
    }


    .form-control::placeholder {

        color: #00FF66
    }

    .label-form {

        background-color: #333;

        color: #fff;

        padding: 5px 10px;

        border-radius: 3px;

    }

    .input-form {

        background-color: #000;

        color: #00ff66;

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

    <div class="container">

        <h1 class="mt-5">Input Merek Tinta</h1>

        <form action="{{ route('merektinta.store')}}" method="POST"
            class="formulir-merektinta form-control:focus form-control::placeholder">

            @csrf

            <div class="form-group mx-auto" style="width: 1250px; padding-top: 10px; padding-bottom: 5px;">

                <label class="label-form">Tanggal Input</label>

                <input type="date" class="form-control input-form" name="tanggalinput" id="tanggalinput"
                    value="{{ old('tanggalinput')}}" placeholder="Isikan Tanggal Input">

            </div>

            <div class="form-group mx-auto" style="width: 1250px; padding-top: 10px; padding-bottom: 5px;">

                <label class="label-form">Merek Tinta</label>

                <input type="text" class="form-control input-form" name="merektinta" id="merektinta"
                    value="{{ old('merektinta')}}" placeholder="Isikan Merek Tinta">



            </div>

            <div class="form-group"
                style="width: 1250px; padding-top: 5px; padding-bottom: 20px; padding-left: 20px; padding-right: 10px;">

                <button type="submit" class="btn btn-custom btn-lg">Simpan</button>

            </div>


        </form>

        <footer class="mx-auto" style="width: 1250px; padding-top: 5px; padding-bottom: 10px;">

            <p>&copy; 2024 Ibnu Chalid.</p>

        </footer>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>


</html>





```


























