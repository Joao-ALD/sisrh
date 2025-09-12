@extends('layouts.app')

@section('content')
<h2>Lista de Cargos</h2>
<a href="{{ route('cargos.create') }}" class="btn btn-success">Novo Cargo</a>

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
        @foreach ( $cargos as $cargo)
        <tr>
            <td>{{ $cargo->id }}</td>
            <td>{{ $cargo->cargo }}</td>
            <td>{{ $cargo->descricao }}</td>
            <td><a href="{{ route('cargos.edit', $cargo) }}" class="btn btn-warning btn-sm">Editar</a>

            <form class="d-inline" action="{{ route('cargos.destroy', $cargo->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este Cargo ?')">Excluir</button>
            </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection