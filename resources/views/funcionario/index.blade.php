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
            <th>Telefone</th>
            <th>Cargo</th>
            <th>Função</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $funcionarios as $funcionario)
        <tr>
            <td class="align-middle">{{ $funcionario->id }}</td>
            <td class="align-middle"><img src="{{  asset('storage/' .$funcionario->foto) }}" class="img-thumbnail" width="100" height="100"></td>
            <td class="align-middle">{{ $funcionario->nome }}</td>
            <td class="align-middle">{{ $funcionario->email }}</td>
            <td class="align-middle">{{ $funcionario->telefone }}</td>
            <td class="align-middle">{{ $funcionario->cargo->cargo ?? "-" }}</td>
            <td class="align-middle">{{ $funcionario->funcao->funcao ?? "-" }}</td>
            <td class="align-middle">
                <div class="d-flex gap-2">
                    <a href="{{ route('funcionarios.edit', $funcionario) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form class="d-inline" action="{{ route('funcionarios.destroy', $funcionario) }}" method="post" style="display:inline-block\">
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