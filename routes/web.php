<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\amtc;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\admin;

Route::get('/', function () {
    return view('index');
})->name('home-site');

Route::get('/about-us', [AboutUsController::class, 'aboutUs'])->name('site.abous-us');
Route::get('/nos-valeurs', [AboutUsController::class, 'ourValuesPage'])->name('site.nos-valeurs');
Route::get('/les-quatres-v', [AboutUsController::class, 'fourValuesPage'])->name('site.les-quatres-v');
Route::get('/nos-engagements', [AboutUsController::class, 'commitmentsPage'])->name('site.nos-engagements');
Route::get('/mot-du-president', [AboutUsController::class, 'chairmanMessagePage'])->name('site.mot-du-president');

Route::get('/nos-missions', [MissionController::class, 'index'])->name('site.nos-missions');
Route::get('/notre-equipe', [TeamController::class, 'index'])->name('site.our-teams');
Route::get('/biographie/{team}', [TeamController::class, 'show'])->name('site.teams.show');

Route::get('/news', [NewController::class, 'index'])->name('news.index');
// Route::post('/news', [NewController::class, 'store'])->name('news.store');
// Route::get('/news/{article}', [NewController::class, 'show'])->name('news.show');
// Route::delete('/news/{article}', [NewController::class, 'delete'])->name('news.delete');

Route::get('/contact', [ContactController::class, 'index'])->name('site.contact');

Route::get('/amtc', [amtc\IndexController::class, 'index'])->name('amtc-index');


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [admin\DashboardController::class, 'index'])->name('dashboard');
    
    Route::get('/admin/demandes-adhesions', [admin\Adhesioncontroller::class, 'index'])->name('admin-members-lists');
    Route::post('/admin/demandes-adhesions', [admin\Adhesioncontroller::class, 'update'])->name('admin.members.confirm');
    
    Route::get('/admin/notre-equipe', [admin\TeamController::class, 'index'])->name('admin-teams-lists');
    Route::post('/admin/notre-equipe', [admin\TeamController::class, 'store'])->name('admin.teams.store');
    
    Route::get('/admin/liste-des-publications', [admin\PostController::class, 'index'])->name('admin-posts-lists');
    Route::get('/admin/creer-une-publication', [admin\PostController::class, 'create'])->name('admin-create-post');
    Route::post('/admin/creer-une-publication', [admin\PostController::class, 'create'])->name('admin.posts.store');
});


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');

Route::get('user', [SessionController::class, 'logout'])->name('logout');