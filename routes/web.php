<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ServicesController;
use Illuminate\Routing\RouteAction;

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

Route::get('/', function () {
    return view('master');
})->name('accueil');
Route::controller(AboutController::class)->group(function () {
    Route::get('/about', 'index')->name('about');
});

// Services
Route::controller(ServicesController::class)->group(function () {
    Route::get('/services', 'index')->name('services');
});
Route::controller(BlogController::class)->group(function () {
    Route::get('/blog', 'index')->name('blog');
    Route::get('/blog-details', 'blogDetails')->name('blog.detail');
});
//Contact us
Route::controller(ContactUsController::class)->group(function () {
    Route::get('/contactez-nous', 'contact')->name('contact');
});


//Pages suplementaires
Route::controller(PagesController::class)->group(function () {
    Route::get('/objectifs', 'objectifs')->name('objectifs');
    Route::get('/team', 'team')->name('team');
    Route::get('/temoignages', 'testimonials')->name('testimonials');
});
//devis
Route::controller(DevisController::class)->group(function () {
    Route::get('/devis', 'index')->name('devis');
});
Route::get('/king-digital',function(){
    return view('layouts.droits');
})->name('droits');

//web
Route::controller(MailController::class)->group(function(){
    Route::get('/envoie','mailnotify')->name('sendmail');
});
