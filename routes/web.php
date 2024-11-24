<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

Route::post('/enviar-email', [ContatoController::class, 'enviarEmail'])->name('enviar.email');

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/basico', function () {return view('basico');});
Route::get('/intermediario', function () {return view('intermediario');});
Route::get('/premium', function () {return view('premium');});
Route::get('/personalizado', function () {return view('personalizado');});
Route::get('/DesenvolvimentoWeb', function () {return view('DesenvolvimentoWeb');});
Route::get('/Marketing', function () {return view('Marketing');});
Route::get('/Branding', function () {return view('Branding');});
