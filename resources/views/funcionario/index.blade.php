@extends('layouts.app')

@section('content')
<h2>Lista de Funcionarios</h2>
<a href="{{ route('funcionarios.create') }}" class="btn btn-success">Novo Funcionario</a>


@endsection