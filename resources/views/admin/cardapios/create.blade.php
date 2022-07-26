@extends('adminlte::page')

@section('title', 'Pagamentos - Seleção de Aluno')

@section('content_header')

@stop

@section('content')

@php

@endphp

<div class="row justify-content-center align-self-center">

    <x-adminlte-card class="mt-3" style="width: 50rem;" title="Cardápio Diário - Seleção de quantidade de Pratos" theme="dark" icon="far fa-fw fa-file">

        <form method="post" action="{{ route('cardapio.create2') }}">
            @csrf

            <div class="form-row">



            {{-- @endphp
            <x-adminlte-select2 enable-old-support required label="Quantidade de Pratos" name="quantidade" fgroup-class="col-md-12" id="quantidade">
                <x-adminlte-options

                empty-option="Selecione uma opção"


                        />
            </x-adminlte-select2> --}}


            <x-adminlte-select enable-old-support required label="Quantidade de Pratos" name="quantidade" fgroup-class="col-md-12" id="quantidade">
                <option value="" selected disabled>Selecione uma opção</option>
                <option >2</option>
                <option >3</option>
                <option >4</option>
                <option >5</option>
                <option >6</option>
            </x-adminlte-select>











            </div>





            <button class="btn btn-primary" type="submit">Continuar</button>



       </form>


    </x-adminlte-card>

</div>









@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

@section('footer')


@stop
