<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controlador;


Route::controller(controlador::class)->group(function(){
    route::get('/', 'metodoInicio')->name('apodoInicio');
    route::get('/Relibro', 'metodoRelibro')->name('apodoRelibro');
});


Route::post('/guardarLibro', [controlador::class,'metodoGuardar'])->name('guardar');
