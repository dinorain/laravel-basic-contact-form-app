<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactMessageController;
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


Route::get('/contact', [ContactMessageController::class, 'create'])->name('contact-message.create');

Route::group([
    'prefix' => 'contact-messages'
], function () {
    Route::get('/', [ContactMessageController::class, 'index'])->name('contact-message.index');
    Route::get('/{id}', [ContactMessageController::class, 'show'])->name('contact-message.show');
    Route::get('/{id}/edit', [ContactMessageController::class, 'edit'])->name('contact-message.edit');

    Route::post('/', [ContactMessageController::class, 'store'])->name('contact-message.store');
    Route::post('/{id}', [ContactMessageController::class, 'update'])->name('contact-message.update');
    Route::delete('/{id}', [ContactMessageController::class, 'destroy'])->name('contact-message.destroy');
});
