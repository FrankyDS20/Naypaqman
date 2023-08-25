<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::resource('contact',ContactController::class)->parameters(['contactanos'=>'contact'])->names('contact');





Route::post('/contact', [ContactController::class, 'sendEmail'])->name('contact.send');


Route::get('/', function () {
    return view('inicio');
    
});

// Route::get('/contact', function () {
//     return view('contact');
// });
