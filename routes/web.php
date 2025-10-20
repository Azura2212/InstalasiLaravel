<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\MahasiswaController;
use App\Komunikasi\Email\PengirimEmail;
use App\Komunikasi\Pesan;

use function PHPSTORM_META\map;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function(){
    return 'Hello, Andre';
});

Route::get('/user/{name}', function($name){
    return "nama saya $name";
});

Route::get('/greet/{name?}', function ($name = 'Guest'){
    return "Halo, $name";
});

Route::get('/profile', function(){
    return view('profile');
});

Route::get('/about', function(){
    return view('about', ['name' => 'ANDRE']);
});

Route::get('/home', function(){
    return 'halo ini adalah halaman utama';
})-> name('home.page');


Route::get('/latihan1', function(){
    class mobil{
        public $merk;
        public $tahun;

        public function hidupkanMesin(){
            return "mesin mobil menyala";
        }
    }
     $mobil1 = new mobil();
     $mobil1->merk = "mazda";
     $mobil1->tahun = 2002;

     return "merk mobil: {$mobil1->merk}, tahun: {$mobil1->tahun}, {$mobil1->hidupkanMesin()}";
});

Route::get('/latihan2', function(){
    class mobil2{
        public $merk;
        public $tahun;
        private $nomorRangka;

        public function __construct($merk, $tahun, $nomorRangka){
            $this->merk = $merk;
            $this->tahun = $tahun;
            $this->nomorRangka = $nomorRangka;
        }

        public function hidupkanMesin(){
            return "mesin mobil menyala";
        }

        public function getNomorRangka(){
            return $this->nomorRangka;
        }
    }
     $mobil1 = new mobil2("Mazda", 2002, "ABDSJ");

     return "merk mobil: {$mobil1->merk}, tahun: {$mobil1->tahun}, {$mobil1->hidupkanMesin()}, NOMOR RANKA: {$mobil1->getNomorRangka()}";
});

    Route::get('/latihan3', function(){
        class kendaraan{
            public function berjalan(){
                return "kendaraan sedang berjalan";
            }
        }

        class SepedaMotor extends kendaraan{
            public function berjalan(){
                return "motor pelam";
            } 
        }

        class mobill extends kendaraan{
            public function berjalan(){
                return "mobil kencang";
            }
        }

        $motor = new SepedaMotor();
        $mobil = new mobill();

        return $motor->berjalan() . "<br>" . $mobil->berjalan();
});

    Route::get('/latihan4', function(){
        interface pembayaran{
            public function prosesPembayaran();
        }

        class KartuKredit implements pembayaran{
            public function prosesPembayaran(){
                return "pembayaran dengan kartu  kredit diproses";
            }
        }

        class DompetDigital implements pembayaran{
            public function prosesPembayaran(){
                return "pembayaran dengan dompet digital diproses";
            }   
        }
        
        $kartuKredit = new KartuKredit();
        $dompetDigital = new DompetDigital();

        return $kartuKredit->prosesPembayaran() . "<br>" . $dompetDigital->prosesPembayaran();
    });

    Route::get('/latihan5', function(){
        $pesan = new Pesan();
        $email = new PengirimEmail();
        
        return $pesan->kirimPesan() . "<br>" . $email->kirimEmail();
    });

    Route::resource('mahasiswa', MahasiswaController::class);

Route::get('/form', [DataController::class, 'form']);
route::POST('/proses', [DataController::class, 'proses']);

// modul5
Route::get('/form', [MahasiswaController::class, 'form']);
Route::post('/simpan', [MahasiswaController::class, 'simpan']);
Route::get('/daftar-mahasiswa', [MahasiswaController::class, 'daftar']);




