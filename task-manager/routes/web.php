<?php

use App\Http\Controllers\MateriaController;
use Illuminate\Routing\Route;

Route::post('/materias', 'MateriaController@index')->name('materias.index');

Route::get('/materias/create', [MateriaController::class,'create'])->name('materias.create');

Route::post('/materias', [MateriaController::class, 'store'])->name('materias.store');

Route::get('/materias/{materia}/edit', [MateriaController::class, 'edit'])->name('materias.edit');

Route::put('/materias/{materia}', [MateriaController::class, 'update'])->name('materias.update');

Route::delete('/materias/{materia}', [MateriaController::class, 'destroy'])->name('materias.destroy');
