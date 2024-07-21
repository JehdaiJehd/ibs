<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return view('home');
})->name('home');

/* Management Contact System */ 

Route::post('/storecontact', [ContactController::class, 'store_contact'])->name('storecontact');
Route::get('/contact_management', [ContactController::class, 'index_admin'])->name('contact.admin');