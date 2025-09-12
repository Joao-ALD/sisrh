<?php

namespace App\Http\Controllers;

use App\Models\Funcao;
use Illuminate\Http\Request;

class FuncaoController extends Controller
{
    public function index()
    {
        $funcaos = Funcao::all();
        return view("funcao.index", compact("funcaos"));
    }
    public function create()
    {
        return view("funcao.create");
    }
    public function store(Request $request)
    {
        Funcao::create($request->all());

        return redirect()->route("funcaos.index");
    }
    
    public function destroy($id){
        $funcao = Funcao::findOrFail( $id );
        $funcao->delete();

        return redirect()->route("funcaos.index");
    }

    public function edit(Funcao $funcao){
        return view("funcao.edit", compact("funcao"));
    }

    public function update(Request $request, Funcao $funcao){
        $funcao->update($request->all());
        return redirect()->route("funcaos.index");
    }
}

