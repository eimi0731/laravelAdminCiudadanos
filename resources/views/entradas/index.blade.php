@extends('layouts.app')


@section('content')
<section class="section">
    <div style="background:#fdfae4 ;color:black;" class="section-header">
        <h3 class="page__heading">ENTRADAS</h2>
            <img class="img-fluid" src="/img/nav.png" alt="Escudo de Santander de Quilichao" style="">
    </div>
    <div class="section-body">

        <div class="row" style="background-color: white">
            <div class="col-5">
                <div class="input-group p-3">
                    {!! Form::open(array('url' => 'getEntradas','method'=>'POST')) !!}
                    <label for="name">Identificación</label>
                    {!! Form::text('identificacion', isset($persona) ? $persona->identificacion : null, array('class' => 'form-control')) !!}
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-outline-primary">Consultar</button>
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
            <div class="col-7">
                @if (isset($persona) && $persona)

                {!! Form::open(array('url' => 'agregar-entrada','method'=>'POST')) !!}

                <div class="mb-3">
                    <label for="tramite">Tramite</label>
                    {!! Form::text('tramite', null, array('class' => 'form-control')) !!}
                </div>
                <div class="mb-3">
                    <label for="unidad_administrativa">Unidad Administrativa</label>
                    {!! Form::text('unidad_administrativa', null, array('class' => 'form-control')) !!}
                </div>
                {!! Form::hidden('id_personas', $persona->id, array('class' => 'form-control')) !!}
                <div class="input-group-append">
                    <button type="submit" class="btn btn-outline-primary">Agregar Entrada</button>
                </div>
                {!! Form::close() !!}
                @endif

            </div>
        </div>


    </div>
    <br>
    <div class="container">
        @if (isset($errorMessage) && $errorMessage)
        <div class="alert alert-danger p-3">
            {{$errorMessage}}
        </div>
        @endif

        @if ($errors->any())
                    <div class="alert alert-danger p-0">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


        <table class="table" style="background-color: white">
            <thead>
                <tr>
                    <th scope="col">Tramite</th>
                    <th scope="col">Unidad Administrativa</th>
                    <th scope="col">Fecha</th>
                    <th </tr>
            </thead>
            @if (isset($entradas))
            <tbody>
                @foreach ($entradas as $e)
                <tr>
                    <td>{{$e->tramite}}</td>
                    <td>{{$e->unidad_administrativa}}</td>
                    <td>{{$e->created_at}}</td>
                </tr>
                @endforeach
            </tbody>
            @endif

        </table>
    </div>




</section>
@endsection