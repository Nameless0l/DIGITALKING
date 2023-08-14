<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\GalerryController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\UploadImagesController;
use App\Models\Comment;
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

Route::middleware(['auth','IsAdmin'])->get('/admin/dashboard',function(){
    return view('masterAdmin');
})->name('master');
Route::controller(AboutController::class)->group(function () {
    Route::get('/about', 'index')->name('about');
});
// Services
Route::controller(ServicesController::class)->group(function () {
    Route::get('/services', 'index')->name('services');
    Route::get('/service/{service}', 'service')->name('service');
});
Route::controller(BlogController::class)->group(function () {
    Route::get('/blog', 'index')->name('blog');
    Route::get('/blog-details/{id}', 'blogDetails')->name('blog.detail');

    Route::middleware(['auth','IsAdmin'])->get('/liste_posts','listePosts')->name('listePoste');
    Route::middleware(['auth','IsAdmin'])->get('admin/post-creation','createPost')->name('create_post');
    Route::middleware(['auth','IsAdmin'])->post('admin/post-creation','__create')->name('createPost');
});
//Contact us
Route::controller(ContactUsController::class)->group(function () {
    Route::get('/contactez-nous', 'contact')->name('contact');
    Route::post('envoie-message','send')->name('ask-contact');
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
    Route::middleware(['auth','IsAdmin'])->any('demandez-devis','askquote')->name('askquote');
    Route::middleware(['auth','IsAdmin'])->get('/devis-liste', 'liste')->name('liste-devis');
});
Route::get('/king-digital',function(){
    return view('layouts.droits');
})->name('droits');

//web
Route::middleware(['auth'])->controller(MailController::class)->group(function(){
    Route::get('/envoie','mailnotify')->name('sendmail');
});

//comment
Route::middleware(['auth'])->controller(CommentController::class)->group(function(){
    Route::any('add/{posts_id}', 'add')->name('add_comment');
    Route::post('delete', 'delete')->name('delete_comment');
});

//search
Route::controller(SearchController::class)->group(function(){
    Route::get('search','base')->name('search_base');
    Route::get('search-blog','blog')->name('search_blog');
});

//Upload file
Route::middleware(['auth','IsAdmin'])->controller(UploadImagesController::class)->group(function(){
    Route::get('/upload-images','form')->name('form_upload');
    Route::any('/delete-images','delete')->name('delete-images');
    Route::any('/upload-images/{menu}','save')->name('save_upload');
});
Route::controller(GalerryController::class)->group(function(){
    Route::middleware(['auth','IsAdmin'])->get('admin/galerie/{menu}','index')->name('gellerie');
});
require __DIR__.'/auth.php';
