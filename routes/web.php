<?php

use App\Http\Controllers\EmployeeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/employee', [EmployeeController::class, 'index'])->name('employee');

Route::get('/create', [EmployeeController::class, 'create']);

Route::post('/insert', [EmployeeController::class, 'insert']);

Route::get('/showdata/{id}', [EmployeeController::class, 'showdata'])->name('showdata');

Route::post('/updatedata/{id}', [EmployeeController::class, 'updatedata'])->name('updatedata');
