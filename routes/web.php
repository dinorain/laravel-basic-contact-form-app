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

Route::group([
    'prefix' => 'contact-messages'
], function () {
    Route::get('/', [ContactMessageController::class, 'index'])->name('contact_message.index');
    Route::get('/create', [ContactMessageController::class, 'create'])->name('contact_message.create');
    Route::get('/{id}', [ContactMessageController::class, 'show'])->name('contact_message.show');
    Route::get('/{id}/edit', [ContactMessageController::class, 'edit'])->name('contact_message.edit');

    Route::post('/', [ContactMessageController::class, 'store'])->name('contact_message.store');
    Route::post('/{id}', [ContactMessageController::class, 'update'])->name('contact_message.update');
    Route::delete('/{id}', [ContactMessageController::class, 'destroy'])->name('contact_message.destroy');
});
