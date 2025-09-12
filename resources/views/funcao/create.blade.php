@extends('layouts.app')

@section('content')
    <h2>Criar nova Função</h2>
    <a href="{{ route('funcaos.index') }}" class="btn btn-secondary" >Voltar</a>

    <div class="card mt-3">
        <div class="card-body">
            <form action="{{ route('funcaos.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nome da função</label>
                    <input type="text" name="funcao" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Descrição da função</label>
                    <textarea class="form-control" type="text" name="descricao" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>
@endsection 