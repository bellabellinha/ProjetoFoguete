<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FogueteController;


Route::get('/', function () {
    return view('BemVindo');
})->name('welcome');

Route::get('/calculadora', function () {
    return view('Calculadora');
})->name('calculadora');
Route::get('/lancar-foguete', function () {
    return view('Lancamento'); 
})->name('foguete');

Route::post('/resultado', [FogueteController::class, 'calcularDistancia'])->name('resultado');

// Rota para a página de resultados
Route::get('/resultado', function () {
    return view('resultado'); // Certifique-se de que 'resultado' é o nome do seu arquivo Blade
})->name('resultado');

Route::get('/ranking', [FogueteController::class, 'exibirRanking'])->name('ranking');
