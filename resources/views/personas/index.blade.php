@extends('layouts.app')

@section('content')
    <section class="section">
        <div style="background:#fdfae4 ;color:black;" class="section-header">
        <h3 class="page__heading">Ciudadanos</h3>
        <img class="img-fluid" src="/img/nav.png" alt="Escudo de Santander de Quilichao" style="">
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                
            
                        @can('crear-persona')
                        <a class="btn btn-warning" href="{{ route('personas.create') }}">Nuevo</a>
                        @endcan
            <div class="table-responsive">
                        <table class="table table-striped mt-2">
                                <thead style="background-color:#c53b3b">                                     
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">ID</th>
                                    <th style="color:#fff;">Identificacón</th>
                                    <th style="color:#fff;">Fecha de Nacimiento</th>
                                    <th style="color:#fff;">Nombres</th>                                    
                                    <th style="color:#fff;">Apellidos</th>
                                    <th style="color:#fff;">Sexo</th>   
                                    <th style="color:#fff;">Genero</th> 
                                    <th style="color:#fff;">Grupo Sanguineo</th>
                                    <th style="color:#fff;">Etnia</th> 
                                    <th style="color:#fff;">Población Especial</th> 
                                    <th style="color:#fff;">Teléfono</th> 
                                    <th style="color:#fff;">Entidad</th> 
                                    <th style="color:#fff;">Lugar de Residencia</th> 
                                                                                          
                              </thead>
                             
                              <tbody>
                            @foreach ($persona as $personas)
                            <tr>
                                <td style="display: none;">{{ $personas->id }}</td>                                
                                <td>{{ $personas->id }}</td>
                                <td>{{ $personas->identificacion}}</td>
                                <td>{{ $personas->fecha_nacimiento}}</td>
                                <td>{{ $personas->nombres}}</td>
                                <td>{{ $personas->apellidos}}</td>
                                <td>{{ $personas->sexo}}</td>
                                <td>{{ $personas->genero}}</td>
                                <td>{{ $personas->grupo_sanguineo}}</td>
                                <td>{{ $personas->etnia}}</td>
                                <td>{{ $personas->poblacion_especial}}</td>
                                <td>{{ $personas->telefono}}</td>
                                <td>{{ $personas->entidad}}</td>
                                <td>{{ $personas->direccion}}</td>
                                
                                <td>
                                   
                                    <form action="{{ route('personas.destroy',$personas->id) }}" method="POST">                                        
                                        @can('editar-personas')
                                        <a class="btn btn-info" href="{{ route('personas.edit',$personas->id) }}">Editar</a>
                                        @endcan

                                        @csrf
                                        @method('DELETE')
                                        @can('borrar-personas')
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                        @endcan
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        </div>

                        <!-- Ubicamos la paginacion a la derecha -->
                        <div class="pagination justify-content-end">
                            {!! $persona->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
