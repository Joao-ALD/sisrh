<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\Funcao;
use App\Models\Funcionario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function edit(Funcionario $funcionario)
    {
        $cargos = Cargo::all();
        $funcaos = Funcao::all();

        return view("funcionario.edit", compact("funcionario", "cargos", "funcaos"));
    }

    public function update(Request $request, Funcionario $funcionario)
    {
        $request->validate(['foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);
        $data = $request->except('foto');   
        
        if ($request->hasFile('foto')) {
            if($request->hasFile('foto')){
                // Deletar o registro da foto do funcionario se existir
                if ($funcionario->foto) {
                    Storage::disk('public')->delete($funcionario->foto);
                }
                $path = $request->file('foto')->store('uploads', 'public');
                $data['foto'] = $path;
            }
        }
        
        $funcionario->update($data);
        // Redirecionamento para a lista de funcionarios com uma mensagem de sucesso
        return redirect()->route("funcionarios.index")->with('success', "Funcionário atualizado com sucesso");
    }

    public function destroy(Funcionario $funcionario)
    {
        // deletar o registro da foto do funcionario se existir
        if ($funcionario->foto) {
            Storage::disk('public')->delete($funcionario->foto);
        }
        
        $funcionario->delete();
        return redirect()->route("funcionarios.index")->with('success', "Funcionário deletado com sucesso");
    }
}
