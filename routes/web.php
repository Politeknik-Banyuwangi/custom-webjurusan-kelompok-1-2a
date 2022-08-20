<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AlumniController;
use App\Http\Controllers\admin\ArchiveController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\admin\CooperationController;
use App\Http\Controllers\admin\EventController;
use App\Http\Controllers\admin\GaleriController;
use App\Http\Controllers\admin\KritikSaranController;
use App\Http\Controllers\Admin\MotivasiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\PengumumanController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Berita;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Pendaftaran;
use App\Http\Controllers\Pengumuman;
use App\Http\Controllers\UploadController;
use Facade\FlareClient\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('alumni', [HomeController::class, 'testimoni'])->name('alumni');

Route::get('fasilitas', [HomeController::class, 'fasilitas'])->name('fasilitas');

Route::get('pengumuman', [Pengumuman::class, 'index'])->name('home.pengumuman');
Route::get('pengumuman/{slug_pengumuman}', [Pengumuman::class, 'show'])->name('pengumuman.detail');

Route::get('berita', [Berita::class, 'index'])->name('berita');
Route::get('berita/{slug_berita}', [Berita::class, 'show'])->name('berita.detail');

Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('blog/{slug}', [BlogController::class, 'show'])->name('blog.detail');


Route::get('sejarah', [PageController::class, 'sejarah'])->name('sejarah');
Route::get('sambutan_direktur', [PageController::class, 'sambutan_direktur'])->name('sambutan_direktur');
Route::get('visi_misi', [PageController::class, 'visi_misi'])->name('visi_misi');
Route::get('sasaran_kebijakan', [PageController::class, 'sasaran_kebijakan'])->name('sasaran_kebijakan');
Route::get('pimpinan', [PageController::class, 'pimpinan'])->name('pimpinan');
Route::get('dosen', [PageController::class, 'dosen'])->name('dosen');
Route::get('prodi_manajemen_informatika', [PageController::class, 'prodi_mi'])->name('prodi_mi');
Route::get('prodi_komputerisasi_akutansi', [PageController::class, 'prodi_ka'])->name('prodi_ka');
Route::get('Prodi_Teknik_Komputer', [PageController::class, 'prodi_tk'])->name('prodi_tk');
Route::get('Kurikulum', [PageController::class, 'kurikulum'])->name('kurikulum');
Route::get('peraturan_akademi', [PageController::class, 'peraturan_akademi'])->name('peraturan_akademi');
Route::get('informasi_pendaftaran', [PageController::class, 'informasi_pendaftaran'])->name('info_pendaftaran');
Route::get('biaya_pendidikan', [PageController::class, 'biaya_pendidikan'])->name('biaya_pendidikan');
Route::get('kontak', [PageController::class, 'kontak'])->name('kontak');
Route::get('pmb-pendaftaran', [PageController::class, 'pmbpendaftaran'])->name('pmb-pendaftaran');
Route::get('pendaftaran_sukses', [PageController::class, 'pendaftaran_sukses'])->name('pendaftaran_sukses');
Route::post('pendaftaran/store', [Pendaftaran::class, 'store'])->name('pendaftaran.store');
Route::get('pendaftaran/{token}', [Pendaftaran::class, 'show'])->name('show');
Route::get('pendaftaran/download/{token}', [Pendaftaran::class, 'download'])->name('download');

// Route::resource('pendaftaran', Pendaftaran::class);


Route::post('/upload',[UploadController::class,'upload']);


// Route::get('/login', [PageController::class, 'login'])->name('login');

Auth::routes();

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::middleware(['auth', 'admin'])->group(function () {
// Route::group(['prefix' =>'admin' , 'middleware' => ['auth', 'admin']], function () {

    //Data event
    //Route::get('admin/event', [EventController::class, 'index'])->name('event.index');
    // Route::get('admin/event/create', [EventController::class, 'create'])->name('event.create');
    // Route::post('admin/event/store', [EventController::class, 'store'])->name('event.store');
    // Route::get('admin/event/{id}', [EventController::class, 'edit'])->name('event.edit');
    // Route::patch('admin/event/{id}', [EventController::class, 'update'])->name('event.update');
    // Route::delete('admin/event/destroy/{id}', [EventController::class, 'destroy'])->name('event.destroy');

    //Data industri dan kerjasama
    // Route::get('admin/cooperation', [CooperationController::class, 'index'])->name('cooperation.index');
    // Route::get('admin/cooperation/create', [CooperationController::class, 'create'])->name('cooperation.create');
    // Route::post('admin/cooperation/store', [CooperationController::class, 'store'])->name('cooperation.store');
    // Route::get('admin/cooperation/{id}', [CooperationController::class, 'edit'])->name('cooperation.edit');
    // Route::patch('admin/cooperation/{id}', [CooperationController::class, 'update'])->name('cooperation.update');
    // Route::delete('admin/cooperation/destroy/{id}', [CooperationController::class, 'destroy'])->name('cooperation.destroy');

    //Data Arsip
    // Route::get('admin/archive', [ArchiveController::class, 'index'])->name('archive.index');
    // Route::get('admin/archive/create', [ArchiveController::class, 'create'])->name('archive.create');
    // Route::post('admin/archive/store', [ArchiveController::class, 'store'])->name('archive.store');
    // Route::get('admin/archive/{id}', [ArchiveController, 'edit'])->name('archive.edit');
    // Route::patch('admin/archive/{id}', [ArchiveController::class, 'update'])->name('archive.update');
    // Route::delete('admin/archive/destroy/{id}', [ArchiveController::class, 'destroy'])->name('archive.destroy');

    //Data Kritik dan Saran
    //  Route::get('admin/kritik-saran', [KritikSaranController::class, 'index'])->name('kritik-saran.index');
    // Route::get('admin/kritik-saran/create', [ArchiveController::class, 'create'])->name('kritik-saran.create');
    // Route::post('admin/kritik-saran/store', [ArchiveController::class, 'store'])->name('kritik-saran.store');
    // Route::get('admin/kritik-saran/{id}', [ArchiveController, 'edit'])->name('kritik-saran.edit');
    // Route::patch('admin/kritik-saran/{id}', [ArchiveController::class, 'update'])->name('kritik-saran.update');
    // Route::delete('admin/kritik-saran/destroy/{id}', [ArchiveController::class, 'destroy'])->name('kritik-saran.destroy');

    //admin data galeri
    Route::get('admin/galeri', [GaleriController::class, 'index'])->name('galeri.index');
    Route::delete('admin/galeri/destroy/{id}', [GaleriController::class, 'destroy'])->name('galeri.destroy');
    Route::get('admin/galeri/create', [GaleriController::class, 'create'])->name('galeri.create');
    Route::post('admin/galeri/store', [GaleriController::class, 'store'])->name('galeri.store');


    // Banner
    Route::get('admin/banner', [BannerController::class, 'index'])->name('banner.index');
    Route::post('admin/banner/store', [BannerController::class, 'store'])->name('banner.store');
    Route::get('admin/banner/{id_banner}', [BannerController::class, 'edit'])->name('banner.edit');
    Route::patch('admin/banner/{id_banner}', [BannerController::class, 'update'])->name('banner.update');
    Route::delete('admin/banner/{id_banner}', [BannerController::class, 'destroy'])->name('banner.destroy');

    // Pengumuman
    Route::get('admin/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman');
    Route::get('admin/pengumuman/create', [PengumumanController::class, 'create'])->name('admin.pengumuman.create');
    Route::post('admin/pengumuman/store', [PengumumanController::class, 'store'])->name('admin.pengumuman.store');
    Route::delete('admin/pengumuman/destroy/{id}', [PengumumanController::class, 'destroy'])->name('admin.pengumuman.destroy');
    Route::get('admin/pengumuman/edit/{id}', [PengumumanController::class, 'edit'])->name('admin.pengumuman.edit');
    Route::patch('admin/pengumuman/update/{id}', [PengumumanController::class, 'update'])->name('admin.pengumuman.update');
    // Route::resource('/admin/pengumuman', 'PengumumanController');

    // Berita
    // Route::resource('admin/berita', 'BeritaController');
    Route::get('admin/berita', [BeritaController::class, 'index'])->name('berita.index');
    Route::get('admin/berita/create', [BeritaController::class, 'create'])->name('berita.create');
    Route::post('admin/berita/store', [BeritaController::class, 'store'])->name('berita.store');
    Route::delete('admin/berita/destroy/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');
    Route::get('admin/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');

    // Alumni
    Route::get('admin/alumni', [AlumniController::class, 'index'])->name('alumni.index');
    Route::post('admin/alumni/store', [AlumniController::class, 'store'])->name('alumni.store');
    Route::get('admin/alumni/{id_alumni}', [AlumniController::class, 'edit'])->name('alumni.edit');
    Route::delete('admin/alumni/destroy/{id_alumni}', [AlumniController::class, 'destroy'])->name('alumni.destroy');
    Route::patch('admin/alumni/update/{id_alumni}', [AlumniController::class, 'update'])->name('alumni.update');

    // Staff
    Route::get('admin/staff', [StaffController::class, 'index'])->name('staff.index');
    Route::post('admin/staff/store', [StaffController::class, 'store'])->name('staff.store');
    Route::delete('admin/staff/destroy/{id_staff}', [StaffController::class, 'destroy'])->name('staff.destroy');

    // Motivasi

    Route::resource('admin/motivasi', MotivasiController::class);

    // Roles
    Route::resource('admin/roles', RolesController::class);

    // Route::get('admin/roles', [RolesController::class, 'index'])->name('roles.index');
    // Route::post('admin/roles/store', [RolesController::class, 'store'])->name('roles.store');
    // Route::delete('admin/roles/destroy/{id}', [RolesController::class, 'destroy'])->name('roles.destroy');

    //Permission
    Route::resource('admin/permission', PermissionController::class);

    // User
    Route::resource('admin/users', UserController::class);

    // Route::get('admin/user', [UserController::class, 'index'])->name('users.index');
    // Route::get('admin/user/create', [UserController::class, 'create'])->name('users.create');
    // Route::post('admin/user/store', [UserController::class, 'store'])->name('users.store');
    // Route::get('admin/user/{id}', [UserController::class, 'edit'])->name('users.edit');
    // Route::delete('admin/user/destroy/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    // Route::patch('admin/user/update/{id}', [UserController::class, 'update'])->name('user.update');

    // Profile
    Route::get('admin/profile', [ProfileController::class, 'edit'])->name('profile.index');
    Route::patch('admin/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('ubahfoto',[ProfileController::class, 'ubahfoto'])->name('ubahfoto');
});








// Students
// Route::get('/students', [StudentsController::class, 'index']);
// Route::get('/students/create', [StudentsController::class, 'create']);
// Route::get('/students/{student}', [StudentsController::class, 'show']);
// Route::post('/students', [StudentsController::class, 'store']);
// Route::delete('/students/{student}', [StudentsController::class, 'destroy']);
// Route::get('/students/{student}/edit', [StudentsController::class, 'edit']);
// Route::patch('/students/{student}', [StudentsController::class, 'update']);
