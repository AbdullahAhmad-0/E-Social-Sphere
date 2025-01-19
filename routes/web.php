<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main;
use App\Http\Controllers\AdminController;

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

Route::get('/', [Main::class, 'home']);
Route::get('/home', function () {
    return redirect('/');
});
Route::get('/services', [Main::class, 'services']);
Route::get('/services/{id}', [Main::class, 'services_det']);
Route::get('/faq', [Main::class, 'faq']);
Route::get('/terms-and-conditions', [Main::class, 'tc']);
Route::get('/privacy-policy', [Main::class, 'pp']);
Route::get('/about', [Main::class, 'about']);
Route::get('/contact', [Main::class, 'contact']);
Route::post('/contact', [Main::class, 'contact_save']);
Route::get('/work-with-us', [Main::class, 'work']);
Route::post('/work-with-us', [Main::class, 'work_save']);
Route::get('/portfolio', [Main::class, 'portfolio']);
Route::get('/pricing', [Main::class, 'pricing']);
Route::get('/testimonials', [Main::class, 'testimonials']);
Route::post('/testimonials', [Main::class, 'testimonials_save']);

Route::middleware(['custom.auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    
    Route::get('/logout', [AdminController::class, 'logout']);
    
    Route::get('/admin/account', [AdminController::class, 'account']);
    Route::post('/admin/account/save_webdet', [AdminController::class, 'save_webdet']);
    Route::post('/admin/account/save_usrdet', [AdminController::class, 'save_usrdet']);

    Route::get('/admin/contact', [AdminController::class, 'contact']);
    Route::get('/admin/contact/read/{id}', [AdminController::class, 'contact_r']);
    Route::get('/admin/contact/view/{id}', [AdminController::class, 'contact_v']);
    Route::get('/admin/contact/delete/{id}', [AdminController::class, 'contact_d']);
    
    Route::get('/admin/work', [AdminController::class, 'work']);
    Route::get('/admin/work/read/{id}', [AdminController::class, 'work_r']);
    Route::get('/admin/work/view/{id}', [AdminController::class, 'work_v']);
    Route::get('/admin/work/delete/{id}', [AdminController::class, 'work_d']);
    
    Route::get('/admin/review', [AdminController::class, 'review']);
    Route::get('/admin/review/view/{id}', [AdminController::class, 'review_v']);
    Route::get('/admin/review/delete/{id}', [AdminController::class, 'review_d']);
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', function () {
        return view('content/admin/login');
    })->name('login');

    Route::post('/login', [AdminController::class, 'login']);
});
