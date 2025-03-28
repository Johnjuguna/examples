<?php

use App\Http\Controllers\Front\HomeController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


///Route::get('/test', function (){
   /// dd(\App\Models\User::resolveConnection());
///});



Route::get('/', HomeController::class)->name('home.index');

Route::get('/events', [AdminController::class, 'events']);



Route::group(['middleware' => ['auth', AdminMiddleware::class ]], function () {


    Route::get('/home', [AdminController::class, 'index'])->name('home');


    Route::get('/create_event', [AdminController::class, 'create_event'])->name('create_event');
    Route::post('/add_event', [AdminController::class, 'add_event'])->name('add_event');
    Route::get('/view_event', [AdminController::class, 'view_event']);
    Route::delete('/event_delete/{id}', [AdminController::class, 'event_delete']);
    Route::get('/event_update/{id}', [AdminController::class, 'event_update']);
    Route::post('/edit_event/{id}', [AdminController::class, 'edit_event']);
    Route::get('/event_details/{id}', [HomeController::class, 'event_details']);
    Route::post('/book/{id}', [HomeController::class, 'book'])->name('book');

    Route::get('/bookings', [AdminController::class, 'bookings']);
    Route::delete('/delete-booking/{id}', [AdminController::class, 'delete_booking']);
    Route::get('/approve_book/{id}', [AdminController::class, 'approve_book']);
    Route::get('/reject_book/{id}', [AdminController::class, 'reject_book']);
    Route::post('/contact', [HomeController::class, 'contact']);
    Route::get('/search', [HomeController::class, 'search']);

    Route::get('/gallery', [AdminController::class, 'gallery'])->name('gallery');
    Route::post('/upload_gallery', [AdminController::class, 'upload_gallery']);
    Route::get('redirect','App\Http\Controllers\AdminController@index');


});
