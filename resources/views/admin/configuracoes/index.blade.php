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
    <form method="post" action="{{ route('admin.configuracoes.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-row" style="display:flex; align-items:center">
            <div class="col-md-12">
                <label for="logo">Logomarca do site*</label>
                <input type="file" class="form-control-file" name="logo">
            </div>
        </div>
        <hr>
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
