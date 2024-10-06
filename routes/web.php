<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [GuestController::class,'home']);
Route::get('/contact', [GuestController::class,'contact']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/**Admin */
Route::get('/admin/dashboard', [AdminController::class,'dashboard'] )->middleware('auth','admin');
Route::get('/admin/profile', [AdminController::class,'profile'] )->middleware('auth','admin');
Route::post('/admin/profile/update', [AdminController::class,'updateProfile'] )->middleware('auth','admin');
Route::get('/admin/formations', [FormationController::class,'index'] )->middleware('auth','admin');
Route::post('/admin/formation/search', [FormationController::class,'searchFormation'] )->middleware('auth','admin');
Route::get('/admin/clients', [AdminController::class,'clients'] )->middleware('auth','admin');
Route::get('/admin/commandes', [AdminController::class,'commandes'] )->middleware('auth','admin');


/**Client */
Route::get('/client/dashboard', [ClientController::class,'dashboard'] );
Route::get('/client/details/{id}', [FormationController::class,'details'] );
Route::get('/client/profile', [ClientController::class,'profile'] );
Route::post('/client/profile/update', [ClientController::class,'updateProfile'] )->middleware('auth');
Route::get('/client/dashboard', [FormationController::class,'showFormation'] )->middleware('auth');
Route::post('/client/order/store', [CommandeController::class,'store'] )->middleware('auth');
Route::get('/client/cart', [ClientController::class,'cart'] )->middleware('auth');
Route::get('/client/lc/{idlc}/destroy', [CommandeController::class,'ligneCommandeDestroy'] )->middleware('auth');
Route::post('/client/checkout', [ClientController::class,'checkout'] )->middleware('auth');
Route::get('/client/commandes', [ClientController::class,'mescommandes'] );


/**Formation */
Route::post('/admin/formation/store', [FormationController::class,'store'] )->middleware('auth','admin');
Route::post('/admin/formation/update', [FormationController::class, 'update'])->middleware('auth','admin');
Route::get('/admin/formation/{id}/delete', [FormationController::class,'destroy'] )->middleware('auth','admin');