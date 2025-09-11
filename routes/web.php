<?php

use App\Http\Controllers\CargoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//rota para a página inicial
route::get('/', [HomeController::class, 'index'])->name('home.index');

//rotas para o recurso "cargo"
route::get('/cargos', [CargoController::class, 'index'])->name('cargos.index');
route::get('/cargos/create', [CargoController::class, 'create'])->name('cargos.create');
route::post('/cargos', [CargoController::class, 'store'])->name('cargos.store');



