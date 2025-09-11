@extends('layouts.app')

@section('content')
    <h2>Criar novo Cargo</h2>
    <a href="{{ route('cargos.index') }}" class="btn btn-secondary" >Voltar</a>

    <div class="card mt-3">
        <div class="card-body">
            <form action="{{ route('cargos.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nome do Cargo</label>
                    <input type="text" name="cargo" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Descrição do Cargo</label>
                    <textarea class="form-control" type="text" name="descricao" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>
@endsection 