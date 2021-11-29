<?php

use App\Models\Perusahaan;
use App\Http\Controllers\Sendemail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OssController;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\KodeposController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\PerizinanController;
use App\Http\Controllers\PersyaratanController;
use App\Http\Controllers\PenanggungJawabController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('homepage/home');
});

Route::get('/', function () {
    return view('homepage/home');
});

Route::get('/registrasi-jarjastel', function () { return view('registrasi/registrasi-jarjastel'); })->middleware('guest');
Route::get('/registrasi-telsusbh', function () { return view('registrasi/registrasi-telsusbh'); })->middleware('guest');
Route::get('/registrasi-telsusnbh', function () { return view('registrasi/registrasi-telsusnbh'); })->middleware('guest');
Route::post('/registrasi-proses', [App\Http\Controllers\LoginController::class, 'registrasiProses'])->name('registerproses');
Route::get('/registrasi-sukses', [App\Http\Controllers\LoginController::class, 'registrasiSukses'])->name('registrasiSukses');
Route::get('/verifikasi/{token}', [App\Http\Controllers\LoginController::class, 'verifikasi'])->name('verifikasi');

// Route::post('/registrasi-jarjastel-submit', 'Sendemail@send');
Route::post('/registrasi-jarjastel-submit',[Sendemail::class, 'send'])->name('registrasi-jarjastel-submit');
Route::post('/registrasi-telsusbh-submit',[Sendemail::class, 'send_telsusbh'])->name('registrasi-telsusbh-submit');
Route::post('/registrasi-telsusnbh-submit',[Sendemail::class, 'send_telsusnbh'])->name('registrasi-telsusnbh-submit');

// Route::post('/registrasi-jarjastel-submit', 'Sendemail@send');
Route::post('/konfirmasi-jarjastel-submit',[Sendemail::class, 'konfirmasi_jarjastel'])->name('konfirmasi-jarjastel-submit');
Route::post('/konfirmasi-telsusbh-submit',[Sendemail::class, 'konfirmasi_telsusbh'])->name('konfirmasi-telsusbh-submit');
Route::post('/konfirmasi-telsusnbh-submit',[Sendemail::class, 'konfirmasi_telsusnbh'])->name('konfirmasi-telsusnbh-submit');

Route::post('/penomoran-submit',[Sendemail::class, 'penomoran_submit'])->name('penomoran-submit');

Route::post('/forget-password-submit',[Sendemail::class, 'forget_password'])->name('forget-password-submit');
Route::get('/getKota/{id}', [KotaController::class, 'getKota']);
Route::get('/getKecamatan/{id}', [KecamatanController::class, 'getKecamatan']);
Route::get('/getDesa/{id}', [DesaController::class, 'getDesa']);
Route::get('/getKodepos/{id}', [KodeposController::class, 'getKodepos']);


Route::get('/konfirmasi-msg', function () { return view('emails/konfirmasi-msg'); });
Route::get('/konfirmasi-registrasi', function () { return view('emails/konfirmasi-registrasi'); });
Route::match(array('GET', 'POST'), '/penomoran-msg', function(){
    $provinsi = DB::table('provinsi')->get();
    return view('penomoran/penomoran-msg');
});

Route::get('/forget-password', function () { return view('login/forget-password'); });

Route::get('/login/{id}', [App\Http\Controllers\LoginController::class, 'index'])->middleware('guest');
Route::post('/login-proses', [App\Http\Controllers\LoginController::class, 'loginProses'])->name('loginproses');
Route::get('/login-jarjastel', function () { return view('login/login-jarjastel'); })->middleware('guest');
Route::get('/login-telsusnbh', function () { return view('login/login-telsusnbh'); })->middleware('guest');
Route::get('/login-telsusbh', function () { return view('login/login-telsusbh'); })->middleware('guest');
Route::post('/logout',[App\Http\Controllers\LoginController::class, 'logout']);

Route::match(array('GET', 'POST'), '/registrasi-jarjastel-person', function(){
    $provinsi = DB::table('provinsi')->get();
    return view('registrasi/registrasi-jarjastel-person',['provinsi' => $provinsi]);
});

Route::get('/registrasi-jarjastel-person', [App\Http\Controllers\PenanggungJawabController::class, 'jarjastel'])->middleware('auth');
Route::post('/proses-penanggung-jawab', [App\Http\Controllers\PenanggungJawabController::class, 'prosesPenanggungJawab']);
Route::get('/registrasi-jarjastel-perusahaan', [App\Http\Controllers\PerusahaanController::class, 'jarjastel'])->middleware('auth');
Route::post('/proses-perusahaan', [App\Http\Controllers\PerusahaanController::class, 'prosesPerusahaan']);
Route::get('/registrasi-jarjastel-pemohon', [App\Http\Controllers\PemohonController::class, 'jarjastel'])->middleware('auth');
Route::post('/proses-pemohon', [App\Http\Controllers\PemohonController::class, 'prosesPemohon']);

Route::get('/registrasi-telsusbh-person', [App\Http\Controllers\PenanggungJawabController::class, 'telsusbh'])->middleware('auth');
// Route::get('/registrasi-telsusbh-person', function () {
//     $provinsi = DB::table('provinsi')->get();
//     return view('registrasi/registrasi-telsusbh-person',['provinsi' => $provinsi]);
// });

Route::match(array('GET', 'POST'), '/registrasi-telsusbh-perusahaan', function(){
    $provinsi = DB::table('provinsi')->get();
    return view('registrasi/registrasi-telsusbh-perusahaan',['provinsi' => $provinsi]);
});

Route::match(array('GET', 'POST'), '/registrasi-telsusbh-pemohon', function(){
    return view('registrasi/registrasi-telsusbh-pemohon');
});




Route::match(array('GET', 'POST'), '/registrasi-telsusnbh-person', function(){
    $provinsi = DB::table('provinsi')->get();
    return view('registrasi/registrasi-telsusnbh-person',['provinsi' => $provinsi]);
});

Route::get('/form-penomoran/{perizinanId}', [App\Http\Controllers\PenomoranController::class, 'index'])->middleware('auth');

Route::get('/form-pengembalian-izin', function () {
    return view('penomoran/form-pengembalian-izin');
});

Route::get('/riwayat-perizinan', function () {
    return view('riwayat-perizinan');
});


Route::get('/dashboard', function () {
    $perusahaan = Perusahaan::select('*')->where(['users_accounts_id'=> auth()->user()->id])->first();
    return view('dashboard',['perusahaan'=>$perusahaan]);
})->middleware('auth');
Route::get('/perizinan/email-perizinan', function () {
    return view('perizinan/email-perizinan');
});
Route::get('/master/kode-izin/{jenisIzin}', [MasterController::class, 'getKodeIzin']);
Route::get('/master/kode-izin-kbli/{jenisIzin}/{kbli}', [MasterController::class, 'getKodeIzinByKbli']);
Route::get('/master/nama-izin/jaringan/{kbli}', [MasterController::class, 'getNamaIzinJaringanByKbli']);
Route::get('/master/nama-izin/jaringan-tertutup', [MasterController::class, 'getNamaIzinJaringanTertutup']);
Route::get('/master/kbli/{jenis_izin}', [MasterController::class, 'getKbli']);
Route::get('/master/kota-provinsi', [MasterController::class, 'getKotaProvinsi']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/perizinan/dalam-proses', [PerizinanController::class, 'dalamProses']);
Route::get('/perizinan/nomor_izin', [PerizinanController::class, 'nomor_izin']);
Route::get('/perizinan/get-perizinan/{id}', [PerizinanController::class, 'getPerizinan']);
Route::get('/perizinan/aktif/{kib_id}', [PerizinanController::class, 'getPerizinanAktifByKibId']);
Route::post('/perizinan/daftar', [PerizinanController::class, 'daftar']);
Route::get('/persyaratan/{perizinanId}', [PersyaratanController::class, 'persyaratan']);
Route::get('/persyaratan/kplt-jartup-terestrial/{perizinan_id}', [PersyaratanController::class, 'getPersyaratanKpltJartupTerestrial']);
Route::post('/persyaratan/prosesKpltJartupFoTerestrial', [PersyaratanController::class, 'prosesKpltJartupFoTerestrial']);
Route::post('/persyaratan/prosesDataAlatTeknis', [PersyaratanController::class, 'prosesDataAlatTeknis']);
Route::post('/persyaratan/prosesKomitmenKinerja', [PersyaratanController::class, 'prosesKomitmenKinerja']);
Route::post('/persyaratan/prosesKpltJartupFoSkkl', [PersyaratanController::class, 'prosesKpltJartupFoSkkl']);
Route::post('/persyaratan/prosesKpltJartupMicrowave', [PersyaratanController::class, 'prosesKpltJartupMicrowave']);
Route::post('/persyaratan/prosesKpltJartupVsat', [PersyaratanController::class, 'prosesKpltJartupVsat']);
Route::post('/persyaratan/prosesKpltPjbTrt', [PersyaratanController::class, 'prosesKpltPjbTrt']);
Route::post('/persyaratan/prosesKpltPjbSatelit', [PersyaratanController::class, 'prosesKpltPjbSatelit']);
Route::post('/persyaratan/prosesTelsusFo', [PersyaratanController::class, 'prosesTelsusFo']);
Route::post('/persyaratan/prosesTelsusRadioKonv', [PersyaratanController::class, 'prosesTelsusRadioTrunking']);
Route::post('/persyaratan/prosesTelsusRadioTrunking', [PersyaratanController::class, 'prosesTelsusRadioTrunking']);
Route::post('/persyaratan/prosesTelsusRadioData', [PersyaratanController::class, 'prosesTelsusRadioData']);
Route::post('/persyaratan/prosesTelsusSatelit', [PersyaratanController::class, 'prosesTelsusSatelit']);
Route::post('/persyaratan/proses-persyaratan', [PersyaratanController::class, 'prosesPersyaratan']);
Route::post('/persyaratan/proses-persyaratan-telsus', [PersyaratanController::class, 'prosesPersyaratanTelsus']);
Route::post('/email-daftar-perizinan', [Sendemail::class, 'email_daftar_perizinan']);

Route::get('/api-oss/login', [OssController::class, 'login']);
Route::get('/api-oss/fetch-nib/{nib}/{oss_id}', [OssController::class, 'fetch_nib']);