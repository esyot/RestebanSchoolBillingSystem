<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ChargesController;

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



Route::get('/', [SiteController::class, 'index']);

Route::get('/dashboard', [SiteController::class, 'index'])->name('dashboard');

//students
Route::get('/students/view', [StudentController::class, 'index'])->name('students.view');

Route::get('/student/view/{id}',[StudentController::class, 'student'])->name('student.view');

//accounts
Route::get('/accounts/view', [AccountController::class, 'index'])->name('accounts.view');
Route::get('/account/create', [AccountController::class, 'create'])->name('account.create');


//charges
Route::get('charges/view', [ChargesController::class, 'index']);
Route::get('charges/view/{id}', [ChargesController::class, 'charges']);

Route::get('/accounts/{id}/charges', [AccountController::class, 'getCharges'])->name('accounts.charges');

