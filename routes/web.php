<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjetController;

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

Route::get('/projets', [ProjetController::class, 'index'])->name('projets.index');
Route::get('/projets/create', [ProjetController::class, 'create'])->name('projets.create');
Route::post('/projets', [ProjetController::class, 'store'])->name('projets.store');
Route::get('/projets/{projet}', [ProjetController::class, 'show'])->name('projets.show');
Route::get('/projets/{projet}/edit', [ProjetController::class, 'edit'])->name('projets.edit');
Route::put('/projets/{projet}', [ProjetController::class, 'update'])->name('projets.update');
Route::delete('/projets/{projet}', [ProjetController::class, 'destroy'])->name('projets.destroy');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

?>


