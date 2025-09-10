<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CargoController extends Controller
{
    public function index(){
        return view("cargo.index");
    }
    public function create(){
        return view("cargo.create");
    }
}

