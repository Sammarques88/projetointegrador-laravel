<?php

<<<<<<< HEAD
=======
use App\Http\Controllers\ProfileController;
>>>>>>> 6ea9737 (projetointegrador-laravel-12-06)
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route ::get('/sobrenos', function () { return 'Essa é a pagína sobre nós'; });
 
Route ::get('/logincadastro', function () { return 'Essa é a pagína de login e cadastro'; });
Route ::get('/menusalas', function () { return 'Essa é a pagína do menu de salas'; });
Route ::get('/sala', function () { return 'Essa é a pagína da sala'; });
Route ::get('/home', function () { return 'Essa é a pagína home'; });
Route ::get('/contatos', function () { return 'Essa é a pagína sobre os contatos'; });
Route ::get('/contrato', function () { return 'Essa é a pagína para contratar um profissional'; });
Route::get('/login', function(){
    return 'Essa é a página de login'; });
=======
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/index', function () {
    return view('index');
});
    

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
>>>>>>> 6ea9737 (projetointegrador-laravel-12-06)
