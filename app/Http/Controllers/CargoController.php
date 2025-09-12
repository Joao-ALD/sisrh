<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    public function index()
    {
        $cargos = Cargo::all();
        return view("cargo.index", compact("cargos"));
    }
    public function create()
    {
        return view("cargo.create");
    }
    public function store(Request $request)
    {
        Cargo::create($request->all());

        return redirect()->route("cargos.index");
    }
    
    public function destroy($id){
        $cargo = Cargo::findOrFail( $id );
        $cargo->delete();

        return redirect()->route("cargos.index");
    }

    public function edit(Cargo $cargo){
        return view("cargo.edit", compact("cargo"));
    }

    public function update(Request $request, Cargo $cargo){
        $cargo->update($request->all());
        return redirect()->route("cargos.index");
    }
}
