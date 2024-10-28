<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CriadorController;
use App\Http\Controllers\JogosController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias.index');
Route::get('/categorias/{categoria}/edit', [CategoriaController::class, 'edit'])->name('categorias.edit');
Route::get('/categorias{criador}', [CategoriaController::class, 'show'])->name('categorias.show');
Route::get('/categorias/create', [CategoriaController::class, 'create'])->name('categorias.create');
Route::post('/categorias', [CategoriaController::class, 'store'])->name('categorias.store');
Route::put('/categorias/{categoria}', [CategoriaController::class, 'update'])->name('categorias.update');
Route::delete('/categorias/{categoria}', [CategoriaController::class, 'destroy'])->name('categorias.destroy');

Route::get('/criadores', [CriadorController::class, 'index'])->name('criadores.index');
Route::get('/criadores/create', [CriadorController::class, 'create'])->name('criadores.create');
Route::post('/criadores', [CriadorController::class, 'store'])->name('criadores.store');
Route::get('/criadores{criador}', [CriadorController::class, 'show'])->name('criadores.show');
Route::get('/criadores/{criador}/edit', [CriadorController::class, 'edit'])->name('criadores.edit');
Route::put('/criadores/{criador}', [CriadorController::class, 'update'])->name('criadores.update');
Route::delete('/criadores/{criador}', [CriadorController::class, 'destroy'])->name('criadores.destroy');


Route::get('/jogos', [JogosController::class, 'index'])->name('jogos.index');
Route::get('/jogos/create', [JogosController::class, 'create'])->name('jogos.create');
Route::post('/jogos', [JogosController::class, 'store'])->name('jogos.store');
Route::get('/jogos/{jogo}', [JogosController::class, 'show'])->name('jogos.show');
Route::get('/jogos/{jogo}/edit', [JogosController::class, 'edit'])->name('jogos.edit');
Route::put('/jogos/{jogo}', [JogosController::class, 'update'])->name('jogos.update');
Route::delete('/jogos/{jogo}', [JogosController::class, 'destroy'])->name('jogos.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/', function () {
        return redirect()->route('login');
    })->name('home');
});

require __DIR__.'/auth.php';
