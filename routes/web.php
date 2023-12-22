<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
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

Route::get('/about/{slug?}', [AboutController::class, 'index']) //->middleware('check_age')
    ->middleware('above_age:10')
    ->name('about');

Route::post('post/{post}/comments/{comment}', function ($post, $comment)
{
    return "post";
})->name('post.comment');
