@extends('layouts.app')

@section('content')
<section class="section">
  <div class="section-header">
    <h3 class="page__heading">Registar Cuidadano</h3>
  </div>
  <div class="section-body">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">

            @if ($errors->any())
            <div class="alert alert-dark alert-dismissible fade show" role="alert">
              <strong>¡Revise los campos!</strong>
              @foreach ($errors->all() as $error)
              <span class="badge badge-danger">{{ $error }}</span>
              @endforeach
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif

            {!! Form::open(array('route' => 'personas.store','method'=>'POST')) !!}
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <label for="name">Identificación</label>
                  {!! Form::text('identificacion', null, array('class' => 'form-control')) !!}
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <label for="name">Fecha de Nacimiento</label>
                  {!! Form::date('fecha_nacimiento', null, array('class' => 'form-control')) !!}
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <label for="name">Nombre</label>
                  {!! Form::text('nombres', null, array('class' => 'form-control')) !!}
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <label for="name">Apellidos</label>
                  {!! Form::text('apellidos', null, array('class' => 'form-control')) !!}
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <label for="name" palechor="Selccione">Sexo</label>
                  {!! Form::select('sexo', ['F'=> 'Femenino','M'=> 'Masculino'],null, ['class' => 'form-control']) !!}
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <label for="name">Genero</label>
                  {!! Form::select('genero', ['Mujer'=> 'Mujer', 'Hombre'=> 'Hombre', 'LGBTI'=> 'LGBTI'],null, ['class' => 'form-control']) !!}
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <label for="password">Grupo Sanguineo</label>
                  {!! Form::select('grupo_sanguineo', ['O+','O-','AB+','AB-','AB+','A+','A-'],null, ['class' => 'form-control']) !!}
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <label for="password">Etnia</label>
                  {!! Form::select('etnia', ['Afrodescendiente'=> 'Afrodescendiente', 'Indigena'=> 'Indigena', 'Mestizo'=> 'Mestizo', 'Otros_grupos'=>'Otros Grupos'],null, ['class' => 'form-control']) !!}
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <label for="password">Población Especial</label>
                  {!! Form::select('poblacion_especial', ['Discapacidad'=> 'Discapacidad', 'Red_unidos'=> 'Red Unidos', 'Victima'=> 'Victimas', 'Ninguno'=>'Ninguno'],null, ['class' => 'form-control']) !!}
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <label for="name">Telefono</label>
                  {!! Form::text('telefono', null, array('class' => 'form-control')) !!}
                </div
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <label for="password">Entidad o tedendencia</label>
                  {!! Form::text('entidad', null, array('class' => 'form-control')) !!}
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <label for="password">Lugar De Residencia</label>
                  {!! Form::text('direccion', null, array('class' => 'form-control')) !!}
                </div>
              </div>
              <!-- <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="">Roles</label>
                                    {!! Form::select('roles[]', $roles,[], array('class' => 'form-control')) !!}
                                </div> -->
              <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
            </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection