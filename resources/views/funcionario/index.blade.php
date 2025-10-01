@extends('layouts.app')

@section('content')
<div class="mb-4">
    <h2>Lista de Funcionarios</h2>
    <a href="{{ route('funcionarios.create') }}" class="btn btn-success">Novo Funcionario</a>
</div>

<table class="table table-responsive table-striped table-bordered mt-3">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Foto</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Cargo</th>
            <th>Função</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $funcionarios as $funcionario)
        <tr>
            <td>{{ $funcionario->id }}</td>
            <td><img src="{{  asset('storage/' .$funcionario->foto) }}"  class="img-thumbnail" width="100" height="100"></td>
            <td>{{ $funcionario->nome }}</td>
            <td>{{ $funcionario->email }}</td>
            <td>{{ $funcionario->cargo->cargo ?? "-" }}</td>
            <td>{{ $funcionario->funcao->funcao ?? "-" }}</td>
            <td class="align-middle">
                <div class="d-flex gap-2">
                    <a href="{{ route('funcionarios.edit', $funcionario->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form class="d-inline" action="{{ route('funcionarios.destroy', $funcionario->id) }}" method="post" style="display:inline-block\">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este funcionário ?')">Excluir</button>
                    </form>
                </div>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection