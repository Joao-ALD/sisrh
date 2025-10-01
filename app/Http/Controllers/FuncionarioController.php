<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\Funcao;
use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function index()
    {
        $funcionarios = Funcionario::with(['cargo', 'funcao'])->get();
        
        return view("funcionario.index", compact("funcionarios"));
    }

    public function create()
    {
        $cargos = Cargo::all();
        $funcaos = Funcao::all();

        return view("funcionario.create", compact("cargos", "funcaos"));
    }

    public function store(Request $request)
    {
        $request->validate(['foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);
        $data = $request->except('foto');   
        
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('uploads', 'public');
            $data['foto'] = $path;
        }
        
        Funcionario::create($data);
        // Redirecionamento para a lista de funcionarios com uma mensagem de sucesso
        return redirect()->route("funcionarios.index")->with('success', "Funcionário cadastrado com sucesso");
    }
}
