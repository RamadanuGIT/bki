<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EnergyController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\IndustriController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LABController;
use App\Http\Controllers\MarineController;
use App\Http\Controllers\NdtController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RabController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SOperasiController;
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
    return view('auth.login');
});

// Route::get('/',[LoginController::class,'index'])->name('login');
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login-proccess',[LoginController::class, 'processLogin'])->name('process.login');
Route::post('/logout',[LoginController::class, 'logout'])->name('process.logout');


Route::controller(InvoiceController::class)->group(function () {
    Route::get('/invoice', 'index')->name('invoice');
    Route::get('/create', 'create')->name('create.invoice');
    Route::post('/store', 'store')->name('invoice.store');
});

Route::get('/dashboard',[DashboardController::class,'index'])->name('admin.dashboard');


Route::controller(EmployeeController::class)->group(function(){
    Route::get('/employee','index')->name('employee');
    Route::get('/employee/create','create')->name('employee.create');
    Route::post('/employee','store')->name('employee.store');
    Route::post('/employee/{id}/update','update')->name('employee.update');
    Route::get('/employee/{id}/delete','destroy')->name('employee.delete');
});

Route::controller(FormController::class)->group(function(){
    Route::get('/form','index')->name('form');
});

Route::controller(ProjectController::class)->group(function(){
    Route::get('/project2023','index23')->name('project23');
    Route::get('/project2024','index24')->name('project24');
});

Route::controller(CertificateController::class)->group(function(){
    Route::get('/certificate','index')->name('certificate');
});

Route::controller(MarineController::class)->group(function(){
    Route::get('/marine','index')->name('marine');
});

Route::controller(EnergyController::class)->group(function(){
    Route::get('/energy','index')->name('energy');
});

Route::controller(ReportController::class)->group(function(){
    Route::get('/report','index')->name('report');
});

Route::controller(IndustriController::class)->group(function(){
    Route::get('/industri','index')->name('industri');
});

Route::controller(NdtController::class)->group(function(){
    Route::get('/ndt','index')->name('ndt');
});

Route::controller(LABController::class)->group(function(){
    Route::get('/lab','index')->name('lab');
});

Route::controller(SOperasiController::class)->group(function(){
    Route::get('/operasi','index')->name('operasi');
});

Route::controller(RabController::class)->group(function(){
    Route::get('/rab','index')->name('rab');
});
