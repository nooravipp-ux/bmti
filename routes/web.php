<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TopikController;
use App\Http\Controllers\KursusController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\KeahlianController;
use App\Http\Controllers\PMandiriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\TopikQuizController;
use App\Http\Controllers\KompetensiController;
use App\Http\Controllers\PertanyaanController;
use App\Http\Controllers\JenisKursusController;
use App\Http\Controllers\Guest\BerandaController;
use App\Http\Controllers\Guest\GaleriaController;
use App\Http\Controllers\JenisPMandiriController;
use App\Http\Controllers\KategoriKursusController;
use App\Http\Controllers\MasterListDataController;
use App\Http\Controllers\PerusahaanMitraController;
use App\Http\Controllers\ImportDataEvaluasiController;

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

Route::get('/', function () {
    return view('guest.beranda');
});

Route::get('/', [BerandaController::class, 'getData']);
Route::get('/galeria', [GaleriaController::class, 'getKategoriKompetensi']);
Route::get('/galeria/{kategori_id}', [GaleriaController::class, 'getAllKeahlianByKategori']);

Route::get('/pelatihan-mandiri', function () {
    return view('guest.pelatihan');
});

Route::get('/alur-pembelajaran', function () {
    return view('guest.alur_pembelajaran');
});

Route::get('login', function () {
    return view('auth.login');
});

Route::post('/import', [ImportDataEvaluasiController::class, 'importExcel'])->name('import');
Route::post('/import-testimoni', [ImportDataEvaluasiController::class, 'importExcelTestimoni'])->name('importTestimoni');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/users', [UserController::class, 'index'])->name('users');
        Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
        Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
        Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
        Route::put('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
        Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');

        Route::get('/roles', [RoleController::class, 'index'])->name('roles');
        Route::get('/role/create', [RoleController::class, 'create'])->name('role.create');
        Route::post('/role/store', [RoleController::class, 'store'])->name('role.store');
        Route::get('/role/edit/{id}', [RoleController::class, 'edit'])->name('role.edit');
        Route::put('/role/update/{id}', [RoleController::class, 'update'])->name('role.update');
        Route::get('/role/delete/{id}', [RoleController::class, 'delete'])->name('role.delete');

        Route::get('/kompetensi', [KompetensiController::class, 'index'])->name('kompetensi');
        Route::get('/kompetensi/create', [KompetensiController::class, 'create'])->name('kompetensi.create');
        Route::post('/kompetensi/store', [KompetensiController::class, 'store'])->name('kompetensi.store');
        Route::get('/kompetensi/edit/{id}', [KompetensiController::class, 'edit'])->name('kompetensi.edit');
        Route::put('/kompetensi/update/{id}', [KompetensiController::class, 'update'])->name('kompetensi.update');
        Route::get('/kompetensi/delete/{id}', [KompetensiController::class, 'delete'])->name('kompetensi.delete');

        Route::get('/keahlian', [KeahlianController::class, 'index'])->name('keahlian');
        Route::get('/keahlian/create', [KeahlianController::class, 'create'])->name('keahlian.create');
        Route::post('/keahlian/store', [KeahlianController::class, 'store'])->name('keahlian.store');
        Route::get('/keahlian/edit/{id}', [KeahlianController::class, 'edit'])->name('keahlian.edit');
        Route::put('/keahlian/update/{id}', [KeahlianController::class, 'update'])->name('keahlian.update');
        Route::get('/keahlian/delete/{id}', [KeahlianController::class, 'delete'])->name('keahlian.delete');

        Route::get('/pelatihan-mandiri', [PMandiriController::class, 'index'])->name('pelatihanMandiri');
        Route::get('/pelatihan-mandiri/create', [PMandiriController::class, 'create'])->name('pelatihanMandiri.create');
        Route::post('/pelatihan-mandiri/store', [PMandiriController::class, 'store'])->name('pelatihanMandiri.store');
        Route::get('/pelatihan-mandiri/edit/{id}', [PMandiriController::class, 'edit'])->name('pelatihanMandiri.edit');
        Route::put('/pelatihan-mandiri/update/{id}', [PMandiriController::class, 'update'])->name('pelatihanMandiri.update');
        Route::get('/pelatihan-mandiri/delete/{id}', [PMandiriController::class, 'delete'])->name('pelatihanMandiri.delete');

        Route::get('/jenis-pelatihan-mandiri', [JenisPMandiriController::class, 'index'])->name('jenisPelatihanMandiri');
        Route::get('/jenis-pelatihan-mandiri/create', [JenisPMandiriController::class, 'create'])->name('jenisPelatihanMandiri.create');
        Route::post('/jenis-pelatihan-mandiri/store', [JenisPMandiriController::class, 'store'])->name('jenisPelatihanMandiri.store');
        Route::get('/jenis-pelatihan-mandiri/edit/{id}', [JenisPMandiriController::class, 'edit'])->name('jenisPelatihanMandiri.edit');
        Route::put('/jenis-pelatihan-mandiri/update/{id}', [JenisPMandiriController::class, 'update'])->name('jenisPelatihanMandiri.update');
        Route::get('/jenis-pelatihan-mandiri/delete/{id}', [JenisPMandiriController::class, 'delete'])->name('jenisPelatihanMandiri.delete');

        Route::get('/content', [ContentController::class, 'index'])->name('content');
        Route::get('/content/create', [ContentController::class, 'create'])->name('content.create');
        Route::post('/content/store', [ContentController::class, 'store'])->name('content.store');
        Route::get('/content/edit/{id}', [ContentController::class, 'edit'])->name('content.edit');
        Route::put('/content/update/{id}', [ContentController::class, 'update'])->name('content.update');
        Route::get('/content/delete/{id}', [ContentController::class, 'delete'])->name('content.delete');

        Route::get('/jenis-kursus', [JenisKursusController::class, 'index'])->name('jenisKursus');
        Route::get('/jenis-kursus/create', [JenisKursusController::class, 'create'])->name('jenisKursus.create');
        Route::post('/jenis-kursus/store', [JenisKursusController::class, 'store'])->name('jenisKursus.store');
        Route::get('/jenis-kursus/edit/{id}', [JenisKursusController::class, 'edit'])->name('jenisKursus.edit');
        Route::put('/jenis-kursus/update/{id}', [JenisKursusController::class, 'update'])->name('jenisKursus.update');
        Route::get('/jenis-kursus/delete/{id}', [JenisKursusController::class, 'delete'])->name('jenisKursus.delete');

        Route::get('/kategori-kursus', [KategoriKursusController::class, 'index'])->name('kategoriKursus');
        Route::get('/kategori-kursus/create', [KategoriKursusController::class, 'create'])->name('kategoriKursus.create');
        Route::post('/kategori-kursus/store', [KategoriKursusController::class, 'store'])->name('kategoriKursus.store');
        Route::get('/kategori-kursus/edit/{id}', [KategoriKursusController::class, 'edit'])->name('kategoriKursus.edit');
        Route::put('/kategori-kursus/update/{id}', [KategoriKursusController::class, 'update'])->name('kategoriKursus.update');
        Route::get('/kategori-kursus/delete/{id}', [KategoriKursusController::class, 'delete'])->name('kategoriKursus.delete');

        Route::get('/quiz', [QuizController::class, 'index'])->name('quiz');
        Route::get('/quiz/create', [QuizController::class, 'create'])->name('quiz.create');
        Route::post('/quiz/store', [QuizController::class, 'store'])->name('quiz.store');
        Route::get('/quiz/edit/{id}', [QuizController::class, 'edit'])->name('quiz.edit');
        Route::put('/quiz/update/{id}', [QuizController::class, 'update'])->name('quiz.update');
        Route::get('/quiz/delete/{id}', [QuizController::class, 'delete'])->name('quiz.delete');

        Route::get('/pertanyaan', [PertanyaanController::class, 'index'])->name('pertanyaan');
        Route::get('/pertanyaan/create', [PertanyaanController::class, 'create'])->name('pertanyaan.create');
        Route::post('/pertanyaan/store', [PertanyaanController::class, 'store'])->name('pertanyaan.store');
        Route::get('/pertanyaan/edit/{id}', [PertanyaanController::class, 'edit'])->name('pertanyaan.edit');
        Route::put('/pertanyaan/update/{id}', [PertanyaanController::class, 'update'])->name('pertanyaan.update');
        Route::get('/pertanyaan/delete/{id}', [PertanyaanController::class, 'delete'])->name('pertanyaan.delete');

        Route::get('/perusahaan-mitra', [PerusahaanMitraController::class, 'index'])->name('perusahaanMitra');
        Route::get('/perusahaan-mitra/create', [PerusahaanMitraController::class, 'create'])->name('perusahaanMitra.create');
        Route::post('/perusahaan-mitra/store', [PerusahaanMitraController::class, 'store'])->name('perusahaanMitra.store');
        Route::get('/perusahaan-mitra/edit/{id}', [PerusahaanMitraController::class, 'edit'])->name('perusahaanMitra.edit');
        Route::put('/perusahaan-mitra/update/{id}', [PerusahaanMitraController::class, 'update'])->name('perusahaanMitra.update');
        Route::get('/perusahaan-mitra/delete/{id}', [PerusahaanMitraController::class, 'delete'])->name('perusahaanMitra.delete');

        Route::get('/peserta', [PesertaController::class, 'index'])->name('peserta');
        Route::get('/peserta/create', [PesertaController::class, 'create'])->name('peserta.create');
        Route::post('/peserta/store', [PesertaController::class, 'store'])->name('peserta.store');
        Route::get('/peserta/edit/{id}', [PesertaController::class, 'edit'])->name('peserta.edit');
        Route::put('/peserta/update/{id}', [PesertaController::class, 'update'])->name('peserta.update');
        Route::get('/peserta/delete/{id}', [PesertaController::class, 'delete'])->name('peserta.delete');

        Route::get('/kursus', [KursusController::class, 'index'])->name('kursus');

        //Kurusu - Topik
        Route::get('/kursus/{kursusId}', [KursusController::class, 'createTopik'])->name('kursus.topik');

        //
        Route::get('/kursus/create', [KursusController::class, 'create'])->name('kursus.create');
        Route::post('/kursus/store', [KursusController::class, 'store'])->name('kursus.store');
        Route::get('/kursus/edit/{id}', [KursusController::class, 'edit'])->name('kursus.edit');
        Route::put('/kursus/update/{id}', [KursusController::class, 'update'])->name('kursus.update');
        Route::get('/kursus/delete/{id}', [KursusController::class, 'delete'])->name('kursus.delete');

        Route::get('/topik', [TopikController::class, 'index'])->name('topik');
        Route::get('/topik/create', [TopikController::class, 'create'])->name('topik.create');
        Route::post('/topik/store', [TopikController::class, 'store'])->name('topik.store');
        Route::get('/topik/edit/{id}', [TopikController::class, 'edit'])->name('topik.edit');
        Route::put('/topik/update/{id}', [TopikController::class, 'update'])->name('topik.update');
        Route::get('/topik/delete/{id}', [TopikController::class, 'delete'])->name('topik.delete');

        Route::get('/topik-quiz', [TopikQuizController::class, 'index'])->name('topikQuiz');
        Route::get('/topik-quiz/create', [TopikQuizController::class, 'create'])->name('topikQuiz.create');
        Route::post('/topik-quiz/store', [TopikQuizController::class, 'store'])->name('topikQuiz.store');
        Route::get('/topik-quiz/edit/{id}', [TopikQuizController::class, 'edit'])->name('topikQuiz.edit');
        Route::put('/topik-quiz/update/{id}', [TopikQuizController::class, 'update'])->name('topikQuiz.update');
        Route::get('/topik-quiz/delete/{id}', [TopikQuizController::class, 'delete'])->name('topikQuiz.delete');
    
    });

    Route::group(['prefix' => 'evaluator'], function () {

        Route::get('/master-list-data', [MasterListDataController::class, 'index'])->name('masterListData');
        Route::get('/master-list-data/create', [MasterListDataController::class, 'create'])->name('masterListData.create');
        Route::post('/master-list-data/store', [MasterListDataController::class, 'store'])->name('masterListData.store');
        Route::get('/master-list-data/edit/{id}', [MasterListDataController::class, 'edit'])->name('masterListData.edit');
        Route::put('/master-list-data/update/{id}', [MasterListDataController::class, 'update'])->name('masterListData.update');
        Route::get('/master-list-data/delete/{id}', [MasterListDataController::class, 'delete'])->name('masterListData.delete');
    
        Route::get('/testimoni', [TestimoniController::class, 'index'])->name('testimoni');
        Route::get('/testimoni/create', [TestimoniController::class, 'create'])->name('testimoni.create');
        Route::post('/testimoni/store', [TestimoniController::class, 'store'])->name('testimoni.store');
        Route::get('/testimoni/edit/{id}', [TestimoniController::class, 'edit'])->name('testimoni.edit');
        Route::put('/testimoni/update/{id}', [TestimoniController::class, 'update'])->name('testimoni.update');
        Route::get('/testimoni/delete/{id}', [TestimoniController::class, 'delete'])->name('testimoni.delete');
    });
});

require __DIR__ . '/auth.php';