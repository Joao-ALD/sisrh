@extends('layouts.app')

@section('content')
<h2>Lista de Funções</h2>
<a href="{{ route('funcaos.create') }}" class="btn btn-success">Nova Função</a>

<table class="table table-striped table-bordered mt-3">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Função</th>
            <th>Descrição</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $funcaos as $funcao)
        <tr>
            <td>{{ $funcao->id }}</td>
            <td>{{ $funcao->funcao }}</td>
            <td>{{ $funcao->descricao }}</td>
            <td class="align-middle">
                <div class="d-flex gap-2">
                    <a href="{{ route('funcaos.edit', $funcao) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form class="d-inline" action="{{ route('funcaos.destroy', $funcao->id) }}" method="post">
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