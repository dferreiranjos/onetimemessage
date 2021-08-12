<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'main@index')->name('main_index');
Route::post('/init', 'main@init')->name('main_init');

// Confirmação do envio da mensagm
Route::get('/confirm/{purl}', 'main@confirm')->name('main_confirm');

// Leitura da mensagem
Route::get('/read/{purl}', 'main@read')->name('main_read');


//
