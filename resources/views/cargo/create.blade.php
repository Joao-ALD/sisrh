@extends('layouts.app')

@section('content')
    <h2>Lista de Cargos</h2>
    <a href="{{ route('cargos.create') }}" class="btn btn-success" >Novo Cargo</a>
@endsection
