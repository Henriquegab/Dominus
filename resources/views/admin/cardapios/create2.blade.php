@extends('adminlte::page')

@section('title', 'Ficha de Inscrição')

@section('content_header')

@stop

@section('content')

@php
    use Carbon\Carbon;
    $hoje = Carbon::now();
@endphp



<x-adminlte-card class="mt-3" title="Cadastro de Pratos" theme="dark" icon="far fa-fw fa-file">
    <h6>(*) - Campos Obrigatórios</h6>
    <form method="post" action="{{ route('cardapio.store') }}">
        @csrf

        @for ($i=0; $i < $quantidade; $i++)

        <div class="form-row">


            <div class="col-md-3 mb-3">
                <label for="nome[]">Nome do Prato*</label>
                <input type="text" class="form-control @error('nome[]') is-invalid @enderror" value="{{ old('nome[]') }}" name="nome[]" placeholder="Risoto de Frango" required>
                @error('nome[]') <div class="invalid-feedback">{{ $errors->first('nome[]') }}</div> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="conteudo[]">Conteúdo do prato*</label>
                <input type="text" class="form-control @error('conteudo[]') is-invalid @enderror" value="{{ old('conteudo[]') }}" name="conteudo[]" placeholder="Risoto de Frango" required>
                @error('conteudo[]') <div class="invalid-feedback">{{ $errors->first('conteudo[]') }}</div> @enderror
            </div>
            <div class="col-md-3 mb-3">
                <x-adminlte-input-file id="imagem" name="imagem[]" label="Upload files"
                    placeholder="Selecione uma Imagem..." igroup-size="md" legend="Selecionar">

                    <x-slot name="prependSlot">
                        <div class="input-group-text text-primary">
                            <i class="fas fa-file-upload"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input-file>


            </div>






        </div>

        <hr>

        @endfor




        <button class="btn btn-primary" type="submit">Cadastrar</button>






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
