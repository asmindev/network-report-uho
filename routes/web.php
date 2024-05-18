<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::put("/laporan/{report}", [ReportController::class, "update"])->name("admin.report.update");
});

Route::middleware('isAdmin')->group(function () {
    Route::get('/admin', function () {
        return redirect('/admin/dashboard');
    });
    Route::get("/admin/dashboard", [DashboardController::class, "index"])->name("admin.dashboard");
    //  Route Fakultas
    Route::get("/admin/fakultas", [FacultyController::class, "all"])->name("admin.faculty");
    Route::get("/admin/fakultas/create", [FacultyController::class, "create"])->name("admin.faculty.create");
    Route::post("/admin/fakultas/create", [FacultyController::class, "store"])->name("admin.faculty.store");
    Route::get("/admin/fakultas/{faculty}", [FacultyController::class, "show"])->name("admin.faculty.details");
    Route::get("/admin/fakultas/{faculty}/edit", [FacultyController::class, "edit"])->name("admin.faculty.edit");
    Route::put("/admin/fakultas/{faculty}/edit", [FacultyController::class, "update"])->name("admin.faculty.update");
    Route::delete("/admin/fakultas/{faculty}", [FacultyController::class, "destroy"])->name("admin.faculty.destroy");

    // jurusan
    Route::get("/admin/jurusan", [MajorController::class, "all"])->name("admin.major");
    Route::get("/admin/jurusan/create", [MajorController::class, "create"])->name("admin.major.create");
    Route::post("/admin/jurusan/create", [MajorController::class, "store"])->name("admin.major.store");
    Route::get("/admin/jurusan/{major}", [MajorController::class, "edit"])->name("admin.major.edit");
    Route::put("/admin/jurusan/{major}", [MajorController::class, "update"])->name("admin.major.update");
    Route::delete("/admin/jurusan/{major}", [MajorController::class, "destroy"])->name("admin.major.destroy");

    // Report
    Route::get("/admin/laporan", [ReportController::class, "all"])->name("admin.report");
    Route::get("/admin/laporan/{report}", [ReportController::class, "details"])->name("admin.report.details");
    Route::delete("/admin/laporan/{report}", [ReportController::class, "destroy"])->name("admin.report.destroy");

    // User

    Route::get("/admin/user", [UserController::class, "index"])->name("admin.user");
    Route::delete("/admin/user/{user}", [UserController::class, "destroy"])->name("admin.user.destroy");
});

Route::middleware("isUser")->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
    Route::get("/laporan/create", [ReportController::class, "create"])->name("report.create");
    Route::post("/laporan/create", [ReportController::class, "store"])->name("report.store");
});



require __DIR__ . '/auth.php';
