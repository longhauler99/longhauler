<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us');
Route::get('contact-submit', function() {
    session()->flash('alertMessage', 'Contact Us form submitted successfully.');

    return redirect()->route('home');
})->name('contact-submit');

