@extends('adminlte::page')

@section('title', 'Cadastrar novo carrossel')

@section('content_header')

@stop

@section('content')

@php
    use Carbon\Carbon;
    $hoje = Carbon::now();
@endphp



<x-adminlte-card class="mt-3" title="Cadastro de Pratos" theme="dark" icon="far fa-fw fa-file">
    <h6>(*) - Campos Obrigatórios</h6>
    <form method="post" action="{{ route('admin.carrossel.update', $carrossel) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-row" style="display:flex; align-items:center">
            <div class="col-md-6 form-group">
                <label for="nome">Nome do carrossel*</label>
                <input type="text" class="form-control @error('nome') is-invalid @enderror" value="{{ old('nome', $carrossel->nome) }}" name="nome" placeholder="Nome do item" required>
                @error('nome') <div class="invalid-feedback">{{ $errors->first('nome') }}</div> @enderror
            </div>
            <div class="col-md-8 form-group">
                <label for="descricao">Conteúdo do carrossel</label>
                <textarea type="text" rows="4" class="form-control @error('descricao') is-invalid @enderror" name="descricao">{{ old('descricao', $carrossel->descricao) }}</textarea>
                @error('descricao') <div class="invalid-feedback">{{ $errors->first('descricao') }}</div> @enderror
            </div>
            <div class="col-md-12">
                <label for="imagem">Imagem*</label>
                <input type="file" class="form-control-file" name="imagem">
            </div>
        </div>
        <hr>
        <a href="{{ route('admin.carrossel.index') }}" class="btn btn-danger mr-2">Cancelar</a>
        <button class="btn btn-success" type="submit">Salvar</button>
    </form>
</x-adminlte-card>







@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop

@section('footer')






@stop
