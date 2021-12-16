<?php

use App\Http\Controllers\MainController;
use App\Models\BlogMessages;
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
    $articles = ['articles'=>BlogMessages::paginate(6)];
    return view('welcome')->with($articles);
});

Route::get('/login', [MainController::class, 'login'])->name('login');
Route::post('/do_login', [MainController::class, 'do_login'])->name('do_login');
Route::post('/contact_now', [MainController::class, 'contact_now'])->name('contact_now');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/blog_detail', [MainController::class, 'blog_detail'])->name('blog_detail');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/upload', [MainController::class, 'upload'])->name('upload');
    Route::get('/logout', [MainController::class, 'logout'])->name('logout');
    Route::post('/upload_now', [MainController::class, 'upload_now'])->name('upload_now');
});
