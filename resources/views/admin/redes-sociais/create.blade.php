@extends('adminlte::page')

@section('title', 'Redes sociais')

@section('content_header')

@stop

@section('content')

<x-adminlte-card class="mt-3" title="Cadastro de Pratos" theme="dark" icon="far fa-fw fa-file">
    <form method="post" action="{{ route('admin.redes-sociais.store') }}">
        @csrf
        <div class="form-row" style="display:flex; align-items:center">
            <div class="col-md-6 form-group">
                <label for="whatsapp">Telefone Whatsapp</label>
                <input type="text" class="form-control @error('whatsapp') is-invalid @enderror" value="{{ old('whatsapp', $rede_social->whatsapp) }}" name="whatsapp" placeholder="Telefone whatsapp">
                @error('whatsapp') <div class="invalid-feedback">{{ $errors->first('whatsapp') }}</div> @enderror
            </div>
            <div class="col-md-6 form-group">
                <label for="telefone">Telefone de contato</label>
                <input type="text" class="form-control @error('telefone') is-invalid @enderror" value="{{ old('telefone', $rede_social->telefone) }}" name="telefone" placeholder="Telefone para contato">
                @error('telefone') <div class="invalid-feedback">{{ $errors->first('telefone') }}</div> @enderror
            </div>
            <div class="col-md-6 form-group">
                <label for="ifood">Link IFood</label>
                <input type="text" class="form-control @error('ifood') is-invalid @enderror" value="{{ old('ifood', $rede_social->ifood) }}" name="ifood" placeholder="Link do I-Food">
                @error('ifood') <div class="invalid-feedback">{{ $errors->first('ifood') }}</div> @enderror
            </div>
        </div>
        <hr>
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
