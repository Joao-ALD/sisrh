@extends('layouts.app')

@section('content')
<h2>Edit</h2>
<a href="{{ route('cargos.index') }}" class="btn btn-secondary">Voltar</a>

<div class="card">
    <dic class="card-body">
        <form action="{{ route('cargos.update', $cargo) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!--o laravel EXIGE o método PUT PARA ALTERAÇÕES  -->

            <div class="mb-3">
                <label class="form-label">Cargo</label>
                <input type="text" class="form-control" name="cargo" value="{{ $cargo->cargo }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Descrição</label>
                <textarea type="text" class="form-control" name="descricao" rows="3" required>{{ $cargo->descricao }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        </form>
    </dic>
</div>
@endsection