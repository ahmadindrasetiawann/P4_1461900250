<?php

use App\Http\Controllers\PerpustakaanController;
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
Route::get('/perpustakaan/export', [PerpustakaanController::class,'perpustakaanexport']);
Route::resource('perpustakaan', PerpustakaanController::class);
Route::resource('tambah0250', PerpustakaanController::class);
Route::resource('edit0250', PerpustakaanController::class);