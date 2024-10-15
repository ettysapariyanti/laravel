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















