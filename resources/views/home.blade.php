@extends('layouts.app')

@section('content')
    <section class="section">
        <div style="background:#fdfae4 ;color:black;" class="section-header">
       
        <img class="img-fluid" src="/img/nav.png" alt="Escudo de Santander de Quilichao" style="">
           
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div style="background: #edcf091c;color:black;" class="card-body">                         
                                <div class="row">
                                    <div class="col-md-4 col-xl-4">
                                    
                                    <div class="card bg-c-blue order-card" style="background: #358ee3;color:black;">
                                            <div class="card-block">
                                            <h5>Usuarios</h5>                                               
                                                @php
                                                 use App\Models\User;
                                                $cant_usuarios = User::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fa fa-users f-left"></i><span>{{$cant_usuarios}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/usuarios" class="text-white">Ver más</a></p>
                                            </div>                                            
                                        </div>                                    
                                    </div>
                                    
                                    <div class="col-md-4 col-xl-4">
                                        <div style="background: #016e59; color:black;" class="card bg-c-green order-card">
                                            <div class="card-block">
                                            <h5>Roles</h5>                                               
                                                @php
                                                use Spatie\Permission\Models\Role;
                                                 $cant_roles = Role::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fa fa-user-lock f-left"></i><span>{{$cant_roles}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/roles" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>                                                                
                                    
                                    <div class="col-md-4 col-xl-4">
                                        <div style="background:  #fb9900; color:black;" class="card bg-c-pink order-card">
                                            <div class="card-block">
                                                <h5>Ciudadanos Registrados</h5>                                               
                                                @php
                                                 use App\Models\Personas;
                                                $cant_personas = Personas::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fa fa-users" aria-hidden="true"></i><span>{{$cant_personas}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/personas" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

