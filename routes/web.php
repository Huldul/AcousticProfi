<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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
Route::get('/',[PageController::class, "index"]);
Route::get('/about',[PageController::class, "about"]);
Route::get('/soundproofing',[PageController::class, "soundproofing"]);
Route::get('/soundproofing-inner/{slug}', [PageController::class, "soundproofing_inner"]);
Route::get('/acoustic-inner/{slug}', [PageController::class, "acoustic_inner"]);
Route::get('/design',[PageController::class, "design"]);
Route::get('/partners',[PageController::class, "partners"]);
Route::get('/projects',[PageController::class, "projects"]);
Route::get('/contacts',[PageController::class, "contacts"]);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
