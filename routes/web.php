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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');
    Route::get('/contacts/edit/{id}', [ContactController::class, 'edit']);
    Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
    Route::get('/contacts/{id}', [ContactController::class, 'show']);
    Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');
    Route::put('/contacts/{id}', [ContactController::class, 'update']);
    Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');

});