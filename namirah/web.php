<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ebookController;
use App\Http\Controllers\censusOfficer;

Route::get('/about', [ebookController::class, 'about']);
Route::get('/list', [ebookController::class, 'list']);

Route::get('/data', [censusOfficer::class, 'data'])->name('censusData.data');
//Route::post('/conn', [censusOfficer::class, 'connDB'])->name('censusData.connDB');

//Route::get('/data', [censusOfficer::class, 'getData'])->name('data.getData');

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

