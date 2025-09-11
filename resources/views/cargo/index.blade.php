@extends('layouts.app')

@section('content')
    <h2>Lista de Cargos</h2>
    <a href="{{ route('cargos.create') }}" class="btn btn-success" >Novo Cargo</a>
    
    <table class="table table-striped table-bordered mt-3">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Cargo</th>
                <th>Descrição</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="" class="btn btn-warning">Editar</a> <a href="" class="btn btn-danger">Excluir</a></td>
            </tr>
        </tbody>
    </table>

@endsection