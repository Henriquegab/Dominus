@extends('adminlte::page')

@section('title', 'Carrosseis')

@section('content_header')

@stop

@section('content')

<x-adminlte-card class="mt-3" title="Cadastro de Pratos" theme="dark" icon="far fa-fw fa-file">
    <form action="{{ route('admin.carrossel.index') }}" class="col-12 p-0">
        <div class="form-group input-group">
            <div class="input-group mb-3 p-0 col">
                <input type="text" class="form-control" placeholder="Busque pelo nome do registro" name="busca" value="{{ $busca }}">
                <div class="input-group-append">
                <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                </div>
            </div>
            <div class="ml-2">
                <a href="{{ route('admin.carrossel.create') }}" class="btn btn-primary">Criar novo</a>
            </div>
        </div>
    </form>
    <table class="table table-bordered">
        <colgroup>
            <col style="width: 50px">
            <col style="width: auto">
            <col style="width: 150px">
        </colgroup>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($carrosseis as $carrossel)
                <tr>
                    <td>{{ $carrossel->id }}</td>
                    <td>{{ $carrossel->nome }}</td>
                    <td>
                        <a href="{{ route('admin.carrossel.edit', $carrossel) }}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                        <form class="d-inline" action="{{ route('admin.carrossel.destroy', $carrossel) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-adminlte-card>







@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop

@section('footer')






@stop
