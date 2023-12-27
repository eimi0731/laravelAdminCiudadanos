<?php
namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
//agregamos lo siguiente
use App\Http\Controllers\Controller;
use App\Models\Personas;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;
class PersonaController extends Controller
{
        function __construct()
    {
         $this->middleware('permission:ver-Ciudadano|crear-Ciudadano|editar-Ciudadano|borrar-Ciudadano')->only('index');
         $this->middleware('permission:crear-Ciudadano', ['only' => ['create','store']]);
         $this->middleware('permission:editar-Ciudadano', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-Ciudadano', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {      
        //Sin paginación
        /* $usuarios = User::all();
        return view('usuarios.index',compact('usuarios')); */

        //Con paginación
        $persona = Personas::paginate(5);
        return view('personas.index',compact('persona'));
        //al usar esta paginacion, recordar poner en el el index.blade.php este codigo  {!! $usuarios->links() !!}
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pdf()
    {
      
    $persona = Personas::all();
    $pdf = PDF:: loadHTML(('<h1>hola</h1>')); 
    return $pdf->stream();   
    
    // $pdf =Pdf::loadView('personas.pdf',compact('Personas'));
    // return $pdf->stream();
    

    }

    public function create()
    {
        //aqui trabajamos con name de las tablas de users
        $roles = Role::pluck('name','name')->all();
        return view('personas.crear',compact('roles'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'identificacion' => 'required',
            'apellido1' => 'required',
            'apellido2' => 'required',
            'nombre1'  => 'required',
            'nombre2' => 'required',
            'sexo' => 'required',
            'fecha_nacimiento' => 'required',
            'grupo_sanguineo'=> 'required',          
            'genero'=> 'required',            
            'etnia'=> 'required',
            'poblacion_especial'=> 'required',
            'telefono'=> 'required',
            'entidad'=> 'required',
            'direccion'=> 'required',
        ]);
    
        $input = $request->all();
        $persona = Personas::create($input);           
        $persona = Personas::paginate(5);
        return view('personas.index',compact('persona'));        
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function validacion()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persona = Personas::find($id);
        
    
        return view('personas.editar',compact('persona'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'identificacion' => 'required',
            'apellido1' => 'required',
            'apellido2'=> 'required',
            'nombre1' => 'required',
            'nombre2',
            'sexo' => 'required',
            'fecha_nacimiento' => 'required',
            'grupo_sanguineo'=> 'required',          
            'genero'=> 'required',            
            'etnia'=> 'required',
            'poblacion_especial'=> 'required',
            'telefono'=> 'required',
            'entidad'=> 'required',
            'direccion'=> 'required',
        ]);
    
        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));    
        }
    
        $persona = Personas::find($id);
        $persona->update($input);
        // DB::table('persona')->where('barrio_id',$id)->delete();
    
        // $persona->assignRole($request->input('roles'));
    
        return redirect()->route('personas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Personas::find($id)->delete();
        return redirect()->route('personas.index');
    }
}
