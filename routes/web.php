<?php

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


Route::get('/workforce/employee', function () {
    return view('workforce.employee');
})->name('workforce.employee');

Route::get('/workforce/employee/add', function () {
    return view('workforce.add-employee');
})->name('workforce.employee.add');

Route::get('/workforce/employee/trash', function () {
    return view('workforce.trash');
})->name('workforce.employee.trash');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
