<?php

use App\Http\Controllers\SaveGroomController;
use App\Http\Controllers\SaveBrideController;
use App\Http\Controllers\FileUpload;

use App\Models\SaveBride;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroomController;

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
    return view('homepage');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/fileupload', function () {
    return view('fileupload');
})->middleware(['auth', 'verified'])->name('fileupload');

Route::get('fetch-groom', [GroomController::class, 'fetchgroom']);
Route::post('update-groom', [SaveGroomController::class, 'updateGroom']);
Route::post('create-groom', [SaveGroomController::class, 'createGroom']);

Route::post('update-bride', [SaveBrideController::class, 'updateBride']);
Route::post('create-bride', [SaveBrideController::class, 'createBride']);
Route::post('/upload', [FileUpload::class, 'uploadFile']);

require __DIR__ . '/auth.php';
