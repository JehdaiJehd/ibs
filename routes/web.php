<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PartenaireController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\VoirTousLesProjetsController;
use App\Http\Controllers\VoirLesExpertsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\VoirLeBlogController;


Route::get('/', function () {
    return view('home_index_page');
});



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

/* Blog Management */

Route::resource('blogs', BlogController::class);
Route::get('blog.edit/{blog}', [BlogController::class, 'edit'])->name('editBlog');

/* Project Management System */ 
Route::resource('projects', ProjectController::class);
Route::get('project.edit/{project}', [ProjectController::class, 'edit'])->name('editProject');

/*Front End */ 
/*Voir les Projets/page projets */ 
Route::get('/voirTousLesProjets', [VoirTousLesProjetsController::class, 'get_projects'])->name('voirTousLesProjets');
Route::get('/visuelProject/{project}',[VoirTousLesProjetsController::class, 'get_a_project'] )->name('getProject');

/* Voir Le blog */

Route::get('/voirLeBlog', [VoirLeBlogController::class, 'get_blogs'])->name('voirLeBlog');
Route::get('/visuelArticle/{blog}',[VoirLeBlogController::class, 'get_a_blog'] )->name('getArticle');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
