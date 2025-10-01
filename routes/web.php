<?php

use App\Http\Controllers\CargoController;
use App\Http\Controllers\FuncaoController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//?rota para a página inicial
route::get('/', [HomeController::class, 'index'])->name('home.index');

//?rotas para o recurso "cargo"

//rotas para o index de "Cargo"
route::get('/cargos', [CargoController::class, 'index'])->name('cargos.index');
// Rota para a criação de um novo cargo
route::get('/cargos/create', [CargoController::class, 'create'])->name('cargos.create');
// Rota para salvar um cargo
route::post('/cargos', [CargoController::class, 'store'])->name('cargos.store');
// Rota para deletar um Cargo
route::delete('/cargos/{id}', [CargoController::class, 'destroy'])->name('cargos.destroy');
// Rota para levar ate a view de edição de cargo 
route::get('/cargos/{cargo}/edit', [CargoController::class,'edit'])->name('cargos.edit');
// Rota para atualizar um cargo no banco de dados 
route::put('/cargos/{cargo}', [CargoController::class,'update'])->name('cargos.update');


//?rotas para o recurso "Funcao"

///rotas para o index de "funcao"
route::get('/funcao', [FuncaoController::class, 'index'])->name('funcaos.index');
// Rota para a criação de um novo funcao
route::get('/funcao/create', [FuncaoController::class, 'create'])->name('funcaos.create');
// Rota para salvar um funcao
route::post('/funcao', [FuncaoController::class, 'store'])->name('funcaos.store');
// Rota para deletar um funcao
route::delete('/funcao/{id}', [FuncaoController::class, 'destroy'])->name('funcaos.destroy');
// Rota para levar ate a view de edição de funcao 
route::get('/funcao/{funcao}/edit', [FuncaoController::class,'edit'])->name('funcaos.edit');
// Rota para atualizar um funcao no banco de dados 
route::put('/funcao/{funcao}', [FuncaoController::class,'update'])->name('funcaos.update');

//? Rotas para o recurso "funcionario"

// rota para o index de "funcionario"
route::get('/funcionarios', [FuncionarioController::class,'index'])->name('funcionarios.index');
// rota para criar um novo registro de "funcionario"
route::get('/funcionarios/create', [FuncionarioController::class,'create'])->name('funcionarios.create');
// rota para salvar um novo "funcionario"
route::post('/funcionarios', [FuncionarioController::class,'store'])->name('funcionarios.store');
// rota para editar um "funcionario"
route::get('/funcionarios/{funcionario}/edit', [FuncionarioController::class,'edit'])->name('funcionarios.edit');
// rota para atualizar um "funcionario"
route::put('/funcionarios/{funcionario}', [FuncionarioController::class,'update'])->name('funcionarios.update');
// rota para deletar um "funcionario"
route::delete('/funcionarios/{funcionario}', [FuncionarioController::class,'destroy'])->name('funcionarios.destroy');