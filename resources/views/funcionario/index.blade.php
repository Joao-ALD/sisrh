@extends('layouts.app')

@section('content')
<h2>Lista de Funcionarios</h2>
<a href="{{ route('funcionarios.create') }}" class="btn btn-success">Novo Funcionario</a>

<table class="table table-striped table-bordered mt-3">
    <thead class="table-dark">
        <tr>
            <th>Foto</th>
            <th>ID</th>
            <th>Nome</th>
            <th>Cargo</th>
            <th>Função</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $funcionarios as $funcionario)
        <tr>
            <td><img src="{{ $funcionario->foto }} alt="Foto do funcionário" width="60" height="60"></td>
            <td>{{ $funcionario->id }}</td>
            <td>{{ $funcionario->nome }}</td>
            <td>{{ $funcionario->cargo->cargo ?? "-" }}</td>
            <td>{{ $funcionario->funcao->funcao ?? "-" }}</td>
            <td class="align-middle">
                <div class="d-flex gap-2">
                    <a href="{{ route('funcaos.edit', $funcionario) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form class="d-inline" action="{{ route('funcaos.destroy', $funcionario->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este funcao ?')">Excluir</button>
                    </form>
                </div>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection