<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    public function index()
    {
        return view("cargo.index");
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
}
