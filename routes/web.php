<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/blog',[PostController::class,'index'])->name('blog');
Route::get('/about', function () {
    return view('about');
});
Route::get('/leadership', function () {
    return view('leadership');
});
Route::get('/effective', function () {
    return view('effectiveComm');
});
Route::get('/engagement', function () {
    return view('employeeEngagement');
});
Route::get('/team_development', function () {
    return view('teamDevelopment');
});
Route::get('/assessment', function () {
    return view('assessment');
});
Route::post('/submit_form', [AdminController::class, 'submit_form']);

Route::get('/stripe', [PaymentController::class, 'stripe'])->name('stripe');

Route::post('stripe', [PaymentController::class, 'stripePost'])->name('stripe.post');