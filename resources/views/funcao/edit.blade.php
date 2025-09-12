@extends('layouts.app')

@section('content')
<h2>Editar</h2>
<a href="{{ route('funcaos.index') }}" class="btn btn-secondary">Voltar</a>

<div class="card">
    <dic class="card-body">
        <form action="{{ route('funcaos.update', $funcao) }}" method="post">
            @csrf
            @method('PUT') <!--o laravel EXIGE o método PUT PARA ALTERAÇÕES  -->

            <div class="mb-3">
                <label class="form-label">Funções</label>
                <input type="text" class="form-control" name="funcaos" value="{{ $funcao->funcao }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Descrição</label>
                <textarea type="text" class="form-control" name="descricao" rows="3" required>{{ $funcao->descricao }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        </form>
    </dic>
</div>
@endsection