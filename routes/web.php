<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PartenaireController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return view('home');
})->name('home');


//test dashboard page 
Route::get('/dashboard_tab', function(){
    return view('dashboard');
});

/* Management Contact System */ 

Route::post('/storecontact', [ContactController::class, 'store_contact'])->name('storecontact');
Route::get('/contact_management', [ContactController::class, 'index_admin'])->name('contact.admin');


/* Partenaire Management System */
Route::resource('partenaires', PartenaireController::class);
Route::get('partenaire.edit/{partenaire}', [PartenaireController::class, 'edit'])->name('editPart');


